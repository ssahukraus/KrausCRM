<?php 
 //WARNING: The contents of this file are auto-generated


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

 



/**
 * This array provides the Schedulers admin interface with values for its "Job"
 * dropdown menu.
 */
$job_strings[] = 'orderexport';

 
function orderexport() {

   $orders= new SM_SalesOrder();
 
   $sql="SELECT so.id as order_id, so.`name` as customer_po, ocs.type_c as type,  ac.`name` as `name`, ";
   $sql.=" ocs.shipping_method_c as shipping_method,  ocs.shipping_carrier_c as shipping_carrier,  ";
   $sql.=" ac.shipping_address_street  as street, ac.shipping_address_city as city, ";
   $sql.=" ac.shipping_address_state as state,  ac.shipping_address_postalcode as zip_code, ";
   $sql.=" accs.country_code_c as country, ac.phone_office as phone from sm_salesorder so INNER JOIN sm_salesorder_cstm ocs on ocs.id_c=so.id INNER JOIN accounts ac on ac.id=account_id_c INNER JOIN accounts_cstm accs ON accs.id_c=ac.id WHERE ocs.status_c='approved' AND so.deleted=0";
   $r = $orders->db->query($sql);   
   $order_row="";
   
   while($order = $orders->db->fetchByAssoc($r)) {
   	   	 
   		$date=date('Ymd');
   		$street = str_replace("\r\n",'', $order['street']);
   		$country=$order['country'];
   		
   		if ( $order['type'] && $order['customer_po'] && $order['name'] && $order['city'] && $order['state'] && $country && $order['zip_code'] && $order['phone'] && $order['shipping_method'] && $order['shipping_carrier'] &&( ($order['shipping_carrier']=="UPS" && $order['shipping_method']!="PML") || ($order['shipping_carrier']=="USPS" && $order['shipping_method']=="PML" ) ) ) {
   		
   		$order['customer_po']=trim($order['customer_po']);
   		//harcoded carrier
   		if ($order['shipping_method']=="PML") {
   			$order['shipping_carrier']="USPS";
   		} else {
   			$order['shipping_carrier']="UPS";
   		}
   		
   		$order_row.="H|KRAU1|".$order['type']."||".$order['customer_po']."|".$date."|KRAUS001|USD|KRAUS001|SHP|20160104|".$order['name']."|".$order['name']."|";
   		$order_row.=$street."|||".$order['city']."|".$order['state']."|".$order['zip_code']."|".$country."|KRAU1|".$order['shipping_carrier']."|".$order['shipping_method']."||".$order['phone']."|||\r\n";
			
   		$order_row=htmlspecialchars_decode($order_row);
   		
   		$order_id=$order['order_id'];
   		   		 
   		$products_sql=" SELECT qc.product_qty_c as qty, p.id as sku, p.erpproductid as erp_id FROM sm_salesorder_sm_quotes_1_c q INNER JOIN sm_quotes_cstm qc on qc.id_c=q.sm_salesorder_sm_quotes_1sm_quotes_idb INNER JOIN sm_products p on p.id=qc.sm_products_id_c WHERE q.deleted=0 AND sm_salesorder_sm_quotes_1sm_salesorder_ida='".$order_id."' ";
   		$products=new SM_Products();
   		$res=$products->db->query($products_sql);     		 
   		$i=1;
   		while($product = $orders->db->fetchByAssoc($res)) {
   			$order_row.="D|".$product['erp_id']."|".$product['sku']."|EA|".$product['qty']."|0.00|".$i."|\r\n"; 
   			$i++;
   		}   		   	 
   		   		 
   		$order_obj = new SM_SalesOrder();
   		$order_obj->retrieve($order_id);   
   		$order_obj->status_c='exported_not_in_erp';
   		$order_obj->save();
   		}
   }
   if (!empty($order_row)) {
   $filename="edi_export/850_".date('mdY')."_".date('His').".txt";    
   $file = fopen($filename, 'w+') or die('Could not open file.');
   fwrite($file, $order_row) or die('Could not write to file.');
   fclose($file);
   $filename="edi_export/backup/850_".date('mdY')."_".date('His').".txt";
   $file = fopen($filename, 'w+') or die('Could not open file.');
   fwrite($file, $order_row) or die('Could not write to file.');
   fclose($file);
   }
   
  return true;
}

 



$job_strings[] = 'exportconfirm';


/**
 * @return boolean
 */
function exportconfirm() {
	$username = $GLOBALS['db']->connectOptions['db_user_name'];
	$password = $GLOBALS['db']->connectOptions['db_password'];
	$hostname = $GLOBALS['db']->connectOptions['db_host_name'];
	$database=	'vendor_portal';
	
	$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
	$selected = mysql_select_db($database,$dbhandle) or die("Could not select database ".$dbhandle);
	
	$cc = new SM_SalesOrder();
	$r = $cc->db->query("SELECT so.id, so.name,cs.cases_sm_salesorder_1cases_ida as `case_id` from sm_salesorder so INNER JOIN sm_salesorder_cstm ocs on ocs.id_c=so.id INNER JOIN cases_sm_salesorder_1_c cs ON cs.cases_sm_salesorder_1sm_salesorder_idb=  so.id WHERE ocs.status_c='exported_not_in_erp' AND so.deleted=0" );
	while($a = $cc->db->fetchByAssoc($r)) {
		
		$res = mysql_query("SELECT order_no FROM order_tracking_info  WHERE customer_po='".$a['name']."' AND ( order_no LIKE 'SOPR%'  OR order_no LIKE 'SW%'  ) AND DATEDIFF(NOW(), order_date) <= 7 " ,$dbhandle);
		if(mysql_num_rows($res)>0) {

			$order_obj = new SM_SalesOrder();
			$order_obj->retrieve($a['id']);
			$order_obj->status_c='exported_in_erp';			 
			$order_obj->save();
			
			while($row=mysql_fetch_assoc($res)) {
				$po_number=$row['order_no'];				
			}
			 
			$c = new aCase();	
			$c->retrieve($a['case_id']);
			$c->ponumber_c=$po_number;
			$c->status='WaitingTracking';
			$c->save();						 
		}		 
		mysql_free_result($res);
	}
	mysql_close($dbhandle);
	return true;
}

?>