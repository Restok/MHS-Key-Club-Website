<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$eventNumber = $_POST['enumber'];
		$firstName = $_POST['fname'];
		$lastName = $_POST['lname'];
		$selectedShift = '0';
		include 'connection.php';
		$userExists = false;
		$errorMessage = "";
		mysqli_select_db($conn, 'key-club-database');

		$sqlQuery = "SELECT COUNT(id) FROM `members` WHERE fname = '$firstName' AND lname = '$lastName';";

		if($result = $conn->query($sqlQuery)){

			$count = $result -> fetch_assoc();
			$count= $count['COUNT(id)'];
			$userExists = ($count > 0 ? true : false);

		}


		if($userExists){
			$sqlQuery = "SELECT * FROM `events` WHERE id = $eventNumber;";



			if($result = $conn -> query($sqlQuery)){
				$row = $result->fetch_assoc();
				$eventName = $row['Event'];
				$eventHours = $row['hours'];
			}
			else{
				echo "You dungoofed";
				echo $conn->error;
			}

			$eventName = preg_replace('/\s*/', '', $eventName);
			// convert the string to all lowercase
			$eventName = strtolower($eventName);

			mysqli_select_db($conn, 'events');

			$sqlQuery = "SELECT * FROM `$eventName`";

			if($conn->query($sqlQuery)){
				$sqlQuery = "INSERT INTO `$eventName` (`id`, `fname`, `lname`, `shift`, `hours`) VALUES (NULL, '$firstName', '$lastName', '$selectedShift', '$eventHours');";

				if($conn->query($sqlQuery)){
					echo "success";
				}

				else{
					echo "failed";
					echo $conn -> error;

				}

			}
			else {
				$sqlQuery = "CREATE TABLE `events`.`$eventName` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `fname` VARCHAR(255) NOT NULL , `lname` VARCHAR(255) NOT NULL, `shift` INT(255) NOT NULL DEFAULT '0' , `hours` INT(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

				if($conn->query($sqlQuery)){

					$sqlQuery = "INSERT INTO `$eventName` (`id`, `fname`, `lname`, `shift`, `hours`) VALUES (NULL, '$firstName', '$lastName', '$selectedShift', '$eventHours');";

					if($conn->query($sqlQuery)){
						echo "success";
					}
					else{
						echo "failed";
						echo $conn -> error;
					}
				}
				else{
					echo "Failed to create table";
				}

			}
		}

		else {
			$errorMessage = "Could not find an entry with the corresponding name and ID in database.";

		}
	}
	$conn->close();
?>