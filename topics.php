<?php 
	$topics=selectTopicsByHistory($history['idHistory']);

	if($topics->rowCount() <= 0){
		echo "<p>No topics yet!</p>";
	}

	while($topic = $topics->fetch()){
        echo '<h3><a href="index.php?idt='.$topic['idTopic'].'">'.$topic['title'].'</a></h3>';
        echo '<p>'.$topic["content"].'</p>';
    }
?>