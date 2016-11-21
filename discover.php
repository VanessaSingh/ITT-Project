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
        require_once("includes/header.php");
        require_once("includes/hamburger.php");
    ?> 
    <div id="body-div" class="container">

        <!-- Discover Heading -->
        <div>
            <h1 class="page-header" style="color:#eeeeee">Discover
                <small>Your mood. Your joy.</small>
            </h1>
        </div>

        <!-- Moods -->

        <!-- Discover_Row1 -->
        <div class="row">
            <div class="col-md-3 portfolio-item">                
                <div class="hovereffect">
                    <img onclick="window.open('playlist.php?mood=party','_self')" class="img-responsive" src="images/party.jpg" alt="">                    
                    <a class="info" href="playlist.php?mood=party"></a>
                </div>
                    <p class="text-under-moods">Party</p>
                
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="hovereffect">
                    <img onclick="window.open('playlist.php?mood=patriotic','_self')" class="img-responsive" src="images/patriotic.jpg" alt="">
                    <a class="info" href="playlist.php?mood=patriotic"></a>
                </div>
                    <p class="text-under-moods">Patriotic</p>
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="hovereffect">
                    <img onclick="window.open('playlist.php?mood=romantic','_self')" class="img-responsive" src="images/romantic.jpg" alt="">
                    <a class="info" href="playlist.php?mood=romantic"></a>
                </div>
                    <p class="text-under-moods">Romantic</p>
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="hovereffect">
                    <img onclick="window.open('playlist.php?mood=edm','_self')" class="img-responsive" src="images/edm.png" alt="">
                    <a class="info" href="playlist.php?mood=edm"></a>
                </div>
                    <p class="text-under-moods">EDM</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 portfolio-item">
                <div class="hovereffect">
                    <img onclick="window.open('playlist.php?mood=folk','_self')" class="img-responsive" src="images/folk.jpg" alt="">
                    <a class="info" href="playlist.php?mood=folk"></a>
                </div>
                    <p class="text-under-moods">Folk</p>
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="hovereffect">
                    <img onclick="window.open('playlist.php?mood=meditation','_self')" class="img-responsive" src="images/meditation.jpg" alt="">
                    <a class="info" href="playlist.php?mood=meditation"></a>
                </div>
                    <p class="text-under-moods">Meditation</p>
            </div>
            <div class="col-md-3 portfolio-item">
                <div onclick="window.open('playlist.php?mood=salsa','_self')" class="hovereffect">
                    <img class="img-responsive" src="images/salsa.jpg" alt="">
                    <a class="info" href="playlist.php?mood=salsa"></a>
                </div>
                    <p class="text-under-moods">Salsa</p>
            </div>
            <div class="col-md-3 portfolio-item">
                <div onclick="window.open('playlist.php?mood=sufi','_self')" class="hovereffect">
                    <img class="img-responsive" src="images/sufi.jpg" alt="">
                    <a class="info" href="playlist.php?mood=sufi"></a>
                </div>
                    <p class="text-under-moods">Sufi</p>
            </div>
        </div>

        <div class="row">
        <div class="col-md-3 portfolio-item">
                <div class="hovereffect">
                    <img onclick="window.open('playlist.php?mood=travel','_self')" class="img-responsive" src="images/travel.jpg" alt="">
                    <a class="info" href="playlist.php?mood=travel"></a>
                </div>
                    <p class="text-under-moods">Travel</p>
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="hovereffect">
                    <img onclick="window.open('playlist.php?mood=cheerful','_self')" class="img-responsive" src="images/cheerful.jpg" alt="">
                    <p class="text-under-moods">Cheerful</p>
                </div>
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="hovereffect">
                    <img onclick="window.open('playlist.php?mood=dance','_self')" class="img-responsive" src="images/dance.jpg" alt="">
                    <a class="info" href="playlist.php?mood=dance"></a>
                </div>
                    <p class="text-under-moods">Dance</p>
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="hovereffect">
                    <img onclick="window.open('playlist.php?mood=dreamy','_self')" class="img-responsive" src="images/dreamy.jpg" alt="">
                    <a class="info" href="playlist.php?mood=dreamy"></a>
                </div>
                    <p class="text-under-moods">Dreamy</p>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Beats</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
