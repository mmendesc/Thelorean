<?php
	require("config.php");
	require (ROOTPATH."/control/connect.php");
	require (ROOTPATH."/control/historyCRUD.php");
	require (ROOTPATH."/model/History.php");

	session_start();

	$title = $_POST['title'];
	$prologue = $_POST['prologue'];
	$categories = $_POST['categories'];
	$idPerson = $_SESSION['idPerson'];

	$history= new History($title,$prologue);

	createHistory($history, $idPerson, $categories);
	
	header('location:index.php');

?>