<?php

require_once('class.phpmailer.php');
require_once('html2text.php');

class Mail {

	function send($mail) {
		$PHPMailer = new PHPMailer();
		$PHPMailer->From = $mail['from_email'];
		$PHPMailer->FromName = $mail['from_name'];
		$PHPMailer->Subject  = $mail['subject'];
		$PHPMailer->ClearAllRecipients();

		if (isset($mail['to_name']) && !stristr($mail['to_name'],'@')) {
			$PHPMailer->AddAddress($mail['to_email'],$mail['to_name']);
		} else {
			$PHPMailer->AddAddress($mail['to_email']);
		}

		$PHPMailer->Body     = $mail['body'];
		$PHPMailer->AltBody  = $this->html2text($mail['body']);
		$PHPMailer->IsHTML(true);

		/*
		if (isset ($mail['attachment'])) {
		  	while(list($k,$v) = each($mail['attachment'])) {
				$PHPMailer->AddAttachment($v['file'],$v['nickname']);
	     	}
		}
		*/

		$status = $PHPMailer->Send();
		$PHPMailer->ClearAddresses();
		$PHPMailer->ClearAttachments();
		return $status;
	}

	function html2text($body){
		$asciiText = new Html2Text($body,80); // 80 columns maximum
		return $asciiText->convert();
	}
}
