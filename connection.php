<!doctype html>
<html>
<head>
</head>
<?php
		$servername = "127.0.0.1";
		$username = "admin";
		$password = "d*AX&)3tS4p6+^}<";

		$conn = new mysqli($servername, $username, $password);
		if ($conn-> connect_error) {
			die("Could not connect to the database, the servers might be down, I dunno.\n");
		}
?>
<body>
</body>
</html>