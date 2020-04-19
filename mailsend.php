<?php 

	header('Content-Type: text/html; charset=utf-8');
	
	include 'mailtemplate.php';
	
	$isim = $_POST['name'];
	$email = $_POST['email'];
	
	$mailContent = "";
	
	

	$fromMail = "email@email.com";
	$fromPassword = "password";
	$fromName = "From Name";
	$toMail = $email;
	$toName = $isim;
	$subject = "Subject";
	
	$logo = "base64";
	
	$mailContentTemplate = mailTemplate(
		$subject,
		$logo,
		"Company Name",
		"Main Column Title",
		$mailContent
	);
	
	/*
	foreach($_POST AS $alan => $deger) {
		$mail_content .= "$alan : $deger <br />";
	}
	*/
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer-master/src/Exception.php';
	require 'PHPMailer-master/src/PHPMailer.php';
	require 'PHPMailer-master/src/SMTP.php';

	$smtpUsername = $fromMail;
	$smtpPassword = $fromPassword;
	$emailFrom = $fromMail;
	$emailFromName = $fromName;
	$emailTo = $toMail;
	$emailToName = $toName;

	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->CharSet = 'UTF-8';
	$mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
	$mail->Host = "smtp.yandex.com.tr"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
	$mail->Port = 465; // TLS only
	$mail->SMTPSecure = 'ssl'; // ssl is depracated
	$mail->SMTPAuth = true;
	$mail->Username = $smtpUsername;
	$mail->Password = $smtpPassword;
	$mail->setFrom($emailFrom, $emailFromName);
	$mail->addAddress($emailTo, $emailToName);
	$mail->Subject = $subject;
	$mail->msgHTML($mailContentTemplate); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
	$mail->AltBody = 'HTML messaging not supported';
	$mail->SMTPDebug = false;
	// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

	if(!$mail->send()){
		echo "Mailer Error: " . $mail->ErrorInfo;
	}else{
		echo "ok";
	}
?>