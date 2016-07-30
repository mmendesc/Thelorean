<?php
	require("config.php");
	require (ROOTPATH."/control/connect.php");
	require (ROOTPATH."/control/topicCRUD.php");
	require (ROOTPATH."/model/Topic.php");

	session_start();

	$title = $_POST['title'];
	$content = $_POST['content'];
	$idHistory=$_POST['idt'];

	$topic= new Topic($idHistory,$title,$content);

	createTopic($topic);
	header('location:index.php?idh='.$idHistory);

?>
