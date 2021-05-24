// Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  
<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];
  $contact->smtp = array(
    'host' => '127.0.0.1:8000',
    'username' => 'sanjupatil4245@gmail.com.com',
    'password' => 'Sanju@6494',
    'port' => '587'
  );
  

	$toEmail = "sanjupatil4245@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "contact-view.php";
?>