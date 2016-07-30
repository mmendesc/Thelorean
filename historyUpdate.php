<?php
	require("config.php");
	require (ROOTPATH."/control/connect.php");
	require (ROOTPATH."/control/historyCRUD.php");
	require (ROOTPATH."/model/History.php");

	session_start();

	$history= selectOneHistory($_POST['idh']);
	$title = $_POST['title'];
	$prologue = $_POST['prologue'];
	
	updateHistory($_POST['idh'],$title,$prologue);
	
	header('location:index.php');
?>