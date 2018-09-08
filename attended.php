<?php
	session_start();
	include 'connection.php';
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

Thank you so much! Your volunteering hours have increased by $hoursWorked, and is now at a total of $curMemberHours this year.;
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
							$mailheader = "MIME-Version: 1.0" . "\r\n";
							$mailheader .= "Content-type:text/html;charset=UTF-8" . "\r\n";
							$recipient = "$email";
							$subject = "Key Club event attendance";


							mail($recipient, $subject, $formcontent, $mailheader) or die("Error! Try again later.");

						$sql = "DELETE FROM `$curTable` WHERE `id`=$tableIndex";
						
						if($conn->query($sql)){
							echo "<br />Deleted entry from the pending events table.";
							$sql = "SELECT COUNT(*) FROM `$curTable`;";
							if($conn->query($sql)){
								echo "<br / > Table is empty! Attempting to delete $curTable from the database.";
								$sql = "DROP TABLE `$curTable`";
								if($conn->query($sql)){
									echo "<br / > Table $curTable deleted successfully";
								}
								else{
									echo "Failed to delete table $curTable <br / > $conn->error";
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