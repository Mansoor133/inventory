<?php
	session_start();
	if(isset($_POST["username"])){
	$username = $_POST["username"];	
	$password = $_POST["password"];	
		if($username== "admin" && $password="123"){
			$_SESSION["login"] = $username;
			header("location:home.php");
	}else{
		header("location:login.php?error=loginfaild");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="widtd= device - width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="login_content">
	<div id="loginBox">
		<img class="loginIcon" src="Image/person2.png">
			<h2 class="title">Login To System</h2>
			<form method="post">
				<p>Username: </p>
				<input type="text" name="username" placeholder="Enter Usename">	
				<p>Password: </p>
				<input type="password" name="password" placeholder="Enter Password">
				<?php if(isset($_GET["error"])){ ?>
					<div style="color: red; font-size: 16px;">
						Incorrect Username or Password!
					</div>
				<?php } ?>

				<?php if(isset($_GET["login"])){ ?>
					<div style="color: red; font-size: 16px; padding: 5px;">
						Please login first!
					</div>
				<?php } ?>
				<input type="submit" name="sumbit" value="Login">
			</form>	
</div>
</body>
</html>