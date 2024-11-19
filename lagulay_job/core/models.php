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
            CONCAT(data_specialization, experience, first_name, last_name, email, gender, nationality, date_added) 
            LIKE ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute(["%" . $searchQuery . "%"]);
    
    if ($executeQuery) {
        return $stmt->fetchAll();
    } else {
        return array(
            "status" => "400",
            "message" => "An error occurred with the query!"
        );
    }
}




function insertNewUser($pdo, $data_specialization, $experience, $first_name, $last_name, $email, $gender, $nationality) {
    $response = array();
    $checkIfUserExists = checkIfUserExists($pdo, $email); // Use email instead of first_name

    if (!$checkIfUserExists['result']) {
        $sql = "INSERT INTO search_users_data 
                (data_specialization, experience, first_name, last_name, email, gender, nationality)
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        
        if ($stmt->execute([$data_specialization, $experience, $first_name, $last_name, $email, $gender, $nationality])) {
            $response = array(
                "status" => "200",
                "message" => "User successfully inserted!"
            );
        } else {
            $response = array(
                "status" => "400",
                "message" => "An error occurred with the query!"
            );
        }
    } else {
        $response = array(
            "status" => "400",
            "message" => "User already exists!"
        );
    }

    return $response;
}


function editUser($pdo, $data_specialization, $experience, $first_name, $last_name, $email, $gender, $nationality, $id) {
    $response = array();
    $sql = "UPDATE search_users_data
            SET data_specialization = ?, experience = ?, first_name = ?, last_name = ?, email = ?, gender = ?, nationality = ?
            WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$data_specialization, $experience, $first_name, $last_name, $email, $gender, $nationality, $id]);

    if ($executeQuery) {
        $response = array(
            "status" => "200",
            "message" => "User successfully updated!"
        );
    } else {
        $response = array(
            "status" => "400",
            "message" => "An error occurred with the query!"
        );
    }

    return $response;
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



function checkIfUserExists($pdo, $first_name) {
	$response = array();
	$sql = "SELECT * FROM search_users_data WHERE first_name = ?";
	$stmt = $pdo->prepare($sql);

	if ($stmt->execute([$first_name])) {

		$userInfoArray = $stmt->fetch();

		if ($stmt->rowCount() > 0) {
			$response = array(
				"result"=> true,
				"status" => "200",
				"userInfoArray" => $userInfoArray
			);
		}

		else {
			$response = array(
				"status" => "400",
				"message"=> "User doesn't exist from the database"
			);
		}
	}

	return $response;

}


?>
