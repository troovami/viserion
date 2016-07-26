<?php
 
require 'PHPMailerAutoload.php';
 
$mail = new PHPMailer;
$mail->isSMTP();
//$mail->SMTPDebug = 2;
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->Host = "mail.tecnotropolisla.com";
$mail->Port = 25;
$mail->SMTPAuth = true;
$mail->Username = "nbarazarte@tecnotropolisla.com";
$mail->Password = "studioabcD2016";
$mail->setFrom('nbarazarte@tecnotropolisla.com', $_POST['nombre']);
$mail->addAddress($_POST['correo']);
$mail->Subject = 'Prueba PHPMailer SMTP';
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
$mail->msgHTML($_POST['mensaje']);
$mail->AltBody = 'Una descripcion del mensaje';
//$mail->addAttachment('images/imagen_adjunta.png');

if (!$mail->send()) {
    echo "Error: " . $mail->ErrorInfo;
} else {
    echo "Correo enviado!";
} ?>
