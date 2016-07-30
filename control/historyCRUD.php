<?php
	function createHistory($history, $id, $categories) {
    if(!empty($history)){
      try{
        $pdo = getConnection();
        $sql = "INSERT INTO History (name, prologue) VALUES (?, ?)";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(1, $history->getName());
        $statement->bindValue(2, $history->getPrologue());
        $statement->execute();

        $last_id = $pdo->query("SELECT LAST_INSERT_ID()");
        $last_id = $last_id->fetch();

        $sql = "INSERT INTO PersonHistory (idPerson, idHistory) VALUES (?, ".$last_id['LAST_INSERT_ID()'].")";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(1, $id);
        $statement->execute();

        if(!empty($categories)){
          foreach($categories as $category){
            $sql = "INSERT INTO CategoryHistory (idCategory, idHistory) VALUES (?, ".$last_id['LAST_INSERT_ID()'].")";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(1, $category);
            $statement->execute();
          }
        }

        $statement = null;
        $pdo = null;
      }catch(PDOException $e){
        echo "ERROR: ".$e;
      }
    }
  }

	function selectOneHistory($id) {
		if(!empty($id)){
			try{
				$pdo = getConnection();

				$sql = "SELECT * FROM History WHERE idHistory='".$id."'";
				$result = $pdo->query($sql);
				$first = $result->fetch();

				$pdo = null;
				return $first;
			}catch(PDOException $e){
				echo "ERROR: ".$e;
			}
		}
	}

	function selectHistories() {
		try{
			$pdo = getConnection();

			$sql = "SELECT * FROM History ORDER BY name";
			$result = $pdo->query($sql);

			$pdo = null;
			return $result;
		}catch(PDOException $e){
				echo "ERROR: ".$e;
		}
	}

	function updateHistory($id, $name, $prologue) {
		try{
			$pdo = getConnection();

			$sql = "UPDATE History SET name='".$name."', prologue='".$prologue."' WHERE idHistory='".$id."'";
			$result = $pdo->query($sql);
			$pdo = null;
		}catch(PDOException $e){
				echo "ERROR: ".$e;
		}
	}

	function deleteHistory($id) {
    if(!empty($id)){
      try{
        $pdo = getConnection();
        $sql = "DELETE FROM PersonHistory WHERE idHistory='".$id."'";
        $result = $pdo->query($sql);

        $sql = "DELETE FROM CategoryHistory WHERE idHistory='".$id."'";
        $result = $pdo->query($sql);

        $sql = "DELETE FROM History WHERE idHistory='".$id."'";
        $result = $pdo->query($sql);

        $pdo = null;
      }catch(PDOException $e){
        echo "ERROR: ".$e;
      }
    }
  }

	function selectHistoriesByUser($id) {
    try{
      $pdo = getConnection();

      $sql = "SELECT h.idHistory, h.name, h.prologue FROM History as h, PersonHistory as p WHERE h.idHistory = p.idHistory AND p.idHistory AND p.idPerson='".$id."'";
      $result = $pdo->query($sql);

      $pdo = null;
      return $result;
    }catch(PDOException $e){
        echo "ERROR: ".$e;
    }
  }

  function verifyHistoryOwner($idPerson, $idHistory){
    try{
      $pdo = getConnection();

      $sql = "SELECT p.idPerson 
              FROM History as h, PersonHistory as p 
              WHERE h.idHistory = p.idHistory AND h.idHistory='".$idHistory."'";

      $result = $pdo->query($sql);
      $pdo = null;

      $return = false;

      while ($person = $result->fetch()){
        if($person['idPerson'] == $idPerson)
          $return = true;
      }

      return $return;
    }catch(PDOException $e){
        echo "ERROR: ".$e;
    }
  }
?>