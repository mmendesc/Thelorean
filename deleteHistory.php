<?php
	require("config.php");
	require (ROOTPATH."/control/connect.php");
	require (ROOTPATH."/control/historyCRUD.php");

	session_start();

	deleteHistory($_GET['idh']);
	header('location:index.php');


?>