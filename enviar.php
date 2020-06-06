<?php 

$nombres = $_POST['name']; 
$celular = $_POST['tele'];
$email = $_POST['email'];
$mensaje = $_POST['message']; 
$mensaje2 = $_POST['message'];
$ip= $_SERVER['REMOTE_ADDR']; 



$header = 'From: ' . $email . " \r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Este mensaje fue enviado por " . $nombres . " \r\n"; 
$mensaje .= "Nombres: " . $nombres . "\r\n";
$mensaje .= "Celular : " . $celular . " \r\n";
$mensaje .= "E-mail : " . $email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['message'] . " \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 


$para = 'ventas@seiperu.com'; 
$asunto = 'Contacto desde la web'; 


if(mail($para, $asunto, utf8_decode($mensaje), $header)){

echo"<script type=\"text/javascript\">alert('Gracias por contactarnos. Lo antes posible nos pondremos en contacto con usted.'); window.location='./';</script>";
}else{
echo"<script type=\"text/javascript\">alert('Hubo un error en el envío, inténtelo más tarde'); window.location='./';</script>";  

}
?> 