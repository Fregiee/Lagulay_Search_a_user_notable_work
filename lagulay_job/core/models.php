<?php  

require_once 'dbConfig.php';

function getAllUsers($pdo) {
	$sql = "SELECT * FROM search_users_data 
			ORDER BY first_name ASC";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getUserByID($pdo, $id) {
	$sql = "SELECT * from search_users_data WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$id]);

	if ($executeQuery) {
		return $stmt->fetch();
	}
}

function searchForAUser($pdo, $searchQuery) {
	
	$sql = "SELECT * FROM search_users_data WHERE 
			CONCAT(data_specialization,experience,first_name,last_name,email,gender,
				nationality,date_added) 
			LIKE ?";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute(["%".$searchQuery."%"]);
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}



function insertNewUser($pdo,$data_specialization, $experience, $first_name, $last_name, $email, 
	$gender, $nationality) {

	$sql = "INSERT INTO search_users_data 
			(
                data_specialization,
                experience,
				first_name,
				last_name,
				email,
				gender,
				nationality
			)
			VALUES (?,?,?,?,?,?,?)
			";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([
		$data_specialization, $experience,
        $first_name, $last_name, $email, 
		$gender,$nationality,
	]);

	if ($executeQuery) {
		return true;
	}

}

function editUser($pdo,$data_specialization, $experience, $first_name, $last_name, $email, $gender, 
	 $nationality, $id) {

	$sql = "UPDATE search_users_data
				SET data_specialization, 
                    experience,
                    first_name = ?,
					last_name = ?,
					email = ?,
					gender = ?,
					nationality = ?,
				WHERE id = ? 
			";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$data_specialization, $experience,$first_name, $last_name, $email, $gender, 
		 $nationality, $id]);

	if ($executeQuery) {
		return true;
	}

}


function deleteUser($pdo, $id) {
	$sql = "DELETE FROM search_users_data 
			WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$id]);

	if ($executeQuery) {
		return true;
	}
}




?>