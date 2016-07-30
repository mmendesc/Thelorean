<!DOCTYPE html>
<?php
	require ("config.php");
	require (ROOTPATH."/control/connect.php");
	require (ROOTPATH."/control/personCRUD.php");
	require (ROOTPATH."/control/categoryCRUD.php");
	
	session_start();

	$user=selectOnePerson($_SESSION['idPerson']);

?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>TheLorean - Update Profile</title>
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
		$user=selectOnePerson($_SESSION['idPerson']);
	?>

	<div class="container">
		<div class="panel">
			<form class="form-signin" action="personUpdate.php" method="POST">
				<h2 class="form-signin-heading">Update Profile</h2>
				<h4>Email:</h4>
				<input type="email" id="inputEmail" class="form-control" name="email" value="<?php echo $user['email'];?>" required>

				<h4>City:</h4>
				<input type="text" id="inputCity" class="form-control" name="city" value="<?php echo $user['city'];?>" required>

				<h4>Description:</h4>
				<textarea type="text" id="inputDescription" class="form-control not-resizable" name="description" required><?php echo $user['description'];?></textarea>
				<hr>
				<button class="btn btn-default" type="submit">Save Changes</button>
			</form>
			<?php
    			echo '<button onclick="window.location.href=\'deletePerson.php\'" class="btn btn-default checkbox-group red">DELETE ACCOUNT</button>';
   			?>
		</div>
	</div> <!-- /container -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>