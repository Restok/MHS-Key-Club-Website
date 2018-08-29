<?php include("C:\\xampp\\htdocs\\Unnamed Site 2\\password_protect.php"); ?>

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
		function toggle(source) {
		  checkboxes = document.getElementsByClassName("checkme");
		  for(var i=0, n=checkboxes.length;i<n;i++) {
			checkboxes[i].checked = source.checked;
		  }
		}
	</script>
	<div class = "container mt-5">
	<form action = 'approved.php' method = "post">
	<table class="table ">
	  <thead class = "thead-dark">
		<tr>
		  <th scope="col">#</th>
		  <th scope="col">First name</th>
		  <th scope="col">Last name</th>
		  <th scope="col">Email</th>
		  <th scope="col">Year</th>
		  <th scope="col"><input type = "checkbox" name = "approvalall" onclick = "toggle(this)"></th>

		</tr>
	  </thead>
	<tbody>
		<?php
		include 'connection.php';
		mysqli_select_db($conn,"key-club-database");

		$sql = "SELECT id, fname, lname, email, year FROM `pending-members`";

		if($result = $conn-> query($sql)){
			if($result-> num_rows > 0){
				while ($row = $result-> fetch_assoc()){
					echo "<tr><th scope = 'row'>". $row["id"]. "</th><th scope = 'row'>". $row["fname"]. "</th><th scope='row'>". $row['lname']. "</th><th scope='row'>". $row['email']. "</th><th scope='row'>". $row['year']. "</th><th scope='col'><input type = 'checkbox' class ='checkme' name = '" .$row['id']. "'></th></tr>";
				}
			}
		}
		else{
			echo "oof something broke";
			echo $conn -> error;
		}
		mysqli_close($conn);
	?>
	  
	  </tbody>
	</table>
	<button class = "float-right clean-button" type = "submit">Approve all checked</button>
	</form>
	</div>
</body>
</html>