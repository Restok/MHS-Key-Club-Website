<?php
	include 'connection.php';
	foreach ($_POST as $name => $value) {
		mysqli_select_db($conn,"key-club-database");
		
		if($name!="approveall"){
			$id = (int)$name;

			$sql = "SELECT fname, lname, email, year FROM `pending-members` WHERE id = $id";
				if($result = $conn-> query($sql)){
					if($result-> num_rows > 0){
						$row = $result-> fetch_assoc();
						$fname = $row["fname"];
						$lname = $row["lname"];
						$email = $row["email"];
						$year = $row["year"];
						$sql = "INSERT INTO `members` (`id`, `fname`, `lname`, `gmail`,`year`,`hours`) VALUES ('', '$fname', '$lname', '$email','$year', '');";
						if($conn-> query($sql)){
							echo $fname . " " . $lname . " " . $email . " " . $year . " successfully inserted to database!";
							$sql = "DELETE FROM `pending-members` WHERE id = $id;";
							if($conn-> query($sql)){
								echo "<br />\n" . " Deleted corresponding entry from the pending list.";
							}
							else{
								echo $conn->error;
								echo "<br />\n"."Failed to remove the member from the pending list, which is VERY bad.";
							}
						}
						else{
							echo $conn -> error;
							echo "<br />\n";
							echo "Failed to insert " . $fname . " " . $lname . " " . $email . " " . $year . " to database.";
							
						}
					}
					else{
						echo $conn->error . "<br />\n" . "The data selected didn't return any results.";
					}

				}
				else{
					echo "oof something broke" . "<br />\n" ;
					echo $conn -> error;
				}

		}
	}	
?>