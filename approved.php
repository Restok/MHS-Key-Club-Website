<?php
	include 'connection.php';
	foreach ($_POST as $name => $value) {
		mysqli_select_db($conn,"keyclubdatabase");
		
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
						$randomNumber = mt_rand(1000000,9999999);
						$sql = "INSERT INTO `members` (`id`,`code`, `fname`, `lname`, `gmail`,`year`) VALUES ('', '$randomNumber','$fname', '$lname', '$email','$year');";
						
						if($conn-> query($sql)){
							echo "<br />\n".$fname . " " . $lname . " " . $email . " " . $year . " successfully inserted to database!";
							$sql = "DELETE FROM `pending-members` WHERE id = $id;";
							$formcontent= "
<html>
<head>
</head>
<body>
<div style='font-size:15px;'>
Hi, $fname $lname
<br />
<br />

An officer has approved your entry into key club. 
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
							$subject = "Key Club membership approval";


							mail($recipient, $subject, $formcontent, $mailheader) or die("Error! Try again later.");
							
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

							echo "<br />Failed to insert " . $fname . " " . $lname . " " . $email . " " . $year . " to database.";
							
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