<?php 

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['msg'];
	$formcontent="From: $name \n Message: $message";
	$recipient = "LiuH2122@aguafria.org";
	$subject = $_POST['subject'];
	$mailheader = "From: $email \r\n";


	mail($recipient, $subject, $formcontent, $mailheader) or die("Error! Message not sent. Try again later.");



	echo "Your message has been sent!";

?>