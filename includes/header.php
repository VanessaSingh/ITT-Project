<?php 
	session_start();
	echo '
		<header id="headerbar">
			<div class="logo">
				<img onclick=window.open("index.php","_self") src="images/beats.png" style="height:120px;width:280px;margin-top:-10px;margin-left:-20px;position:absolute;cursor:pointer">
			</div>
			<div id="search-wrap" class="searchbar">
				<form action="playlist.php" autocomplete="off">
					<input type="text" id="vanessaSearch" name="name" type="text" placeholder="Search for song, album, artist">
					<input id="search-submit" value="search-submit" type="submit">
				</form>
			</div>
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