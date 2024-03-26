<?php
$to= "borel4596@gmail.com";
$subject = "utilisation desmails depuis php avec windows";
$message =" salut comment tu vas?";

$headers ="content-type: text/plain; charset=utf-8\r\n";
$headers .="From: sendmailtest95@gmail.com\r\n";
 if (mail($to, $subject, $message, $headers)) 
    echo'mail envoye';
else 
    echo 'erreur denvoie';

?>