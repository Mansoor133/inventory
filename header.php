<?php
	session_start();
	if (!isset($_SESSION["login"])) {
		header("location:login.php?login=true");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Inventory System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width= device - width, initial - scale = 1">
	<link rel="stylesheet" type="text/css" href="Boot/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div class="container-fluid">
	<!-- Fist row -->
	<div class="row" id="first_row" >
		<div class="col-md-3">
			<img id="img-res" src="Image/logo5.png" class="img-responsive">
		</div>
		<div class="col-md-5"></div>
		<div class="col-md-4">
			<h3 class="header_title">Inventory Information System</h3>
			</div>
	</div><br/>