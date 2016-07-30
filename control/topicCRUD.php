<?php
	function createTopic($topic) {
		if(!empty($topic)){
			try{
				$pdo = getConnection();
				$sql = "INSERT INTO Topic (idHistory, title, content) VALUES (?, ?, ?)";
				$statement = $pdo->prepare($sql);
				$statement->bindValue(1, $topic->getIdHistory());
				$statement->bindValue(2, $topic->getTitle());
				$statement->bindValue(3, $topic->getContent());
				$statement->execute();

				$statement = null;
				$pdo = null;
			}catch(PDOException $e){
				echo "ERROR: ".$e;
			}
		}
	}

	function selectOneTopic($id) {
		try{
			$pdo = getConnection();
			$sql = "SELECT * FROM Topic WHERE idTopic='".$id."'";
			$result = $pdo->query($sql);
			$first = $result->fetch();
			$pdo = null;
			return $first;
		}catch(PDOException $e){
			echo "ERROR: ".$e;
		}
	}

	function selectTopics() {
		try{
			$pdo = getConnection();

			$sql = "SELECT * FROM Topic";
			$result = $pdo->query($sql);

			$pdo = null;
			return $result;
		}catch(PDOException $e){
				echo "ERROR: ".$e;
		}
	}

	function updateTopic($id, $title, $content) {
		try{
			$pdo = getConnection();

			$sql = "UPDATE Topic SET title='".$title."', content='".$content."' WHERE idTopic='".$id."'";
			$result = $pdo->query($sql);
			$pdo = null;
		}catch(PDOException $e){
				echo "ERROR: ".$e;
		}
	}

	function deleteTopic($id) {
		if(!empty($id)){
			try{
				$pdo = getConnection();
				$sql = "DELETE FROM Topic WHERE idTopic='".$id."'";
				$result = $pdo->query($sql);
				$pdo = null;
			}catch(PDOException $e){
				echo "ERROR: ".$e;
			}
		}
	}

	function selectTopicsByHistory($idHistory) {
    try{
      $pdo = getConnection();

      $sql = "SELECT * FROM Topic WHERE idHistory='".$idHistory."'";
      $result = $pdo->query($sql);

      $pdo = null;
      return $result;
    }catch(PDOException $e){
        echo "ERROR: ".$e;
    }
  }
?>