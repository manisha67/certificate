<?php

include("config.php");
require 'PHPMailer/PHPMailerAutoload.php';
$id = $_GET['user'];
$idd = $_GET['idd'];
$type = $_GET['type'];
$qry = "select * from user where id='$id'";
$q = mysqli_query($con,$qry);
$r = mysqli_fetch_array($q);
$em = $r['email'];

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'faisalnkpadi@gmail.com';          // SMTP username
$mail->Password = 'yourOutlook@@1'; // SMTP password
$mail->SMTPSecure = 'tls';  
$mail->SMTPAutoTLS = false;                       // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('faisalnkpadi@gmail.com');
$mail->FromName = "Support Team";
$mail->addReplyTo('faisalnkpadi@gmail.com.', 'CodexWorld');
$mail->addAddress($em);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML
$file_to_attach =$_GET['id'];

$mail->AddAttachment( $file_to_attach , 'certificate.png' );

$bodyContent = '<p>This message is delivered to you as per your request of the certificate.The approproate certificate is attached with this mail.Thank you</p>';

$mail->Subject = 'Subject';
$mail->Body    = $bodyContent;
?>
<!DOCTYPE html>
<html lang="en">
<style>

</style>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

     <script src="html2canvas.js" type="text/javascript"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  

</head>

<body onunload="">



<?php
if(!$mail->send()) {
    echo '<center><div class="alert alert-danger">Message could not be sent.</div></center>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '<center><div class="alert alert-success">Message has been sent</div></center>';
	$qry = "update $type set status='success' where id='$id'";
	$q= mysqli_query($con,$qry);
}
?>


