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
    	 <?php 
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
            //$query = "SELECT * FROM songs WHERE genre=pop";
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
                $i=1;

                while($row = mysqli_fetch_assoc($result))
                {
                    echo '<tr>
                            <td> '.$i.' </td>
                            <td><a onclick=playThisSong("'.$row["url"].'")>'.$row["name"].'</a></td>
                            <td>'.$row["album"].'</td>
                            <td>'.$row["artist"].'</td>
                            <td>'.$row["duration"].'</td>';
                    echo '</tr>';
                    $i++;
                }
            }
            else
            {
                echo "Problem with query";
            }

        ?>
        <div id="seekbar-div">
            <audio id="audioplayer" onpause="UpdatePlayPause()" onended="EndOfAudio()" ontimeupdate="SeekBar()" ondurationchange="CreateSeekBar()" onvolumechange="ChangeVolume()">     
            </audio>
            <input type="range" id="audioSeekBar" onchange="audioSeekBar()"/>
            <input type="range" name="">
            <span id="timelapsed"></span> <br>
            <input type="range" id="volumeSeekBar" min="0" max="1" step="any" onchange="change_Volume()" />
        </div>
        <script type="text/javascript">
            var audioPlayer = document.getElementById("audioplayer");
            function CreateSeekBar()
            {
                var seekbar = document.getElementById("audioSeekBar"); 
                seekbar.min = 0; 
                seekbar.max = audioPlayer.duration; 
                seekbar.value = 0; 
                var timelapsed = document.getElementById("timelapsed"); 
                timelapsed.innerHTML = "0/" + Math.round(audio.timelapsed) + "seconds";
            }
            function UpdatePlayPause()
            {
                if(audioPlayer.paused || audioPlayer.ended)
                {
                    audioPlayer.play();
                }
                else
                {
                    audioPlayer.pause();
                }
            }
            function EndOfAudio()
            {
                document.getElementById("audioSeekBar").value = 0; 
                document.getElementById("timelapsed").innerHTML = "0/" + Math.round(audio.duration); 
            }
            function audioSeekBar()
            {
                var seekValue = document.getElementById("audioSeekBar");
                audioPlayer.currentTime = seekValue.value;
            }
            function SeekBar() 
            {
                var seekbar = document.getElementById("audioSeekBar"); 
                seekbar.value = audioPlayer.currentTime; 
                var timelapsed = document.getElementById("timelapsed"); 
                timelapsed.innerHTML = Math.round(audio_custom.currentTime) + "/" + Math.round(audio_custom.duration) + "(seconds)"; 
            }
            function change_Volume() 
            { 
                var volume = document.getElementById("volumeSeekBar"); 
                audioPlayer.volume = volume.value; 
            } 
        </script>
        <script type="text/javascript">
            function playThisSong(url)
            {
                var thisURL = url;
                var audio = document.getElementById("audioplayer");
                audio.removeAttribute("src");
                audio.setAttribute("src", thisURL);
                audio.play(); 
            }
        </script>
    </div>
</body>

</html>
