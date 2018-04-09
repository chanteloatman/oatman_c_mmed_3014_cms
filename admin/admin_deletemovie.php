<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	//confirm_logged_in();
	$tbl = "tbl_movies";
	$movies = getAll($tbl);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal Delete</title>
<link href="https://fonts.googleapis.com/css?family=Bungee+Inline%7CParisienne" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
</head>
<body class="bgStyle">
	<div class="container" id="deleteMoviePageStyle">
			<a href="admin_index.php" id="backAdminButton">Back</a>
	<h1 class="headStyle">Delete a Movie</h1>
	<?php
		while($row = mysqli_fetch_array($movies)) {
			//show movies title, and give ability to delete a movie if the admin wishes
			echo "{$row['movies_title']}<div id=\"deleteMovButton\"><a href=\"phpscripts/caller.php?caller_id=delete&id={$row['movies_id']}\" class=\"deleteMovieButton\">Delete Movie</a></div><br>";
		}
	?>
</div>
</html>
