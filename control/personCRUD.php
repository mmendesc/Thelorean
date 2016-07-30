<?php
	function createPerson($person) {
		if(!empty($person)){
			try{
				$pdo = getConnection();
				$sql = "INSERT INTO Person (name, email, password, city, description) VALUES (?, ?, ?, ?, ?)";
				$statement = $pdo->prepare($sql);
				$statement->bindValue(1, $person->getName());
				$statement->bindValue(2, $person->getEmail());
				$statement->bindValue(3, $person->getPassword());
				$statement->bindValue(4, $person->getCity());
				$statement->bindValue(5, $person->getDescription());
				$statement->execute();

				$statement = null;
				$pdo = null;
			}catch(PDOException $e){
				echo "ERROR: ".$e;
			}
		}
	}

	function selectLogin($email, $password) {
		if(!empty($email) && !empty($password)){
			try{
				$pdo = getConnection();

				$sql = "SELECT * FROM Person WHERE email='".$email."' AND password='".$password."'";
				$result = $pdo->query($sql);
				$first = $result->fetch();
				$pdo = null;
				return $first;
			}catch(PDOException $e){
				echo "ERROR: ".$e;
			}
		}
	}

	function selectOnePerson($id) {
		if(!empty($id)){
			try{
				$pdo = getConnection();

				$sql = "SELECT * FROM Person WHERE idPerson='".$id."'";
				$result = $pdo->query($sql);
				$first = $result->fetch();

				$pdo = null;
				return $first;
			}catch(PDOException $e){
				echo "ERROR: ".$e;
			}
		}
	}

	function selectPeople() {
		try{
			$pdo = getConnection();

			$sql = "SELECT idPerson, name, city FROM Person ORDER BY name";
			$result = $pdo->query($sql);

			$pdo = null;
			return $result;
		}catch(PDOException $e){
				echo "ERROR: ".$e;
		}
	}

	function selectPeopleByHistory($idHistory) {
		try{
			$pdo = getConnection();

			$sql = "SELECT p.idPerson, p.name
					FROM Person as p, PersonHistory as cp, History as h
					WHERE h.idHistory = cp.idHistory AND cp.idPerson = p.idPerson
					AND h.idHistory='".$idHistory."'";
			$result = $pdo->query($sql);

			$pdo = null;
			return $result;
		}catch(PDOException $e){
				echo "ERROR: ".$e;
		}
	}

	function updatePerson($id, $email, $city, $description) {
		try{
			$pdo = getConnection();

			$sql = "UPDATE Person SET email='".$email."', city='".$city."', 
			description='".$description."' WHERE idPerson='".$id."'";
			$result = $pdo->query($sql);
			$pdo = null;
		}catch(PDOException $e){
				echo "ERROR: ".$e;
		}
	}

	function deletePerson($id) {
		if(!empty($id)){
			try{
				$pdo = getConnection();
				$sql = "DELETE FROM Person WHERE idPerson='".$id."'";
				$result = $pdo->query($sql);
				$pdo = null;
			}catch(PDOException $e){
				echo "ERROR: ".$e;
			}
		}
	}
?>