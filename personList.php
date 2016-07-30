<!DOCTYPE html>
<?php
  require("config.php");
  require (ROOTPATH."/control/personCRUD.php");
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

  $people = selectPeople();
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
            <h1 class='red'><span></span>People List</h1><hr>
            <?php
              while($person = $people->fetch()){
                echo "<h3><a href='index.php?idp=".$person['idPerson']."'>".$person['name']."</a></h3>";
                echo "<p>from ".$person['city'];
                echo "<hr>";
              }
            ?>
          </div>
        </div>
      </div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>