<?php
	require("config.php");
	require (ROOTPATH."/control/connect.php");
	require (ROOTPATH."/control/topicCRUD.php");
	require (ROOTPATH."/model/Topic.php");

	session_start();

	$idHistory = $_POST['idHistory'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	
	updateTopic($_POST['idt'],$title,$content);
	
	header('location:index.php?idh='.$idHistory);
?>