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
                            <td><a onclick=play()>'.$row["name"].'</a></td>
                            <td>'.$row["album"].'</td>
                            <td>'.$row["artist"].'</td>
                            <td>'.$row["duration"].'</td>';
                    echo '</tr>';
                    echo '<audio id="audio" src="'.$row["url"].'"></audio>';                    
                    $i++;
                }
            }
            else
            {
                echo "Problem with query";
            }

        ?>
    <script type="text/javascript">
        function play()
        {
            var audio = document.getElementById("audio");
            audio.play();
        }
    </script>
</body>

</html>
