
<!--USERNAME FOR ADMIN LOGIN: chanteloatman -->
<!--PASSWORD FOR ADMIN LOGIN: projectCMS -->

<?php
	require_once('phpscripts/config.php');
	$ip = $_SERVER['REMOTE_ADDR'];
	//echo $ip;
	if(isset($_POST['submit'])){
		//echo "Works";
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if($username !== "" && $password !== ""){
			$result = logIn($username, $password, $ip);
			$message = $result;
		}else{
			$message = "Please fill out the required fields.";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to Admin Access</title>
<link href="https://fonts.googleapis.com/css?family=Bungee+Inline%7CParisienne" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
</head>
<body id="bgLoginPage">
	<div id="bgLogin">
	<?php if(!empty($message)){ echo $message;} ?>
		<a href="../index.php" id="backAdminButton">Go Back to Movies</a>
		<h2 class="headStyle">I Dream of Movies - Admin Access</h2>
		<p class="paraStyle loginParaPromo">Login to your account below:</p>
			<form action="admin_login.php" method="post" id="loginForm">
				<label class="loginFormLabel">Username:</label>
				<input id="passInput" class="loginFormInput" type="text" name="username" value="">
			  <br>
				<label class="loginFormLabel">Password:</label>
		    <input class="loginFormInput" type="password" name="password" value="">
		    <br><br>
		    <input type="submit" name="submit" value="Log In" class="submitButton">
	    </form>
	</div>
</body>
</html>
