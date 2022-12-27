<?php

// get email from the config file
$config = require_once __DIR__ . '/indexmail.php';
$recipient_email = $config['mail']['to_email'];

$contact_name = $inputs['name'];
$contact_email = $inputs['email'];
$message = $inputs['message'];

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=utf-8';
$headers[] = "To: $recipient_email";
$headers[] = "From: $contact_email";
$header = implode('\r\n', $headers);

mail($recipient_email,  $message, $header);
?>