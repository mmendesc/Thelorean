<!DOCTYPE html>
<?php
	require ("config.php");
	require (ROOTPATH."/control/connect.php");
	require (ROOTPATH."/control/categoryCRUD.php");
	session_start();
?>

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>TheLorean - New Topic</title>
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
	<?php include_once("header.php"); ?>

	<div class="container">
		<?php require ("categoryMenu.php"); ?>
		<div class="col col-sm-9">
			<div class="panel">
				<form class="form-signin" action="topicCreate.php" method="POST">
					<h2 class="form-signin-heading">Creating new topic</h2>

					<h4>Title:</h4>
					<input type="text" id="inputName" class="form-control" name="title"  required autofocus>
					<input type="hidden" name="idt" value="<?php echo $_GET['idt'];?>">
					<h4>Content:</h4>
					<textarea rows=10 type="text" id="inputContent" class="form-control not-resizable" name="content" required></textarea>
					<hr>
					<button class="btn btn-default" type="submit">Create Topic</button>
				</form>
			</div>
		</div>
	</div> <!-- /container -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>