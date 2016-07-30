<?php
  require("config.php");
  session_start();

  if(isset($_SESSION['idPerson'])){
    header('location:index.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>TheLorean</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/forms.css" rel="stylesheet">
  </head>
  
  <body>
    <div class="container panel">
      <?php 
        if(isset($_GET['error']) && $_GET['error']==true){
          echo "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
          echo "<strong>Email and password</strong> combination is wrong! Please, enter valid information.</div>";
        }
      ?>
      <form class="form-signin" action="verifyLogin.php" method="POST" id="login-form">
        <img src="images/logomini.png">
        <h3 class="form-signin-heading text-center">Login</h3>

        <label for="inputEmail">Email Address</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Your e-mail" name="email" required autofocus>

        <label for="inputPassword">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>

        <a href="newAccount.html">Don't have an account? Click here to create!</a>
      </form>
    </div> <!-- /container -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>