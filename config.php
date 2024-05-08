<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include 'PHPMailer/src/Exception.php';
include 'PHPMailer/src/PHPMailer.php';
include 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->isSMTP();
// $mail->SMTPDebug = 2;
$mail->Host = 'ssl://c1682186.ferozo.com'; // SMTP server
$mail->Port = 465; // SMTP port
$mail->SMTPAuth = true;
$mail->Username = 'test@quesoscampobasso.com'; // donweb configurated email
$mail->Password = '5n6/I0F3uL'; // donweb configurated password email
$mail->isHTML(true);

?>
