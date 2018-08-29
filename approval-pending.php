<?php
	include 'connection.php';
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$year = $_POST['year'];
	$sql = "INSERT INTO `pending-members` (`id`, `fname`, `lname`, `email`, `year`) VALUES ('', '$fname', '$lname', '$email', '$year');";
	mysqli_select_db($conn,"keyclubdatabase");

	if(!$conn->query($sql)){
		echo 'Something went wrong! Please try again later' . mysqli_error($conn);

	}
	else{
		echo "Your request has been sent! We will email you when it is approved.";
	}
	mysqli_close($conn);

?>
<br>
<a style = "color:#3E3E3E"href = "index.html">
        Go back
</a>