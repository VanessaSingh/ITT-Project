<?php
	session_start();
	$_SESSION["username"] = 0;
	session_destroy();
	header("Location:login.php");
?>