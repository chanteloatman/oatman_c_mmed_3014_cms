<?php
	// Set up connection credentials
	$user = "root";
	$pass = "";
	$url = "localhost";
	$db = "db_chantelmovie";

	$link = mysqli_connect($url, $user, $pass, $db, "8080"); //Mac //using 8080 because using XAMPP
	//$link = mysqli_connect($url, $user, $pass, $db); //PC

	/* check connection */
	if(mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>
