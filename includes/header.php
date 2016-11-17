<?php 
	session_start();
	echo '
		<header id="headerbar">
			<div class="logo"></div>
			';
			if($_SESSION["username"]==1)
			{
				echo '<h5><a class="header-text" href="logout.php">Logout</a></h5>';
			}
			else
			{
				echo '<h5><a class="header-text" href="login.php">Login</a></h5>';
			}
		echo '</header>
			</div>
		';