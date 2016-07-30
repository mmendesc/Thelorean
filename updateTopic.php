<!DOCTYPE html>
<?php 
	require ("config.php");
	require (ROOTPATH."/control/connect.php");
	require (ROOTPATH."/control/topicCRUD.php");
	require (ROOTPATH."/control/categoryCRUD.php");
	
	session_start();

	if(!isset($_GET['idt'])){
		header('location:index.php');
	}

	$topic= selectOneTopic($_GET['idt']);
	echo $topic['title'];
?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>TheLorean - Update Topic</title>
	<meta name="generator" content="Bootply" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!--[if lt IE 9]>
  	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
</head>

<body>
	<?php
		include_once("header.php"); 
	?>

	<div class="container">
		<?php require ("categoryMenu.php"); ?>
		<div class="col col-sm-9">
			<div class="panel">
				<form class="form-signin" action="topicUpdate.php" method="POST">
					<h2 class="form-signin-heading">Update Topic</h2>

					<h4>Title:</h4>
					<input type="text" id="inputTitle" class="form-control" name="title" value="<?php echo $topic['title'];?>"  required>
					<input type="hidden" name="idt" value="<?php echo $topic['idTopic'];?>">

					<h4>Content:</h4>
					<textarea rows=10 type="text" id="inputContent" class="form-control not-resizable" name="content" required><?php echo $topic['content'];?></textarea>
					<hr>
					<input type="hidden" id="inputIdHistory" name="idHistory" value="<?php echo $topic['idHistory'];?>"  required>
					<button class="btn btn-default" type="submit">Save Changes</button>
				</form>
			</div>
		</div>
	</div> <!-- /container -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>