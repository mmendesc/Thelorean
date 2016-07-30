<?php
	$history= selectOneHistory($_GET['idh']);
    
	if(empty($history)){
		header('location:index.php');
	}
?>

<div class="panel">
        <?php 
                $people = selectPeopleByHistory($history['idHistory']);
                echo "<h1>".$history['name']."</h1>";
                echo "<p>by ";
                while($person = $people->fetch()){
                  echo "<a href='index.php?idp=".$person['idPerson']."'>".$person['name']."</a>";
                }
        ?>

        <h2>Prologue</h2>
        <?php echo "<p>".$history['prologue']."</p>"; ?>
        <hr>
        <h2>Topics</h2>
        <?php require 'topics.php';?>
        <p>Categories: 
                <?php 
                        $categories = selectCategoriesByHistory($_GET['idh']);
                        while ($category = $categories->fetch()){
                                echo " <a href='index.php?idc=".$category['idCategory']."'>".$category['name']."</a>";
                        }
                ?>
        </p>

        <?php
                if(verifyHistoryOwner($_SESSION['idPerson'], $history['idHistory'])) {
                        echo '<button class="btn btn-default" onclick="window.location.href=\'newTopic.php?idt='.$history['idHistory'].'\'">Create new topic</button><hr>';
                        echo '<button class="btn btn-default" onclick="window.location.href=\'updateHistory.php?idh='.$history['idHistory'].'\'">Edit History</button>';
                        echo '<button class="btn btn-default" onclick="window.location.href=\'deleteHistory.php?idh='.$history['idHistory'].'\'">Delete History</button>';
                }
        ?>
</div>