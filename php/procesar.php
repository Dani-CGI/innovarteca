<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer.php';
require 'Exception.php';
require 'SMTP.php';


$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

header('Content-type: application/json');

if($nombre=='' || $email=='' || $mensaje=='') {
    return print(json_encode('no'));
}else{
 
// Email para el cliente.
$asunto1 = "Muchas gracias por contactarte con InnovARTEca";
$carta1 .= "<table width='100%' border='0' cellpadding='12' cellspacing='0' style='font-family:Arial, Helvetica, sans-serif; border: 1px #555 solid; border-radius: 5px;'><tr><td style='color: white;border-radius: 10px 10px 0 0;background:#282B28;'><img src='https://daniponce.com.ar/innovarteca/images/logo-blanco.png' style='float:left;max-height:60px;'><p style='color:white !important;text-decoration:none;font-size:25px; line-height:10px;float:right;'>Contacto</p>";
$carta1 .= "</td></tr><tr><td style='font-size:13px;color:#282B28'><strong><p>Hemos recibido su mensaje. Pronto nos pondremos en contacto con usted. </strong><br>";
$carta1 .= "A continuación le enviamos una copia del mensaje recibido.</p> <hr><br>";
$carta1 .= "De: $nombre <br>";
$carta1 .= "Correo electrónico: $email <br>";
$carta1 .= "Mi mensaje es: $mensaje  <br><br><hr><br>";
$carta1 .= "<strong> Muchas gracias por contactarte. </strong> <br></td></tr></table>";

// Email para el receptor.
$asunto2 = "Mensaje de contacto a través de la página web InnovARTEca";
$carta2 .= "<table width='100%' border='0' cellpadding='12' cellspacing='0' style='font-family:Arial, Helvetica, sans-serif; border: 1px #555 solid; border-radius: 5px;'><tr><td style='color: white;border-radius: 10px 10px 0 0;background:#282B28;'><img src='https://daniponce.com.ar/innovarteca/images/logo-blanco.png' style='float:left;max-height:60px;'><p style='color:white !important;text-decoration:none;font-size:25px; line-height:10px;float:right;'>Contacto</p>";
$carta2 .= "</td></tr><tr><td style='font-size:13px;color:#282B28'><strong><p>Hemos recibido un mensaje de contacto a través de la página web de: $nombre </strong><br> <hr><br>";
$carta2 .= "Estos son los datos que hemos recibido: <br><br>";
$carta2 .= "De: $nombre <br> ";
$carta2 .= "Correo electrónico: $email <br>";
$carta2 .= "Mensaje: $mensaje <br><br><hr><br><br>";
$carta2 .= "<strong> Muchas gracias por contactarte</strong> <br></td></tr></table>";

$mail = new PHPMailer(true);  

    //Server
    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = 0; 
    $mail->isSMTP(); 
    $mail->Host = "mail.daniponce.com.ar"; 
    $mail->SMTPAuth = true;
    $mail->Username = "innovarteca@daniponce.com.ar";
    $mail->Password = "Dani0512";
    $mail->SMTPSecure = 'ssl'; 
    $mail->Port = 465;

    //Recibe
    $mail->setFrom('innovarteca@daniponce.com.ar', 'InnovARTEca ©');
    $mail->addAddress($email);

    //Contenido
    $mail->isHTML(true);
    $mail->Subject = $asunto1;
    $mail->Body = $carta1;

    $mail->send();

    $mail_user = new PHPMailer(true);  

    //Server
     $mail_user->CharSet = 'UTF-8';
     $mail_user->SMTPDebug = 0; 
     $mail_user->isSMTP(); 
     $mail_user->Host = "mail.daniponce.com.ar"; 
     $mail_user->SMTPAuth = true;
     $mail_user->Username = "innovarteca@daniponce.com.ar";
     $mail_user->Password = "Dani0512";
     $mail_user->SMTPSecure = 'ssl'; 
     $mail_user->Port = 465;

    //Recibe
     $mail_user->setFrom('innovarteca@daniponce.com.ar', 'InnovARTEca ©');
     $mail_user->addAddress('innovarteca@daniponce.com.ar');

    //Contenido
     $mail_user->isHTML(true);
     $mail_user->Subject = 'Contacto desde el sitio de: '.$nombre.' ';
     $mail_user->Body = $carta2;

     $mail_user->send();
    
return print(json_encode('ok'));
}
?>