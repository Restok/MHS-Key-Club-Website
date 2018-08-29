<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$eventNumber = $_POST['enumber'];
		$firstName = $_POST['fname'];
		$lastName = $_POST['lname'];
		$code = $_POST['code'];
		include 'connection.php';
		$userExists = false;
		$success = false;
		$errorMessage = "";
		mysqli_select_db($conn, 'key-club-database');

		$sqlQuery = "SELECT COUNT(id) FROM `members` WHERE fname = '$firstName' AND lname = '$lastName' AND code = '$code';";

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
				$success = false;

			}

			$eventName = preg_replace('/\s*/', '', $eventName);
			// convert the string to all lowercase
			$eventName = strtolower($eventName);

			mysqli_select_db($conn, 'events');

			$sqlQuery = "SELECT * FROM `$eventName`";

			if($conn->query($sqlQuery)){
				$sqlQuery = "INSERT INTO `$eventName` (`id`, `fname`, `lname`, `shift`, `hours`) VALUES (NULL, '$firstName', '$lastName', '$selectedShift', '$eventHours');";

				if($conn->query($sqlQuery)){

						$errorMessage = "Sign up successful!";

						echo $errorMessage;

					
				}

				else{
					$errorMessage = "Something went wrong on our end! Please try again later.";

						echo $errorMessage;

					echo $conn -> error;

				}

			}
			else {
				$sqlQuery = "CREATE TABLE `events`.`$eventName` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `fname` VARCHAR(255) NOT NULL , `lname` VARCHAR(255) NOT NULL, `shift` INT(255) NOT NULL DEFAULT '0' , `hours` INT(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

				if($conn->query($sqlQuery)){

					$sqlQuery = "INSERT INTO `$eventName` (`id`, `fname`, `lname`, `shift`, `hours`) VALUES (NULL, '$firstName', '$lastName', '$selectedShift', '$eventHours');";

					if($conn->query($sqlQuery)){
						$errorMessage = "Sign up successful!";

						echo $errorMessage;

						echo $conn -> error;

					}

				
					else{
					$errorMessage = "Something went wrong on our end! Please try again later.";
					echo $errorMessage;
					echo $conn -> error;

					}

				}
				else{
						$errorMessage = "We could not find an event corresponding to the event number!";
					echo $errorMessage;

				}

			}
		}

		else {
			$errorMessage = "We could not find you in our database. Make sure you have requested entry and that everything is spelt right.";
			echo $errorMessage;
		}
		$conn->close();
		echo("You will be redirected back shortly");
			header('Refresh: 3; URL=events.php');
	}

?>