<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'faisalnkpadi@gmail.com';          // SMTP username
$mail->Password = 'yourOutlook@1'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('faisalnkpadi@gmail.com.', 'CodexWorld');
$mail->addReplyTo('faisalnkpadi@gmail.com.', 'CodexWorld');
$mail->addAddress('faisalnkpadi@gmail.com');   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML
$file_to_attach = 'sample-file.pdf';

$mail->AddAttachment( $file_to_attach , 'sample-file.pdf' );

$bodyContent = '<p>faisal message</p>';

$mail->Subject = 'Subject';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
