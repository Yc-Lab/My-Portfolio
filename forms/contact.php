0<?php
 

  // // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'contact@example.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subj`ect = $_POST['subject'];

  // // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  // /*
  // $contact->smtp = array(
  //   'host' => 'example.com',
  //   'username' => 'example',
  //   'password' => 'pass',
  //   'port' => '587'
  // );
  // */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();
<?php
  $to = "cyubahiroyves16@gmail.com";
$subject = "Support requested by ".$_POST['name'];
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$headers = 'From: '.$_POST['email'].'' . "
" .
   'Reply-To: '.$_POST['email'].'' . "
" .
   'X-Mailer: PHP/' . phpversion();
 
$body = $message;

mail($to, $subject, $body, $headers );
header( 'Location: index.html' ) ; //replace with landing page. 
  
?>
