<?php

if (! defined ( 'sugarEntry' ) || ! sugarEntry)
	die ( 'Not A Valid Entry Point' );

class case_closed {
	
	function sendSugarPHPMail($tos,$survey_link,$case_number){
		 
		require_once('include/SugarPHPMailer.php');
		require_once('modules/Administration/Administration.php');
		require_once('modules/EmailTemplates/EmailTemplate.php');
		//email template 
		$emailTemp = new EmailTemplate();
		$emailTemp->disable_row_level_security = true;
		
		//This is where we use the ID value of the email template record
		$emailTemp->retrieve('5eb63488-b9a2-089d-6898-4faaf94aa174');
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
		}
		
		$mail->From     = $admin->settings['notify_fromaddress'];
		$mail->FromName = $admin->settings['notify_fromname'];
		$mail->ContentType = "text/html"; //"text/plain"
		$mail->SMTPSecure="tls";
		$mail->Subject = from_html($emailTemp->subject);// $subject
		$htmlBody = from_html($emailTemp->body_html); // new row
		$body = wordwrap($emailTemp->body_html, 900); //$body
		// Bug 36833 - Add replacing of special value $instance_url
		 $htmlBody = str_replace('$config_site_url', $sugar_config['site_url'], $htmlBody);
		$body = str_replace('$config_site_url', $sugar_config['site_url'], $body);
		
		$htmlBody = str_replace('$contact_user_user_name', $this->user_name, $htmlBody);
		$htmlBody = str_replace('$contact_user_pwd_last_changed', TimeDate::getInstance()->nowDb(), $htmlBody);
		$body = str_replace('$contact_user_user_name', $this->user_name, $body);
		$body = str_replace('$contact_user_pwd_last_changed', TimeDate::getInstance()->nowDb(), $body);
		$body=str_replace('$survey_link', $survey_link, $body);
		$htmlBody=str_replace('$survey_link', $survey_link, $htmlBody);
		$body=str_replace('$date', date('n/j/Y'), $body);
		$htmlBody=str_replace('$case_number', $case_number, $htmlBody);
		$body=str_replace('$case_number', $case_number, $body);
		$htmlBody=str_replace('$date', date('n/j/Y'), $htmlBody);
		$mail->body_html = $htmlBody;
		$mail->Body = $body;
		
		$mail->IsHTML(true); // new line 
		$mail->prepForOutbound();

		 
		
		if (!$mail->send()) {
			$GLOBALS['log']->info("sendSugarPHPMail - Mailer error: " . $mail->ErrorInfo);
			return false; 
		}else{
			return true;
		}
		
	}
	
	function case_closed(&$bean, $event, $arguments) {
		
		// make sure the status was actually changed to closed
		// $bean->fetched_row['status'] is the stored status of the case
		// $bean->status is the status it was changed to
		if ($bean->fetched_row ['status'] !== 'Closed' && $bean->status === 'Closed') {
			
			//$subject = "Kraus USA : Closed Case {$bean->case_number} - {$bean->name}";
			//$body = "Thank you for {$bean->assigned_user_name}<br />";
			//$body .= 'Description: ' . (empty ( $bean->description ) ? ' n/a ' : $bean->description);				
			 
			$notify_user = new Account ();
			$notify_user->retrieve ( $bean->account_id );
			$email = $notify_user->email1;
			$assigned_user_id = $bean->assigned_user_id;
			$case_number = $bean->case_number;
			$account_id = $bean->account_id;
			$to[$notify_user->name] = $email;
			
			$survey_link="http://survey.kraususa.com/index.php?sid=73792&account_id=".$account_id."&case_id=".$case_number."&assigned_user_id=".$assigned_user_id;
			//$body.="<br /> Please complete our survey at ".$survey_link;
			
			if (! empty ( $email )) { 
				if (! $this->sendSugarPHPMail($to,$survey_link,$case_number)) {
					$GLOBALS ['log']->info ( "Could not send case closed notification:  " . $mail->ErrorInfo );
				}
			}

			 
		}
	}
	
	

}

?>