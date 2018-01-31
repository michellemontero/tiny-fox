<?php
$name       = @trim(stripslashes($_POST['nombre']));
$from       = @trim(stripslashes($_POST['email']));
$message    = @trim(stripslashes($_POST['mensaje']));
$to   		= 'michellemontero36@gmail.com';//This will be replaced with your email

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$name} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "X-Mailer: PHP/".phpversion();

mail($to, $message, $headers);

die;
