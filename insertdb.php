<?php
	require_once("includes/dbcon.php");
	session_start();
	$uid = $_SESSION["uid"];	
	$sid = $_GET["songid"];
	$query = "INSERT INTO listensto (uid,sid) VALUES ({$uid},{$sid})";
	$result = mysqli_query($connection,$query);
	if($result)
	{
		//echo "Successful";
	}
	else
	{
		echo "insertdb query failed";
	}
	echo '<script type="text/javascript">
		window.onload=function()
		{
			window.close();
		}
	</script>';
?>

