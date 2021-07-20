<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


//define the receiver of the email
$to = 'parthukg1@gmail.com';
//define the subject of the email
$subject = 'Test email';
//define the message to be sent. 
$message = "Hello World!\r\nThis is my mail.";
//define the headers we want passed. 
$header = "From: me@localhost.com"; // must be a genuine address
//send the email
$mail_sent = mail($to, $subject, $message, $header);
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 

echo $mail_sent ? "Mail sent" : "Mail failed";

/*
//$to_mail = "architects@palavin.com,t.lavin@palavin.com,12yorkcourt@gmail.com";
$to_mail = "Amirtha@mailinator.com";
//$cc="paul@enhance.ie";
$mail_sent = 0;
if(isset($_POST['submit'])){
    //echo "the form was submitted";

$name = trim(strip_tags($_POST['name']));
if($name == "")
    $error = true;

$email = trim(strip_tags($_POST['email']));
if($email == "")
    $error = true;

if($error != true){
    $headers = 'From: ' .$name . $email ."\r\n";
    //$headers .= 'CC: "'.$cc.'" <'.$cc.'>'."\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "";

    $subject = "New contact message";

    $message = "New Contact message, received from: <br /> \n ";
    $message .= "<b>Name</b> ".$name."<br /> \n";
    $message .= "<b>Email</b> ".$email."<br /> \n";
    echo 'test - > ' . $to_mail .$subject. $message . $headers;
    if(mail($to_mail,$subject,$message))
    {
        echo "mail sent";
        $mail_sent = 1;
    }
    else echo "mail not sent";
} else {
    echo 'validation error';
}
}*/

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
