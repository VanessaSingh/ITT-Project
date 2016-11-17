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
    session_start();
    $uid = $_SESSION["uid"];
    require_once("includes/dbcon.php");
    require_once("includes/header.php");
    require_once("includes/hamburger.php");
?>
    <div id="body-div" class="container">
        <div id="above-footer">
         <?php 
            echo '<h1 class="page-header" style="color:#eeeeee">Your playlist<small>Your mood</small></h1>';
            //$query1 = "SELECT sid FROM listensto WHERE uid={$uid}";
            //$query1 = "SELECT * from songs inner join listensto WHERE uid={$uid}";
            $query1 = "SELECT DISTINCT name,album,artist,duration,url from songs inner join listensto on listensto.sid = songs.sid WHERE uid={$uid}";

            $result1 = mysqli_query($connection, $query1);
            $songs = array();
            if($result1)
            {
                echo '<table id="songsTable">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Album</th>
                                <th>Artist</th>
                                <th>Duration</th>
                            </tr>';
                $i=0;
                while($row = mysqli_fetch_assoc($result1))
                {
                    echo '<tr class="songsTr" onclick=playThisSong("'.$row["url"].'",'.$i.','.count($row["name"]).');window.open("insertdb.php?songid='.$row["sid"].'")>
                            <td> '.($i+1).' </td>
                            <td><a onclick=playThisSong("'.$row["url"].'",'.$i.','.count($row["name"]).')>'.$row["name"].'</a></td>
                            <td><a href="playlist.php?album='.$row["album"].'">'.$row["album"].'</td>
                            <td><a href="playlist.php?artist='.$row["artist"].'">'.$row["artist"].'</a></td>
                            <td>'.$row["duration"].'</td>';
                    echo '</tr>';
                    echo '<p id="songArray'.$i.'" style="display:none">'.$row["url"]; 
                    $i++;
                }
            }
            else
            {
                echo "<a href='login.php'>Please login.</a>";
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
                <button id="previousButton" onclick="playPrevious()"></button>
                <button id="playButton" onclick="togglePlay()"></button>
                <button id="nextButton" onclick="playNext()"></button>
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
