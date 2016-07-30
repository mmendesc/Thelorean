<?php
	//require (ROOTPATH."/control/categoryCRUD.php");
	$histories = selectHistoriesByCategory($_GET['idc']);
	$category = selectOneCategory($_GET['idc']);
?>

<div class="panel">
        <h1 class="red"><?php echo $category['name'];?> histories</h1>
        <?php
            while($history = $histories->fetch()){
                $people = selectPeopleByHistory($history['idHistory']);
                echo '<h3><a href="index.php?idh='.$history['idHistory'].'">'.$history['name'].'</a></h3>';
                echo "<p>by ";
                while($person = $people->fetch()){
                    echo "<a href='index.php?idp=".$person['idPerson']."'>".$person['name']."</a>";
                }
                echo '<p>'.$history['prologue'].'</p><br>';
            }
        ?>
        <hr>
</div>