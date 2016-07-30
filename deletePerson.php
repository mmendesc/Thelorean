<?php
	require("config.php");
	require (ROOTPATH."/control/connect.php");
	require (ROOTPATH."/control/personCRUD.php");

	session_start();

	deletePerson($_SESSION['idPerson']);
	unset ($_SESSION['idPerson']);
	header('location:index.php');

?>