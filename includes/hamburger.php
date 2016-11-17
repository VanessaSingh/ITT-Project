
<?php
echo  "
	<div id='hamburger-menu'>
		<table id='hamburger-table'>
			<tr onclick=window.open('index.php','_self') class='hamburgerTr'>			
				<td width='350px'><a class='hamburger-text' href='index.php'>Home</a></td>
			</tr>
			<tr onclick=window.open('discover.php','_self')  class='hamburgerTr'>
				<td><a class='hamburger-text' href='discover.php'>Discover</a></td>
			</tr>
			<tr onclick=window.open('my_playlists.php','_self')  class='hamburgerTr'>
				<td><a class='hamburger-text' href='my_playlists.php'>My Playlists</a></td>
			</tr>
			<tr onclick=window.open('about_us.php','_self')  class='hamburgerTr'>
				<td><a class='hamburger-text' href='about_us.php'>About Beats</a></td>
			</tr>
		</table>
	</div>";
?>