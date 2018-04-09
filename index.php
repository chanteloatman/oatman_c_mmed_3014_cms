<?php
	require_once('admin/phpscripts/config.php');

	if(isset($_GET['filter'])){
		$tbl = "tbl_movies";
		$tbl2 = "tbl_genres";
		$tbl3 = "tbl_mov_genre";
		$col = "movies_id";
		$col2 = "genres_id";
		$col3 = "genres_type";
		$filter = $_GET['filter'];

		$getMovies = filterResults($tbl, $tbl2, $tbl3, $col, $col2, $col3, $filter);
	}else{
		$tbl = "tbl_movies";
		$getMovies = getAll($tbl);
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to the Finest Selection of Blu-rays on the internets!</title>
<link href="https://fonts.googleapis.com/css?family=Bungee+Inline%7CParisienne" rel="stylesheet">
<link href="admin/css/main.css" rel="stylesheet">
</head>
<body class="bgStyle">
<div class="container" id="homeStyle">
<?php
	include('includes/nav.html');

	if(!is_string($getMovies)){
		while($row = mysqli_fetch_array($getMovies)){
			echo "<div id=\"movieHome\"><img src=\"images/{$row['movies_cover']}\" alt=\"{$row['movies_title']}\" class=\"coverMain\">

				<h2>{$row['movies_title']}</h2>
				<p>{$row['movies_year']}</p>
				<a href=\"details.php?id={$row['movies_id']}\">More Details...</a><br><br></div>
			";
		}
	}else{
		echo "<p class=\"error\">{$getMovies}</p>";
	}

	include('includes/footer.html');
?>
</div>
</body>
</html>
