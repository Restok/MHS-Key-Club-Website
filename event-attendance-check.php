<?php include("password_protect.php"); ?>

<!doctype html>
<html>
<head>
<link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
<script src="js/bootstrap-4.0.0.js"></script>

<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	
	.clean-button{
		border-style: none;
		border-radius: 15px;
		background:linear-gradient(to bottom right, #40ef69, #3bdb90);
		transition: background, 500ms;
		padding:10px;
	}

	.clean-button:hover{
		cursor:pointer;
		background:linear-gradient(to bottom right, #3ad85f, #3bcc88);
		transition: background, 500ms;

	}
</style>
</head>

<body>
<script>
	function toggle(source, tableName) {
		var className = "checkme"+ tableName;
		checkboxes = document.getElementsByClassName(className);

		for(var i=0, n=checkboxes.length;i<n;i++) {
			checkboxes[i].checked = source.checked;
		}
	}
	function set(source, tableName){
		var className = "hours"+ tableName;
		inputs = document.getElementsByClassName(className);
		console.log(source.value)
		for(var i=0, n=inputs.length;i<n;i++) {
			inputs[i].value = source.value;
		}

	}
</script>

	<div class = "container mt-5">

		<?php
		session_start();
		include 'connection.php';
		mysqli_select_db($conn,"events");

		$sql = "SELECT table_name FROM information_schema.tables where table_schema='events'";
		
		//GET ALL TABLE NAMES

		if($result = $conn-> query($sql)){

			//RUN AS MANY TIMES AS THE NUMBER OF TABLES.
			
			while($row = $result->fetch_assoc()){
				$id = 0;

				$currentTableName = $row["table_name"];

				$sql = "SELECT * from `$currentTableName`";
				
				// FOR EACH TABLE MAP THE RESULTS TO 
				
				if($result2 =  $conn->query($sql)){
					echo '<h1>' . $currentTableName. '</h1>	<form action = "attended.php" class = "mb-5" method = "post"><input type = "hidden" name = "curTable" value = "'.$currentTableName.'"><table class="table "><thead class = "thead-dark"><tr><th scope="col">#</th><th scope="col">First name</th><th scope="col">Last name</th><th scope="col"><input type = "number" step = 0.1 name = "hours" onkeyup = "set(this, \''.(string)$currentTableName.'\')")"></th><th scope="col"><input type = "checkbox" name = "approvalall" onclick = "toggle(this,\''.(string)$currentTableName.'\')"></th>
					</tr></thead><tbody>';
					
					while($row2 = $result2-> fetch_assoc()){
						echo "<input type = 'hidden' name ='$currentTableName$id' value = ".$row2['id']."><tr><th scope = 'row'>". $row2["id"] . "</th><th scope = 'row'>". $row2["fname"]. "</th><th scope='row'>". $row2['lname']. "</th><th scope='col'><input type = 'number' name = '" .$row2['id']. $currentTableName. "' class = 'hours$currentTableName'></th><th scope='col'><input type = 'checkbox' name = 'check".$row2["id"]."' class = 'checkme$currentTableName'></th></tr>";
						$_SESSION["$currentTableName"] = $id;

						$id+=1;
						}
				
					echo '
						</tbody>
						</table>
						<button class = "float-right clean-button" type = "submit">Approve all checked</button>

						</form>
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