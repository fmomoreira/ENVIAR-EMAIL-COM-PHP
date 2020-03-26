<?php
/**
 * This example shows making an SMTP connection with authentication.
 */

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'vendor/autoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Abota o host do seu servidor aqui filho
$mail->Host = 'smtp.weblink.com.br';
//Abota a porta aqui embaixo, a porta do seu servidor em ....pela mor
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Seu email aki em baixo so
$mail->Username = 'contato@seuemail.com';
//Password to use for SMTP authentication
$mail->Password = 'suasenhavaiaquiOreia';
//Set who the message is to be sent from
$mail->setFrom('emaildeondevaisairoemail@seuemail.com', 'Vc e o Cara BIXO!');

//Set who the message is to be sent to
$mail->addAddress('praquemvaienviaraqui@gmail.com', 'Felipe Moreira');
//Set the subject line
$mail->Subject = 'Email enviado vc e um Astro!';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}


//Nois e da roça mas semo recepitivo!! Obrigado e deixe seu like  e vem toma um café aqui em casa... Abraços

// e nao esqueça esse e um email de exemplo usando configurações smtp do seu servidor em zé!