<?php
	require("config.php");
	require (ROOTPATH."/control/connect.php");
	require (ROOTPATH."/control/personCRUD.php");
	require (ROOTPATH."/model/Person.php");

	session_start();

	$name = $_POST['name'];
	$email = $_POST['email'];
	$city = $_POST['city'];
	$description = $_POST['description'];
	$password = $_POST['password'];

	$person = new Person($name, $email, $password, $city, $description);
	
	createPerson($person);
	header('location:login.php');
?>