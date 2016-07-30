<?php
	session_start();

	session_destroy();
	unset ($_SESSION['idPerson']);
	header('location:login.php');
?>