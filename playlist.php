<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

    <title>Discover | Beats</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">

</head>


<body style="background-color: #333333">
<?php
    require_once("includes/dbcon.php");
    require_once("includes/header.php");
    require_once("includes/hamburger.php");
?>
    <div id="body-div" class="container">
    	<div id="above-footer">
    	 <?php 
    	 	$songArray = array(50);
            $name = $_GET["name"];
            $artist = $_GET["artist"];
            $album = $_GET["album"];
            $genre = $_GET["genre"];
            $mood = $_GET["mood"];
            $filter;
            if($name)
            {
                $query = "SELECT * FROM songs WHERE name='{$name}'";
                $filter = "Name";
            }
            if($artist)
            {
                $query = "SELECT * FROM songs WHERE artist='{$artist}'";
                $filter = "Artist";
            }
            if($album)
            {
                $query = "SELECT * FROM songs WHERE album='{$album}'";
                $filter = "Album";
            }
            if($genre)
            {
                $query = "SELECT * FROM songs WHERE genre='{$genre}'";
                $filter = "Genre";
            }
            if($mood)
            {
                $query = "SELECT * FROM songs WHERE mood='{$mood}'";
                $filter = "Mood";
            }
            echo '<h1 class="page-header" style="color:#eeeeee">' .$filter;
            echo '<small> Lose yourself</small></h1>';
            $query = "SELECT * FROM songs";
            $result = mysqli_query($connection, $query);
            if($result)
            {
                echo '<table>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Album</th>
                                <th>Artist</th>
                                <th>Duration</th>
                            </tr>';
                $i=0;
                while($row = mysqli_fetch_assoc($result))
                {
                    echo '<tr>
                            <td> '.($i+1).' </td>
                            <td><a onclick=playThisSong("'.$row["url"].'",'.$i.','.$length.')>'.$row["name"].'</a></td>
                            <td>'.$row["album"].'</td>
                            <td><a href="playlist.php?artist='.$row["artist"].'">'.$row["artist"].'</a></td>
                            <td>'.$row["duration"].'</td>';
                    echo '</tr>';
                    echo '<p id="songArray'.$i.'" style="display:none">'.$row["url"]; 
                    $i++;
                }
            }
            else
            {
                echo "Problem with query";
            }

        ?>
        </div>
        <div id="footer">
            <div id="seekbar-div">
                <audio id="audioplayer" onpause="UpdatePlayPause()" onended="EndOfAudio()" ontimeupdate="SeekBar()" ondurationchange="CreateSeekBar()" onvolumechange="ChangeVolume()">     
                </audio>
                <input type="range" id="audioSeekBar" onchange="audioSeekBar()" value="0"/>
                <span id="timelapsed"></span> <br>
            </div>
            <div id ="footer-buttons">
                <button id="previousButton" onclick="togglePlay()"></button>
                <button id="playButton" onclick="playNext()"></button>
                <button id="nextButton" onclick="playPrevious()"></button>
                <button id="shuffleButton" onclick="shuffle_songQueue()"></button>
                <button id="repeatButton" onclick="toggleRepeat()"></button>
                <input type="range" id="volumeSeekBar" min="0" max="1" step="any" onchange="change_Volume()" />
            </div>
        </div>
        <script type="text/javascript" src="js/common.js">
        </script>
    </div>
</body>

</html>
