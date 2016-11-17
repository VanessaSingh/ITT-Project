<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">  
  <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
<?php
  session_start();
  require_once("includes/dbcon.php");
  if($_POST["submit2"])
  {
    $user = $_POST["email"];
    $pass = $_POST["password"];
    $query = "INSERT INTO `users` (`email`, `password`) VALUES ('{$user}','{$pass}')";
    $result = mysqli_query($connection,$query);
    if($result)
    {
      echo '<h1>Account created successfully! PLease login';
    }
    else
      echo '<h1>Query failed</h1>';
  }
  if($_POST["submit1"])
  {
    $user = $_POST["username"];
    $pass = $_POST["password"];
    $query = "Select * from users";
    $result = mysqli_query($connection,$query);
    $flag = 0;
    if($result)
    {
      while($row = mysqli_fetch_assoc($result))
      {
        if($row["email"]==$user&&$row["password"]==$pass)
        {
          $flag = 1;
          break;
        }
      }
      if($flag == 1)
      {
        $_SESSION["username"] = 1;
        header("Location:index.php");
      }
    }
  }
?>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
          <input type="submit" name="submit2" class="button button-block" method="post" value="Get Started!"/>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="username" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <input type="submit" name="submit1" class="button button-block"/>
          
          </form>

        </div>
        
      </div>
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
