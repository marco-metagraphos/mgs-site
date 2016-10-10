<?php
$email = trim($_POST['email']);

$to = "hola@metagraphos.com";
$subject = "Nuevo subscriptor";
$txt = trim($_POST['email']);
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