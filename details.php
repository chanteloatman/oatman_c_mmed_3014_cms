<?php
	require_once('admin/phpscripts/config.php');
	if(isset($_GET['id'])) {
		//get the movie
		$tbl = "tbl_movies";
		$col = "movies_id";
		$id = $_GET['id'];
		$getMovie = getSingle($tbl, $col, $id);
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Details</title>
<link href="https://fonts.googleapis.com/css?family=Bungee+Inline%7CParisienne" rel="stylesheet">
<link href="admin/css/main.css" rel="stylesheet">
</head>
<body id="detailsStyle">

	<?php
		if(!is_string($getMovie)) {
			$row=mysqli_fetch_array($getMovie);
			echo "<a href=\"index.php\" class=\"backDetails\">Back...</a>
			<div id=\"imagesDetails\">
			<video controls poster=\"images/{$row['movies_cover']}\" onclick=\"this.play()\"><source src=\"videos/{$row['movies_trailer']}\" alt=\"{$row['movies_title']}\" type=\"video/mp4\"></video>
    </div>
			<div id=\"aboutDetails\">
				<p class=\"DetailsTitleStyle textDetails\">{$row['movies_title']}</p>
				<p class=\"paraStyle textDetails\">{$row['movies_year']}</p>
				<p class=\"paraStyle textDetails\">{$row['movies_storyline']}</p>
		 </div>
			";
//<img src=\"images/{$row['movies_cover']}\" alt=\"{$row['movies_title']}\" class=\"coverDetails\">
//	<a href=\"watchtrailer.php\" class=\"playDetails textDetails\">Watch Trailer</a>
		}else{
			echo "<p>{$getMovie}</p>";
		}

	?>

</body>
</html>
