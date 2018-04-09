<?php
require_once('phpscripts/config.php');
//ini_set('display_erors', 1);
//error_reporting(E_ALL);
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal Edit All</title>
<link href="https://fonts.googleapis.com/css?family=Bungee+Inline%7CParisienne" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
</head>
<body class="bgStyle">
  	<div class="container" id="editAllStyle">
  <div>
    <a href="admin_index.php" id="backAdminButton">Back</a>
    <h2 class="headStyle">Edit All</h2>
  </div>
<?php

//Tried to get multiple movie info from database but wasn't able to get something to work
//Some of my attempts below at getting multiple edits showing:
  //echo single_edit("tbl_movies", "movies_id", ALL);
  //echo single_edit("tbl_movies", "movies_id", "");
  //echo foreach("table_movies", "movies_id");
  //echo getAll("tbl_movies");

 ?>

<!--Currently using the multiple single edits to show the edit movies info and what styling would look like, Also to add a line break between each for easy reading-->
<!--Currently editing only is working for the first movie listed (movie with id of 1)
//but the ability to edit the first movie info is working though-->
<?php echo single_edit("tbl_movies", "movies_id", 1); //phpinfo(); //everything about php pops up ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 2); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 3); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 4); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 5); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 6); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 7); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 8); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 9); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 10); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 11); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 12); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 13); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 14); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 15); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 16); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 17); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 18); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 19); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 20); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 21); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 22); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 23); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 24); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 25); ?><hr>
<?php echo single_edit("tbl_movies", "movies_id", 26); ?><hr>

</div>
</body>
</html>
