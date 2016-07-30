<?php
	$histories= selectHistoriesByUser($user['idPerson']);

	if($histories->rowCount() <= 0){
		echo "<p>No histories yet!</p>";
	}
	while($history = $histories->fetch()){
        echo '<h3><a href="index.php?idh='.$history['idHistory'].'">'.$history['name'].'</a></h3>';
        echo '<p>'.$history['prologue'].'</p><hr>';
      }
?>