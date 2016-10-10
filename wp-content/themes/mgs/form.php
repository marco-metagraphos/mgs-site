<?php
$email = trim($_POST['email']);
$empresa = trim($_POST['empresa']);
$nombre = trim($_POST['nombre']);
$info = trim($_POST['info']);


$to = "hola@metagraphos.com";
$subject = "Nuevo contacto";
$txt = "Hola, mi nombre es ".$nombre ." me interesa conocer más sobre ".$info ." para ".$empresa .". \n"."Favor de contactarme al correo " .$email;
$headers = "From: metagraphos.com" . "\r\n" .
"CC: metagraphos.com";

$ok = ereg("^([a-zA-Z0-9_\.-]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$", $email);

if ($ok) {
	// mail($emailmanager,'Nuevo suscriptor','','From: '.$email);
	echo $ok;

	mail($to,$subject,$txt,$headers);	

	} 

else {
	echo 0;
}