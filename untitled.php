<?php
error_reporting(E_ALL);
$to      = 'parthukg1@gmail.com'; //your email
$subject = 'from my website  - email form'; 
$message = $_POST['message'];
$headers = 'From: '.$_POST['email']. "\r\n".
'Reply-To: myemail@mail.com' . "\r\n".
'X-Mailer: PHP/'.phpversion(); 

mail($to, $subject, $message, $headers); 
?>  
