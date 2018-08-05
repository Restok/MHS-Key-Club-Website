<?php
	include 'connection.php';
	$eventname = $_POST['event-name'];
	$eventdate = $_POST['event-date'];
	$eventtime = $_POST['event-time'];

	$sql = "INSERT INTO `events` (`id`, `Event`, `Date`, `Time`) VALUES ('', '$eventname', '$eventtime', '$eventdate')";
	mysqli_select_db($conn,"key-club-database");

	if(!$conn->query($sql)){
		echo 'Whatever you tried to do did not work. Dont bother trying again - if it didnt work the first time it probably will not work again';
	}
	else{
		echo $eventname, '  ' ,$eventdate , '   ', $eventtime ,' inserted!';
	}
?>
