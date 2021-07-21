<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

//Enable SMTP debugging.
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "parthukg1@gmail.com";                 
$mail->Password = "ecyfkszdlutxsxos";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to
$mail->Port = 587;                                   

$mail->From = "test@gmail.com";
$mail->FromName = "Partha";

$mail->addAddress($email, $name);

$mail->isHTML(true);

$mail->Subject = "Thank you from Parthu";
$mail->Body = "<i>Thank you for taking your time and writing in! I Will try to get in touch with you soon.</i>";
$mail->AltBody = "Thank you for taking your time and writing in! I Will try to get in touch with you soon.";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>  
