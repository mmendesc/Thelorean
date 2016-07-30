<?php
	$topic= selectOneTopic($_GET['idt']);
	if(empty($topic)){
		header('location:index.php');
	}
?>

<div class="panel">
        <?php echo "<h1>".$topic['title']."</h1>";?>
        <h2>Content</h2>
        <?php echo "<p>".$topic['content']."</php>"?>
        
        <?php
        if(verifyHistoryOwner($_SESSION['idPerson'], $topic['idHistory'])) {
        echo '<hr><button class="btn btn-default" onclick="window.location.href=\'updateTopic.php?idt='.$topic['idTopic'].'\'">Edit Topic</button>';
        echo '<button class="btn btn-default" onclick="window.location.href=\'deleteTopic.php?idt='.$topic['idTopic'].'\'">Delete Topic</button>';
        }
        ?>
</div>