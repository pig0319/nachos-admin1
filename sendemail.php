<?php

	
	$email = 'mariaviduya19@gmail.com';
	

	function clean_text($string){
		$string = trim($string);
		$string = stripslashes($string);
		$string = htmlspecialchars($string);
		return $string;
	}

	if(isset($_POST['submit'])){
		require('PHPMailer/src/PHPMailer.php');
		$mail = new PHPMailer;
		$mail->IsSMTP();
		$mail->Host = 'smtpout.secureserver.net';
		$mail->Port = '80';
		$mail->SMTPAuth = true;
		$mail->Username = 'xxxxxxxxxx';
		$mail->Password = 'xxxxxxxxxx';
		$mail->From = $email;
		$mail->FromName = 'Francesca Viduya';
		$mail->AddAddress('mariaviduya19@gmail.com','Name');
		$mail->WordWrap = 50;
		$mail->IsHTML(true);
		$mail->Subject = 'Naughty Nachos';
		$mail->Body = 'asfadfas';

	}

?>