<!DOCTYPE html>
<?php
  require("config.php");
  require (ROOTPATH."/control/categoryCRUD.php");
  require(ROOTPATH."/control/connect.php");
  
	session_start();

	if(!isset($_SESSION['idPerson'])){
		header('location:login.php');
	}

  if( isset($_GET['argument']) && $_GET['argument'] == 'logout') {
      session_destroy();
      unset ($_SESSION['idPerson']);
      header('location:login.php');
  }

  $categories = selectCategories();
?>

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
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

  </head>

  <?php include_once("header.php"); ?>

  <body>
    <div class="container">
      <div class="row">

        <?php require ("categoryMenu.php"); ?>
        
        <div class="col col-sm-9">
          <div class="panel">
            <h1 class="red">About The Lorean</h1>
            <h3>The Project</h3>
            <p> This is a project from Matheus and Kelvin that has the objective to let people share their history. We decided to do this because we are from Brazil and wanted to share our experiences from our 1 year of study in USA.</p>
            <h3>How it works</h3>
            <p> After you create an account you can begin to create histories. A history is something that happened to you. It can be everything: a trip, a party, a moment with someone you like or even a normal day that was special in some way! Each history has a prologue where you can explain briefly what the history is about first. After that, you can add many topics as you want to that history. For example, if you made a trip that lasted a week, you can create topics of each day, so you can explain in the best way possible dividing by parts. But this is not the end! When you create a history, other people can see them! And you also can see other histories in the History section, or see who is using the website and created a profile in the People section. Lastly, each history can be labeled in a category. Feel free to create one or use one someone created, so you can easily see these histories in the category section later!</p>
          </div>
        </div>
      </div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>