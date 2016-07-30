  <?php 
    $topCategories = selectTopCategories();
  ?>

  <div class="col col-sm-3 panel">
    <div id="sidebar">
      <ul class="nav nav-stacked">
        <li><h3 class="highlight">Top Categories<i class="glyphicon glyphicon-list pull-right"></i></h3></li>
        <?php 
          $i = 0;
          while($category = $topCategories->fetch()){
            echo "<li><a href='index.php?idc=".$category['idCategory']."'>".$category['name']."</a></li>";
            $i++;
            if($i >= 5)
              break;
          }
        ?>
        <li><a href="newCategory.php">Suggest a Category</a></li>
      </ul>
    </div>
  </div>