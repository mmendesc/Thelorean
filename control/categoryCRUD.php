<?php
	function createCategory($category) {
		if(!empty($category)){
			try{
				$pdo = getConnection();
				$sql = "INSERT INTO Category (name) VALUES (?)";
				$statement = $pdo->prepare($sql);
				$statement->bindValue(1, $category->getName());
				$statement->execute();

				$statement = null;
				$pdo = null;
			}catch(PDOException $e){
				echo "ERROR: ".$e;
			}
		}
	}

	function selectOneCategory($id) {
		if(!empty($id)){
			try{
				$pdo = getConnection();

				$sql = "SELECT * FROM Category WHERE idCategory='".$id."'";
				$result = $pdo->query($sql);
				$first = $result->fetch();

				$pdo = null;
				return $first;
			}catch(PDOException $e){
				echo "ERROR: ".$e;
			}
		}
	}

	function selectCategories() {
		try{
			$pdo = getConnection();

			$sql = "SELECT * FROM Category";
			$result = $pdo->query($sql);

			$pdo = null;
			return $result;
		}catch(PDOException $e){
				echo "ERROR: ".$e;
		}
	}

	function selectTopCategories() {
		try{
			$pdo = getConnection();

			$sql = "SELECT c.idCategory, c.name, COUNT(*) 
					FROM Category as c, CategoryHistory as ch 
					WHERE ch.idCategory = c.idCategory 
					GROUP BY c.idCategory ORDER BY COUNT(*) DESC";

			$result = $pdo->query($sql);
			$pdo = null;
			return $result;
		}catch(PDOException $e){
				echo "ERROR: ".$e;
		}
	}

	function selectHistoriesByCategory($idCategory) {
	    try{
	      $pdo = getConnection();

	      $sql = "SELECT * FROM History as h, CategoryHistory as c WHERE h.idHistory = c.idHistory AND c.idCategory='".$idCategory."'";
	      $result = $pdo->query($sql);

	      $pdo = null;
	      return $result;
	    }catch(PDOException $e){
	        echo "ERROR: ".$e;
	    }
	}

	function updateCategory($id, $name) {
		try{
			$pdo = getConnection();

			$sql = "UPDATE Category SET name='".$name."' WHERE idCategory='".$id."'";
			$result = $pdo->query($sql);
			$pdo = null;
		}catch(PDOException $e){
				echo "ERROR: ".$e;
		}
	}

	function deleteCategory($id) {
		if(!empty($id)){
			try{
				$pdo = getConnection();
				$sql = "DELETE FROM Category WHERE idCategory='".$id."'";
				$result = $pdo->query($sql);
				$pdo = null;
			}catch(PDOException $e){
				echo "ERROR: ".$e;
			}
		}
	}

	function selectCategoriesByHistory($idHistory) {
    try{
      $pdo = getConnection();

      $sql = "SELECT C.idCategory, C.name, H.idHistory 
          FROM Category as C, History as H, CategoryHistory as CH 
          WHERE C.idCategory = CH.idCategory AND H.idHistory = CH.idHistory
            AND H.idHistory ='".$idHistory."'";
      $result = $pdo->query($sql);

      $pdo = null;
      return $result;
    }catch(PDOException $e){
        echo "ERROR: ".$e;
    }
  }

  function linkHistoryCategory($idHistory, $idCategory) {
    try{
      $pdo = getConnection();
      $sql = "INSERT INTO CategoryHistory (idHistory, idCategory) VALUES (?, ?)";
      $statement = $pdo->prepare($sql);
      $statement->bindValue(1, $idHistory);
      $statement->bindValue(2, $idCategory);
      $statement->execute();

      $statement = null;
      $pdo = null;
    }catch(PDOException $e){
      echo "ERROR: ".$e;
    }
  }
?>