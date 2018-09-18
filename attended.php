<?php
	include 'connection.php';
	session_start();
	$curTable = $_POST["curTable"];
	$maxId = $_SESSION["$curTable"];

	for($i = 0; $i<=$maxId;$i++){

		$tableIndex = $_POST["$curTable$i"];

		if(isset($_POST["check$tableIndex"])){
			mysqli_select_db($conn, "events");
		
			$sql = "SELECT * FROM `$curTable` WHERE id = $tableIndex";
			
			if($result = $conn->query($sql)){
			
				$row = $result ->fetch_assoc();
				$fname = $row["fname"];
				$lname = $row["lname"];
				mysqli_select_db($conn, "keyclubdatabase");

				$sql = "SELECT * FROM `members` WHERE `fname` = '$fname' AND `lname` = '$lname'";
				if($result = $conn->query($sql)){
					$row = $result->fetch_assoc();
					$curMemberHours= $row["hours"];
					$email = $row["gmail"];
					$hoursWorked = $_POST["$tableIndex$curTable"];
					$curMemberHours +=$hoursWorked;
					$sql = "UPDATE `members` SET `hours` = '$curMemberHours' WHERE `fname` = '$fname' AND `lname` = '$lname';";

					if($result = $conn->query($sql)){
						mysqli_select_db($conn, "events");
						echo "<br /> $fname $lname's hours added by $hoursWorked!";
						

						
						
						$formcontent= "
<html>
<head>
</head>
<body>
<div style='font-size:15px;'>
Hi, $fname $lname
<br />
<br />

An officer has confirmed your attendance to the following event: $curTable. 
<br />
<br />

Thank you so much! Your volunteering hours have increased by $hoursWorked, and is now at a total of $curMemberHours this year.
<br />
<br />
If you believe something is inaccurate, or if a mistake was made, please reply directly to this email.
<br />
<br />
Best regards,
<br />
Millennium High School Key Club.
</div>
</body>
</html>
";
								$headers = array(
								  'From: "keyclub messenger" <keyclub.messenger@gmail.com>' ,
								  'Reply-To: "mhs keyclub" <millenniumkeyclub2k19@gmail.com>' ,
								  'X-Mailer: PHP/' . phpversion() ,
								  'MIME-Version: 1.0' ,
								  'Content-type: text/html; charset=iso-8859-1' ,
								);
							$recipient = "$email";
							$code = rand(0, 9999999);

							$subject = "Key Club event attendance no. ".$code;
							$headers = implode( "\r\n" , $headers );



						mail($recipient, $subject, $formcontent, $headers) or die("Error! Try again later.");
						$sql = "DELETE FROM `$curTable` WHERE `id`=$tableIndex";
						
						if($conn->query($sql)){
							echo "<br />Deleted entry from the pending events table.";
							$sqlQuery = "INSERT INTO `$curTable` (`id`, `fname`, `lname`, `hours-worked`) VALUES (NULL, '$fname', '$lname', '$hoursWorked');";
							mysqli_select_db($conn, "pastevents");

							if($conn->query($sqlQuery)){

									$errorMessage = "<br />Added to attendance history.";

									echo $errorMessage;

							}
							else {
								$sqlQuery = "CREATE TABLE `pastevents`.`$curTable` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `fname` VARCHAR(255) NOT NULL , `lname` VARCHAR(255) NOT NULL , `hours-worked` INT(255), PRIMARY KEY (`id`)) ENGINE = InnoDB;";

								if($conn->query($sqlQuery)){

									$sqlQuery = "INSERT INTO `$curTable` (`id`, `fname`, `lname`, `hours-worked`) VALUES (NULL, '$fname', '$lname', '$hoursWorked');";

									if($conn->query($sqlQuery)){
										$errorMessage = "<br />Added to attendance history.";

										echo $errorMessage;

									}


									else{
										$errorMessage = "wtf the table was made but it couldn't insert anything to table";
										echo $errorMessage;
										echo $conn -> error;

									}

								}
								else{
									echo "Rip couldn't make new table.";
								}
							}
							mysqli_select_db($conn, "events");

							$sql = "SELECT COUNT(*) FROM `$curTable`;";
							
							if($result = $conn->query($sql)){
								$count = $result -> fetch_assoc();
								$countentries = $count["COUNT(*)"];
								if($countentries ==0){
									echo "<br / > Table is empty! Attempting to delete $curTable from the database.";
									$sql = "DROP TABLE `$curTable`";
									if($conn->query($sql)){
										echo "<br / > Table $curTable deleted successfully";
									}
									else{
										echo "<br / >Failed to delete table $curTable <br / > $conn->error";
									}
								}

							}
							else{
								echo "<br / > Failed to get length of table <br />$conn->error";
							}
						}
						else{
							echo "<br /> Failed to delete their entry from the events approval table. That's REALLY not good";
						}
					}
					else{
						echo "<br / > Failed to add hours";
					}

				}
				else{
					echo $conn -> error;
				}

			}
			else{
				echo $conn->error;
			}
		}

	}
	mysqli_close($conn);
	
	echo "<a style = 'color:#3E3E3E'href = 'event-attendance-check.php'>
        Go back
</a>";

?>