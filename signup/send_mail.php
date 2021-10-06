<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 0;  
$mail->SMTPAuth   = TRUE;

$mail->Host       = "smtp.gmail.com";
$mail->Username   = "rdev43269@gmail.com";
$mail->Password   = "pandas5*5*";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port       = 587;

$mail->IsHTML(true);
?>
