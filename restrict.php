<?php
	session_start();	
	if (!isset($_SESSION["keep"])) {
		header("location:test.php?notlogin=true");
	}		
?>