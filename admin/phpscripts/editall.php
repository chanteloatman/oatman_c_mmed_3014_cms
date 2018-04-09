<?php
include('connect.php');

//not variables below just the labels gave in single_edit_form.php
$tbl = $_POST['tbl'];
$col = $_POST['col'];
$id = $_POST['id'];
unset($_POST['tbl']);
unset($_POST['col']);
unset($_POST['id']);
unset($_POST['submit']);
//echo count($_POST);
$num = count($_POST);
$count=0;
//echo count($_POST);
//writing an update query
$qstring = "UPDATE {$tbl} SET "; //make sure leave space after SET
//using a for each loop

  foreach($_POST as $key => $value){
  $count++;
  if($count !=$num){
    $qstring .= $key."='".$value."',";
  }else{
  $qstring .= $key."='".$value."' ";
  }
}
  $qstring .= "WHERE {$col}={$id}"; //.= means your adding to the variable
  //echo $qstring;
  $updatequery = mysqli_query($link, $qstring);
  if($updatequery){
    header("Loction:../../index.php");
  }else{
    echo "There was a problem with the server, please contact the web admin...";
  }

mysqli_close($link);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit All Changes</title>
<link href="https://fonts.googleapis.com/css?family=Bungee+Inline%7CParisienne" rel="stylesheet">
<link href="../css/main.css" rel="stylesheet">
</head>
<body class="bgStyle">
<div class="container" id="changeMadeStyle">

<h2 class="headStyle">Your Changes Have Been Saved</h2>
<a href="../admin_editall.php" id="backAdminButton" class="backEdit">Back to Edit All</a>

</div>
</body>
</html>
