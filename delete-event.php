<?php
	$eventnumber="";
	include 'connection.php';
	$eventnumber = $_POST['event-number'];

		$sql = "DELETE FROM `events` WHERE `events`.`id` = '$eventnumber'";
		mysqli_select_db($conn,"key-club-database");

		if(!$conn->query($sql)){
			echo 'Whatever you tried to do did not work. Dont bother trying again - if it didnt work the first time it probably will not work again \n' . mysqli_error($conn);

		}
		else{


				echo 'Event number ', $eventnumber, ' has been deleted!';

	}
?>
<br>
<a style = "color:#3E3E3E"href = "admin.php">
        Go back
</a>