<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

    <title>Login | Beats</title>

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
	<div class="login-div">
	<center>
		<form>
			<table class="login-table" style="color: #FFFFFF;font-size: 25px;border-style: hidden;margin-top: 200px">
				<tr>
					<td style="border-style: hidden;">Username</td>
					<td style="border-style: hidden;"><input type="text" id="username" style="color:#333333;font-size: 20px;"></td>
				</tr>
				<tr>
					<td style="border-style: hidden;">Password</td>
					<td style="border-style: hidden;"><input type="password" id="password" style="color:#333333;font-size: 20px;"></td>
				</tr>
				<tr>
					<td></td>
					<td><a href="index.php"><input type="submit" id="submit" value="Login >> " style="color:#EEEEEE;font-size: 22px;border:none;"></td></a>
				</tr>
			</table>
		</form>
	</center>
	</div>

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