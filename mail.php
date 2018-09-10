<?php 

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['msg'];
	$formcontent="From: $name \n Message: $message";
	$recipient = "millenniumkeyclub2k19@gmail.com";
	$subject = $_POST['subject'];
	$mailheader = "From: $email \r\n";

	error_reporting(-1);
	ini_set('display_errors', 'On');
	set_error_handler("var_dump");

	mail($recipient, $subject, $formcontent, $mailheader) or die("Error! Message not sent. Try again later.");


	echo "Your message has been sent!";

?>