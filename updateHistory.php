<!DOCTYPE html>
<?php 
	require ("config.php");
	require (ROOTPATH."/control/connect.php");
	require (ROOTPATH."/control/historyCRUD.php");
	require (ROOTPATH."/control/categoryCRUD.php");
	
	session_start();

	if(!isset($_GET['idh'])){
		header('location:index.php');
	}

	$history= selectOneHistory($_GET['idh']);

?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>TheLorean - Update History</title>
	<meta name="generator" content="Bootply" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!--[if lt IE 9]>
  	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link href="css/styles.css" rel="stylesheet">
</head>

<body>
	<?php
		include_once("header.php"); 
	?>

	<div class="container">
		<?php require ("categoryMenu.php"); ?>

		<div class="col col-sm-9">
			<div class="panel">
				<form class="form-signin" action="historyUpdate.php" method="POST">
					<h2 class="form-signin-heading">Update History</h2>

					<h4>Title:</h4>
					<input type="text" id="inputTitle" class="form-control" name="title" value="<?php echo $history['name'];?>"  required>
					<input type="hidden" name="idh" value="<?php echo $history['idHistory'];?>">

					<h4>Prologue:</h4>
					<textarea rows=10 type="text" id="inputPrologue" class="form-control not-resizable" name="prologue" required><?php echo $history['prologue'];?>
					</textarea>
					<hr>
					<button class="btn btn-default" type="submit">Save Changes</button>
				</form>
			</div>
		</div>
	</div> <!-- /container -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>