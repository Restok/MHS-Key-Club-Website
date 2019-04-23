<!doctype html>
<html>
<head>
<link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
<script src="js/bootstrap-4.0.0.js"></script>

<meta charset="utf-8">
<title>Untitled Document</title>

</head>

<body>


	<div class = "container mt-5">

		<?php
		include 'connection.php';
		mysqli_select_db($conn,"pastevents");
		$sql = "SELECT table_name FROM information_schema.tables where table_schema='pastevents'";
		
		//GET ALL TABLE NAMES
		if($result = $conn-> query($sql)){
			//RUN AS MANY TIMES AS THE NUMBER OF TABLES.
			
			while($row = $result->fetch_assoc()){
				$id = 0;
				$currentTableName = $row["table_name"];
				$sql = "SELECT * from `$currentTableName`";
				
				// FOR EACH TABLE MAP THE RESULTS TO 
				
				if($result2 =  $conn->query($sql)){
					echo '<h1>' . $currentTableName. '</h1>	<table class="table "><thead class = "thead-dark"><tr><th scope="col">#</th><th scope="col">First name</th><th scope="col">Last name</th><th scope="col">Hours Worked</th></th>
					</tr></thead><tbody>';
					
					while($row2 = $result2-> fetch_assoc()){
						echo "<tr><th scope = 'row'>". $row2["id"] . "</th><th scope = 'row'>". 
						$row2["fname"]. "</th><th scope='row'>". $row2['lname']. "</th><th scope='col'>. 
						$row2['hours-worked'].</th></tr>";

						}
				
					echo '
						</tbody>
						</table>
						';
				}
				else{
					echo "UGHHHH";
					echo $conn->error;
				}
			}
		}
		
		else{
			echo "oof something broke";
			echo $conn -> error;
		}
		mysqli_close($conn);
	?>
	  
	</div>
</body>
</html>
