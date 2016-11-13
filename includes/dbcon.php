<?php
	$dbuser="beatsAdmin";
	$dbpass="bTm1996-fsbnLOCK";
	$dbhost="localhost";
	$dbname="beatsdb";
	$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if(mysqli_connect_errno())
	{
		die("Connection to DB failed!");
	}
	
?>