<?php

$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];


$mail_to = 'site@imejunior.com.br';
$subject = 'Contato pelo website: '.$field_name;


$body_message = 'De: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Mensagem: '.$field_message;


$headers = 'From: '.'site@imejunior.com.br'."\r\n";
$headers .= 'Reply-To: '.'site@imejunior.com.br'."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { 
    header( 'Location: http://www.imejunior.com.br/contato.html?sent=true' );
}

else {
    header( 'Location: http://www.imejunior.com.br/contato.html?sent=false' );
}

?>
