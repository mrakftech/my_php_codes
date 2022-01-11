<?php

	$hostname="localhost";
	$uname="admin";
	$upass="nasras786";
	$dbname="club";
	
	$conn=mysqli_connect($hostname,$uname,$upass);
		if (! $conn) {
			die("Failed to Connect to Server : " . mysqli_error($conn)); }
		echo "Server Connected Successfully<br/>";
	
	$retval = mysqli_select_db($conn, 'club');
		if (! $retval) {
			die("Failed to Connect with Database" . mysqli_error($conn)); }
		echo "Database Selected Successfully<br/>";
?>