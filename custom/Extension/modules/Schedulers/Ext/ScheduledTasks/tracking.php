<?php
/**
 * This array provides the Schedulers admin interface with values for its "Job"
 * dropdown menu.
 */
$job_strings[] = 'Tracking';


function sendSugarPHPMail($tos,$trackings_info,$case_number,$case_id){

	require_once('include/SugarPHPMailer.php');
	require_once('modules/Administration/Administration.php');
	require_once('modules/EmailTemplates/EmailTemplate.php');
	require_once('modules/Emails/Email.php');
	//email template
	$emailTemp = new EmailTemplate();
	$emailTemp->disable_row_level_security = true;
 
	//This is where we use the ID value of the email template record
	$emailTemp->retrieve('f3fad0b8-3679-9130-22e6-502297bc5beb');
	//end of template
	$mail = new SugarPHPMailer();
	$admin = new Administration();
	$admin->retrieveSettings();

	if ($admin->settings['mail_sendtype'] == "SMTP") {
		$mail->Host = $admin->settings['mail_smtpserver'];
		$mail->Port = $admin->settings['mail_smtpport'];

		if ($admin->settings['mail_smtpauth_req']) {
			$mail->SMTPAuth = TRUE;
			$mail->Username = $admin->settings['mail_smtpuser'];
			$mail->Password = $admin->settings['mail_smtppass'];
		}

		$mail->mailer   = "smtp";
		$mail->SMTPKeepAlive = true;

	}else{
		$mail->mailer = 'sendmail';
	}

	foreach ($tos as $name => $address){
		$mail->AddAddress("{$address}", "{$name}");
		$to_name=$name;
		$to_addr=$address;
	}

	$mail->From     = $admin->settings['notify_fromaddress'];
	$mail->FromName = $admin->settings['notify_fromname'];
	$mail->ContentType = "text/html"; //"text/plain"
	$mail->SMTPSecure="tls";
	$mail->Subject=from_html($emailTemp->subject);
	$mail->Subject = str_replace('%', $case_number, $mail->Subject);//from_html($emailTemp->subject);// $subject
	
	$htmlBody = from_html($emailTemp->body_html); // new row
	$body = wordwrap($emailTemp->body_html, 900); //$body
	$htmlBody = str_replace('$contact_user_pwd_last_changed', TimeDate::getInstance()->nowDb(), $htmlBody);
	$body = str_replace('$contact_user_pwd_last_changed', TimeDate::getInstance()->nowDb(), $body);
	$body=str_replace('$trackings', $trackings_info, $body);
	$htmlBody=str_replace('$trackings', $trackings_info, $htmlBody);
	$body=str_replace('$date', date('n/j/Y'), $body);
	$htmlBody=str_replace('$case_number', $case_number, $htmlBody);
	$body=str_replace('$case_number', $case_number, $body);
	$htmlBody=str_replace('$date', date('n/j/Y'), $htmlBody);
	$mail->body_html = $htmlBody;
	$mail->Body = $body;

	$mail->IsHTML(true); // new line
	$mail->prepForOutbound();



	if (!$mail->send()) {
		$GLOBALS['log']->info("sendSugarPHPMail Trackings - Mailer error: " . $mail->ErrorInfo);		
		return false;
	}else{		
		$c = new aCase();
		$c->retrieve($case_id);
		/*Create email*/
		$email= new Email();
		$email->id = null;
	//	$email->new_with_id = true;
		 
		$email->description =$body;
		$email->description_html=$htmlBody;	 
		$email->name= $mail->Subject;
		$email->type = 'out';
		$email->status = 'sent';
		$email->intent = 'pick';
		$email->date_sent =date('n/j/Y');
		$email->to_addrs_names=$to_addr;
		$email->to_name=$to_name;
		$email->assigned_user_id=$c->assigned_user_id;
		$email->parent_id=$case_id;
		$email->mailbox_id='c2620b84-46bd-59f8-8e64-4e779a92aad5';
		$email->from_addr='customerservice@kraususa.com';
		$email->from_addr_name='Customer Service';
		$email->parent_type='Cases';
		$email->save();
		$GLOBALS['log']->info("Email with tracking sent. Email Id: " . $email->id);	
		 
		//Add relations		 
		if($c->load_relationship('emails')) {			
			$c->emails->add($email->id);
		} // if
		return true;
	}
}

function Tracking() {
	$username = $GLOBALS['db']->connectOptions['db_user_name'];
	$password = $GLOBALS['db']->connectOptions['db_password'];
	$hostname = $GLOBALS['db']->connectOptions['db_host_name'];
	$database=	'vendor_portal';
	
	$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
	$selected = mysql_select_db($database,$dbhandle) or die("Could not select database ".$dbhandle); 	
	
	//PartsReqCompleted
	//WaitingTracking
   $cc = new aCase();
   
   $r = $cc->db->query("SELECT c.id FROM cases c INNER JOIN cases_cstm cs ON cs.id_c=c.id WHERE c.status   = 'WaitingTracking' AND ( cs.ponumber_c LIKE 'SOPR%'  OR cs.ponumber_c LIKE 'SW%'  ) " );   
   
   $count_sent=0;
   	while($a = $cc->db->fetchByAssoc($r)) {
   		
   		$c = new aCase();
   		$case_id=$a['id'];
   		$c->retrieve($case_id);
   		$po_number=$c->ponumber_c;
   		$trackings="";
   		$email_sent=0;
   		$skip=0; //skip (empty result)
   		
   		$res = mysql_query("SELECT customer_po,tracking,carrier FROM order_tracking_info  WHERE order_no='".$po_number."' AND order_ship_status='Shipped'" ,$dbhandle);   	
   		  	

   		if(mysql_num_rows($res)==0) {
   			$skip=1;
   		}
   		 
   		if ($skip==0){
			$counter=0;
   			while($row=mysql_fetch_assoc($res)) {
				  $counter++;
   				if ($counter==1){
   					$trackings.="Order#: ".$row['customer_po']."<br/><br/>";
   				}			   	   			
   				if ($row['carrier']=='UPS'){
   					$trackings.="<a href=\"http://wwwapps.ups.com/WebTracking/track?track=yes&amp;trackNums=".$row['tracking']."\"  target=\"_blank\">".$row['tracking']."</a> (".$row['carrier'].") <br/><br/>";
   				} elseif ($row['carrier']=='FEDEX') {
   					$trackings.="<a href=\"http://www.fedex.com/Tracking?action=track&amp;tracknumbers=".$row['tracking']."\"  target=\"_blank\">".$row['tracking']."</a> (".$row['carrier'].") <br/><br/>";
   				} elseif ($row['carrier']=='USPS') {
   					$trackings.="<a href=\"http://trkcnfrm1.smi.usps.com/PTSInternetWeb/InterLabelInquiry.do?origTrackNum=".$row['tracking']."\"  target=\"_blank\">".$row['tracking']."</a> (".$row['carrier'].") <br/><br/>";
   				}else {
   					$trackings.=$row['tracking']." (".$row['carrier'].") <br/><br/>";
   				}
   				$cust_po=$row['customer_po'];
   		}
     	    	       		 
   		/*Email part*/ 
   			$to=array();
   			$notify_user = new Account();
   			$notify_user->retrieve ( $c->account_id );
   			$email = $notify_user->email1;
   			$case_number = $c->case_number;
   			$to[$notify_user->name] = $email;
   			if (! empty ( $email )) {
   				if (!sendSugarPHPMail($to,$trackings,$case_number,$case_id)) {
	   				$GLOBALS ['log']->info ( "Could not send Tracking Notification:  " . $mail->ErrorInfo );   				 
   				} else {
   					/*Save Case*/
   					$email_sent=1;
   					$c->status="PartsReqCompleted";
   					$c->save();   		 			 
   					$ccc = new SM_SalesOrder();   					 
   					$rs = $ccc->db->query("SELECT so.id from sm_salesorder so WHERE so.name='".$cust_po."' " );   					    				 
   					while($b = $ccc->db->fetchByAssoc($rs)) {   				   			
   						$order_obj = new SM_SalesOrder();
   						$order_obj->retrieve($b['id']);
   						$order_obj->status_c='completed';
   						$order_obj->save();   					    			
   					}   					
   				}
   			}
   			unset($to);
   			$count_sent++; 
   		}
   		mysql_free_result($res); 
   	    
   		
 		//if ($email_sent==1)
   			//break;// one b yone
 	/* 	if ($count_sent==10){
 	 		break;
 	 	} */
   		   
   }
   mysql_close($dbhandle);
 
   return true;
}

 

