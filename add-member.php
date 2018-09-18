<?php

	include 'connection.php';
	$fname = $_POST['first-name'];
	$lname = $_POST['last-name'];
	$email = $_POST['email'];
	$year = $_POST['year'];
	$randomNumber = mt_rand(1000000,9999999);

	mysqli_select_db($conn,"keyclubdatabase");

	$sql = "INSERT INTO `members` (`id`,`code`, `fname`, `lname`, `gmail`,`year`) VALUES (NULL, '$randomNumber','$fname', '$lname', '$email','$year');";


	if(!$conn->query($sql)){
		echo 'Whatever you tried to do did not work. Dont bother trying again - if it didnt work the first time it probably will not work again <br />' . mysqli_error($conn);

	}
	else{
		echo '<br />Member ', $fname, ' ', $lname, ' has been added! ', '<br />Email: ', $email , "<br />Year: $year";
		$formcontent= "
<html>
<head>
</head>
<body>
<div style='font-size:15px;'>
Hi, $fname $lname
<br />
<br />

An officer has added you to the key club members database. 
<br />
<br />

Your membership id is: <span style = 'color:blue'>$randomNumber</span>.  Please remember this or save this email, because you will be needing it to sign up for events.
<br />
<br />

Thank you, and congratulations on becoming a member of key club!
<br />
<br />
Best regards,
<br />
Millennium High School Key Club.
</div>
</body>
</html>
";
							$mailheader = "MIME-Version: 1.0" . "\r\n";
							$mailheader .= "Content-type:text/html;charset=UTF-8" . "\r\n";
							$recipient = "$email";
							$subject = "Key Club Membership";


							mail($recipient, $subject, $formcontent, $mailheader) or die("Error! Try again later.");
	}

	mysqli_close($conn);

?>
<br>
<a style = "color:#3E3E3E"href = "admin.php">
        Go back
</a>~