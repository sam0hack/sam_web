<?php
require 'Mailer/class.phpmailer.php';

function send_email($email,$body) {
    

$mail = new PHPMailer;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtpout.secureserver.net';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'elvish@galaxylifecare.info';                            // SMTP username
$mail->Password = 'elvish@qwerty';                           // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'elvish@galaxylifecare.info';
$mail->FromName = 'Verification';
$mail->AddAddress($email);  // Add a recipient
//$mail->AddAddress('ellen@example.com');               // Name is optional
//$mail->AddReplyTo('info@example.com', 'Information');
//$mail->AddCC('cc@example.com');
//$mail->AddBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->AddAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->AddAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Verification Code';
$mail->Body    = 'Enter this code in verification box  <b>'.$body.'</b>';
$mail->AltBody = "Enter this code in verification box  {$body}";

if(!$mail->Send()) {
   $msg= 'Message could not be sent.';
   $msg ='Mailer Error: ' . $mail->ErrorInfo;
   return $msg;
   exit;
}

//$msg= 'Message has been sent';
}
?>