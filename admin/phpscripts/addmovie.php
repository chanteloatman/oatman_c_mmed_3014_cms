<?php
  function addNewMovie($movTitle, $movCover, $movYear, $movRunTime, $movStory, $movTrailer, $movRelease, $movGenre){
  include("connect.php");
    //echo "From addNewMovie";

  //checking for jpgs and putting then into images folder
  if($_FILES['cover']['type'] == "images/jpeg" ||
  $_FILES['cover']['type'] == "images/jpg"){
$target = "../images/{$movCover['name']}"; //this is the path // the $movCover portion is grabbing the name of movCover
if(move_uploaded_file($_FILES['cover']['tmp_name'], $target)){ //target is path its going to (that we declared above)
//echo "file moved";
//upload image, and make it populate:
$orig = "../images/{$movCover['name']}"; //original movie cover
$th_copy = "../images/TH_{$movCover['name']}"; //TH_ movie cover //the TH_ infront of the $movCover is adding TH_ to name of file
if(!copy($orig, $th_copy)){ //original image and where the copy is going
  echo "Failed to copy";
     }
     //people can upload landscape, portrait, or square
    // $size = getimagesize($orig);
     //echo $size[0]; //checking first in index

     //write the information to the database
     $addString = "INSERT INTO tbl_movies VALUES(NULL, '{$movCover['name']}', '{$movTitle}', '{$movYear}', '{$movRunTime}', '{$movStory}, '{$movTrailer}, '{$movRelease}'"; //the ones fon't fill in leave as NULL //the order of what you write in brackets is order of columns that appear in your database
     //echo $addString;
     $addresult = mysqli_query($link, $addString);
     if($addresult){
      $qstring = "SELECT * FROM tbl_movies ORDER BY movies_id DESC LIMIT 1"; //DESC LIMIT here means go grab the last movie
      $lastmovie = mysqli_query($link, $qstring);
      $row = mysqli_fetch_array($lastmovie);
      $lastID = $row['movies_id'];
      //echo $lastID;
      $genString = "INSERT INTO tbl_mov_genre VALUES(NULL, {$lastID}, {$movGenre})";
      $genresult = mysql_query($link, $genString);
      redirect_to("../changemade_add.php");
     }
    }
   }
   mysqli_close($link);
  }
?>
