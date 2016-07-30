<?php
	require("config.php");
	require (ROOTPATH."/control/connect.php");
	require (ROOTPATH."/control/topicCRUD.php");

	session_start();
	$topic = selectOneTopic($_GET['idt']);
	deleteTopic($_GET['idt']);
	header('location:index.php?idh='.$topic['idHistory']);
?>