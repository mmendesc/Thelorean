<div class="panel">
	<?php
		echo "<h1 class='red'><span></span>".$user['name']."'s profile</h1>";
	?>
	<hr>
    <h2>City</h2>
    <?php echo "<p>".$user['city']."</php>"?>
    <h2>Description</h2>
    <?php echo "<p>".$user['description']."</php>"?>
    <h2>My Histories</h2><hr>
    <?php require 'histories.php';?>

    <?php
    	echo '<button onclick="window.location.href=\'newHistory.php\'" class="btn btn-default">Create New History</button>';
    ?>

</div>