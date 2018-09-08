<?php
	include 'connection.php';
	$eventname = $_POST['event-name'];
	$eventdate = $_POST['event-date'];
	$eventtime = $_POST['event-time'];
	$eventhours = $_POST['event-hours'];
	if(empty($eventname) or empty($eventdate) or empty($eventtime)){
		echo "One or more fields were left empty!";
	}
	else{
	$sql = "INSERT INTO `events` (`id`, `Event`, `Date`, `Time`, `limits`) VALUES ('', '$eventname', '$eventdate', '$eventtime', $eventhours)";
		mysqli_select_db($conn,"keyclubdatabase");

		if(!$conn->query($sql)){
			echo 'Whatever you tried to do did not work. Dont bother trying again - if it didnt work the first time it probably will not work again \n';
			echo $conn -> error;
		}
		else{
			echo $eventname, '  ' ,$eventdate , '   ', $eventtime ,' inserted!';
		}
	}
	mysqli_close($conn);


?>
<br>
<a style = "color:#3E3E3E"href = "admin.php">
        Go back
</a>