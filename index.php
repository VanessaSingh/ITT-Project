<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Beats | Your Music, Anytime, Anywhere</title>

    <!-- Bootstrap Core CSS -->

    <!-- Custom CSS -->
	
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/musicplayer.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

</head>

<body style="background-color: #333333">
<?php
    require_once("includes/header.php");
    require_once("includes/hamburger.php");
?>
    <div id="body-div">
            <div id="myCarousel" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="fill" style="background-image:url('images/baarbaardekho.jpg')"></div>
                        <div class="carousel-caption">
                            <h2>Latest Songs</h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="fill" style="background-image:url('images/pink.jpg')"></div>
                        <div class="carousel-caption">
                            <h2>Upcoming Artists</h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="fill" style="background-image:url('images/dearzindagi.jpg')"></div>
                        <div class="carousel-caption">
                            <h2>Retro Music</h2>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
            <div class="row">
                <div class="col-md-12" style="color:#EEEEEE">
                    <h3>
                        Trending
                    </h3>
                </div>
            </div>
            <div class= "row">
    			<div class="col-md-4">
                    <a href="playlist.php?mood=cheerful">
                        <img class="img-responsive img-portfolio img-hover" src="images/jagjitsingh.jpg" style="width:300px;height:200px;">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="playlist.php?mood=dreamy">
                        <img class="img-responsive img-portfolio img-hover" src="images/switchfoot.jpeg" style="width:300px;height:200px;">
                    </a>
    			</div>
    			<div class="col-md-4">
                    <a href="playlist.php?mood=patriotic">
                        <img class="img-responsive img-portfolio img-hover" src="images/cokestudio.png" style="width:300px;height:200px;"">
                    </a>
    			</div>
            </div>
        </div>
    </div>	

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
