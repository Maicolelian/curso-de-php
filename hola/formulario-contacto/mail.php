<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

function sendMail($subject, $body, $email, $name, $html = false) {

    // configuracion inicial de nuestro servidor de correos
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
    $phpmailer->Port = 465;
    $phpmailer->Username = 'elianmuepaz29@gmail.com';
    $phpmailer->Password = 'xovopbnszvxlguaw';

    // añadimos destinatarios
    $phpmailer->setFrom('contact@miempresa.com', 'Mi empresa');
    $phpmailer->addAddress($email, $name); 

    // definiendo el contenido
    $phpmailer->isHTML($html);                                  
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    // mandar el correo
    $phpmailer->send();

}


?>