<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  // commented as part of optimization by parthu
  /*
  $receiving_email_address = 'parthukg1@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];
*/
  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */
// commented as part of optimization by parthu
  /*
  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
  */
  

	/*if(isset($_POST['submit'])){
		$to = "parthukg1@gmail.com"; // this is your Email address
		$from = $_POST['email']; // this is the sender's Email address
		$name = $_POST['name'];
		$subject = $_POST['subject'];;
		
		$message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
		

		$headers = "From:" . $from;
		
		mail($to,$subject,$message,$headers);
		//mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
		echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }*/

	$to      = 'parthukg1@gmail.com'; //your email
	$subject = $_POST['subject']; 
	$message = $_POST['message'];
	$headers = 'From: '.$_POST['email']. "\r\n" .
		'Reply-To: myemail@mail.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
?>
