<?php
	require("config.php");
	require (ROOTPATH."/control/connect.php");
	require (ROOTPATH."/control/personCRUD.php");
	require (ROOTPATH."/model/Person.php");

	session_start();

	$user=selectOnePerson($_SESSION['idPerson']);

	
	$email = $_POST['email'];
	$city = $_POST['city'];
	$description = $_POST['description'];
	

	updatePerson($_SESSION['idPerson'],$email,$city,$description);
	
	
	header('location:index.php');
?>