<?php
// Varios destinatarios
$para  = 'gonzalo.morales@openwork-nature.com'; // atención a la coma

// título
$título = $_POST['subject'];

// mensaje
$mensaje = '<b>Mensaje de :</b>'.$_POST['name'].'<br/>'.$_POST['message'];

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
//$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Mensaje desde sitio web OWN <'.$_POST['email'].'>' . "\r\n";
//$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Enviarlo
$success = mail($para, $título, $mensaje, $cabeceras);
if (!$success) {
    $errorMessage ='Ocurrio un error. Por favor intentelo nuevamente.Gracias y disculpe las molestias.';//error_get_last()['message'];
	$color= 'danger';
}else{
	$errorMessage = 'Muchas Gracias por contactarse con OWN. A la brevedad nos pondremos en contacto con usted. Saludos';
	$color= base64_encode("success");
}
header('Location: contact.php?m='.base64_encode($errorMessage).'&c='.$color);

?>