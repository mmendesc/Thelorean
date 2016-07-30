<!DOCTYPE html>
<?php
  require("config.php");
  require (ROOTPATH."/control/personCRUD.php");
  require (ROOTPATH."/control/categoryCRUD.php");
  require (ROOTPATH."/control/historyCRUD.php");
  require (ROOTPATH."/control/topicCRUD.php");
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
          <?php
            if(isset($_GET['idp']))
              $user = selectOnePerson($_GET['idp']);
            else
              $user = selectOnePerson($_SESSION['idPerson']);

            if(isset($_GET['idh']))
              require("showHistory.php");
            elseif(isset($_GET['idt']))
              require("showTopic.php");
            elseif(isset($_GET['idc']))
              require("showCategory.php");
            else
              require("showPerson.php");
          ?>
        </div>
      </div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>