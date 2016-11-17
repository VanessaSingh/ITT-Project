
<?php
echo  "
	<div id='hamburger-menu'>
		<table id='hamburger-table'>
			<tr  onclick='location.href:index.php' class='hamburgerTr'>			
				<td width='350px'><a class='hamburger-text' href='index.php'>Home</a></td>
			</tr>
			<a href='discover.php'><tr class='hamburgerTr'>
				<td><a class='hamburger-text' href='discover.php'>Discover</a></td>
			</tr></a>
			<a href='playlists.php'><tr class='hamburgerTr'>
				<td><a class='hamburger-text' href='playlists.php'>My Playlists</a></td>
			</tr></a>
			<a href='about_us.php'><tr class='hamburgerTr'>
				<td><a class='hamburger-text' href='about_us.php'>About Beats</a></td>
			</tr></a>
		</table>
	</div>";
?>