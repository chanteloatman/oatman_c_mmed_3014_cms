<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to your admin panel</title>
<link href="https://fonts.googleapis.com/css?family=Bungee+Inline%7CParisienne" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
</head>
<body class="bgStyle">
	<div class="container" id="indexAdminContainer">
	
	<?php echo "<h2 class=\"headStyle\">Hi {$_SESSION['user_name']}, Welcome to Admin Settings</h2>";  ?>
  <h3 class="promoStyle">What would you like to edit today?</h3>
<div id="adminPageButtons">
	<a href="admin_addmovie.php" class="adminButtons">Add Movie</a>
	<a href="admin_deletemovie.php" class="adminButtons">Delete Movie</a>
	<a href="admin_editall.php" class="adminButtons">Edit All</a>
	<a href="phpscripts/caller.php?caller_id=logout" class="adminButtons">Log Out</a>
</div>
</div>
</body>
</html>
