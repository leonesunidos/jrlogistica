<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'webryfcomunicaciones@gmail.com';                     // SMTP username
    $mail->Password   = 'RyFcomunicaciones123';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('webryfcomunicaciones@gmail.com', 'JRLOGISTICA');
    $mail->addAddress('uni.leo.123456789@gmail.com');     // Add a recipient
  


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'correo para jr logistica';
    $mail->Body    = 'estoy agradecido T';
  

    $mail->send();
    echo 'el mensaje se envio correctamente';
} catch (Exception $e) {
    echo "error al enviar el mensaje: {$mail->ErrorInfo}";
}