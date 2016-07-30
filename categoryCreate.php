<?php
	require("config.php");
	require (ROOTPATH."/control/connect.php");
	require (ROOTPATH."/control/categoryCRUD.php");
	require (ROOTPATH."/model/Category.php");

	session_start();

	$name = $_POST['name'];
	$category= new Category($name);
	createCategory($category);
	header('location:index.php');

?>