<!doctype html>
<html>

<head>
</head>
<?php
		$servername = "localhost";
		$username = "root";
		$password = "SomethingUncreative";
//		$username = "admin";
//		$password = "d*AX&)3tS4p6+^}<";

		$conn = new mysqli($servername, $username, $password);
		if ($conn-> connect_error) {
			die("Could not connect to the database, the servers might be down, I dunno.\n");
		}
?>
<body>
</body>
</html>