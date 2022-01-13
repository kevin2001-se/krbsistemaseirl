<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    return die();
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


$nombre =  trim($_POST["nombre"]);
$celular =  trim($_POST["celular"]);
$correo =  trim($_POST["correo"]);
$mensaje =  trim($_POST["mensaje"]);

$mail = new PHPMailer(true);

try {
    
    $mail->SMTPDebug = 0;  
    $mail->CharSet = 'UTF-8';                    
    $mail->isSMTP();                                            
    $mail->Host       = 'mail.krbsistemas.com;';                     
   $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'contactokrb@krbsistemas.com';
    $mail->Password   = 'InvertSnoopsStumpsHeaved78';                             
    $mail->SMTPSecure = 'tls';            
    $mail->Port       = 587;   
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);                               

    $mail->setFrom('contactokrb@krbsistemas.com', 'KRBSistemas');
    $mail->addAddress("cblash14@gmail.com");
    $mail->addAddress('contactokrb@krbsistemas.com');


    $mail->isHTML(true);                                  
    $mail->Subject = 'Contacto de '.$nombre;
    $mail->Body    = '
        celular : '.$celular.'<br>
        mensaje : '.$mensaje.'
    ';

    $mail->send();
    echo 'enviado';

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}