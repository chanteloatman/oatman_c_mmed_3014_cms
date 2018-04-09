<?php
//ini_set('display_erors', 1);
//error_reporting(E_ALL);

	require_once('phpscripts/config.php'); //linking to the config file

$tbl="tbl_genres"; //table genres in database
$genQuery = getAll($tbl); //whats getting returned back is an object (it's returning back runall)

	if(isset($_POST['submit'])){
    $movTitle = ($_POST['title']); //in the green is the input name targeting
		$movCover = ($_FILES['cover']); //since this has a type of file, you would change POST to FILES
		$movYear = ($_POST['year']); //the name in the red, example here $movYear is madeup name for this
		$movRunTime = ($_POST['runtime']);
		$movStory = ($_POST['story']);
		$movTrailer = ($_FILES['trailer']);
	  $movRelease = ($_POST['release']);
		$movGenre = ($_POST['genList']);
		$uploadNewMov = addNewMovie($movTitle, $movCover, $movYear, $movRunTime, $movStory, $movTrailer, $movRelease, $movGenre);
		$message = $uploadNewMov;
		//echo $movCover['name']; //since using type of file need to echo separaetly as shown here //name is the type targeting here (this would be what the user has for the file name of the movie cover)
    //echo $movCover['type']; //type is the type targeting here (this would be what the user has for the file type of the movie cover (.jpg, .png, etc.))
		//echo $movCover['size'];  //size is the size targeting here (this would be the file size of the movie cover image)
		//echo $movCover['tmp_name']; //when html gathers file and moves to server, it brings to temporary directory, so this helps with that

		}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal Add</title>
<link href="https://fonts.googleapis.com/css?family=Bungee+Inline%7CParisienne" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
</head>
<body id="addMovieBG">
<div id="addMovieContainer">
<?php if(!empty($message)){ echo $message;} ?>
  <div id="addMovieHead">
		<a href="admin_index.php" id="backAdminButton">Back</a>
	  <h2 id="addMovieTitle" class="headStyle">Add a Movie</h2>
  </div>
	<!--Add a Movie Form-->  <!--admin_addmovie.php ../changemade_add.php-->
	<form action="admin_addmovie.php" method="post" enctype='multipart/form-data' class="addMovieForm"> <!--multipart/form-data Allows to select files like a pdf for example, whenever work with files need to set this-->
		<!--<input type="text" name="username" value="Add Movie">-->
    <!--Movie Title-->
		<label class="addMovieLabel">Movie Title</label>
		<input class="addMovieInput" type="text" value="" name="title"><br><br>
    <!--Movie Cover-->
		<label class="addMovieLabel">Movie Cover Image</label>
		<input class="addMovieFile" type="file" value="" name="cover"><br><br>
    <!--Movie Year-->
		<label class="addMovieLabel">Movie Year</label>
		<input class="addMovieInput" type="text" value="" name="year"><br><br>
		<!--Movie Runtime-->
		<label class="addMovieLabel">Movie Runtime</label>
		<input class="addMovieInput" type="text" value="" name="runtime"><br><br>
		<!--Movie Storyline-->
		<label class="addMovieLabel">Movie Storyline</label>
		<input class="addMovieInput" type="text" value="" name="story"><br><br>
		<!--Movie Trailer-->
		<label class="addMovieLabel">Movie Trailer</label>
		<input class="addMovieFile" type="file" value="" name="trailer"><br><br> <!--Would set type to file, just cuz don't have videos currently we set it to text-->
		<!--Movie Release-->
		<label class="addMovieLabel">Movie Release</label>
		<input class="addMovieInput" type="text" value="" name="release"><br><br>
    <!--Movie Genres-->
		<label class="addMovieLabel">Movie Genre</label>
		<select name="genList">
	  <option value="">Please Select a Genre</option>
		<?php
		//loop
   while($row = mysqli_fetch_array($genQuery)){
	 echo "<option value=\"{$row['genres_id']}\">{$row['genres_type']}</option>";
   }
	  ?>
	 </select>
	  <br><br>
	  <!--Submit-->
		<input id="addMovieSubmit" type="submit" name="submit" value="Add Movie"><br></br>
	</form>
</div>
</body>
</html>
