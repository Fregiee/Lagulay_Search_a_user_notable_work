<?php  

require_once 'dbConfig.php';
require_once 'models.php';


if (isset($_POST['insertUserBtn'])) {
	$insertUser = insertNewUser($pdo,$_POST['data_specialization'], $_POST['experience'],$_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['gender'], $_POST['nationality']);

	if ($insertUser['status'] == '200') {
        $_SESSION['message'] = $insertUser['message'];
        $_SESSION['status'] = $insertUser['status'];
        header("Location: ../index.php");
    }

    else {
        $_SESSION['message'] = $insertUser['message'];
        $_SESSION['status'] = $insertUser['status'];
        header("Location: ../index.php");
    }
}


if (isset($_POST['editUserBtn'])) {
	$editUser = editUser($pdo,$_POST['data_specialization'], $_POST['experience'],$_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['gender'], $_POST['nationality'], $_GET['id']);

	if ($editUser['status'] == '200') {
        $_SESSION['message'] = $editUser['message'];
        $_SESSION['status'] = $editUser['status'];
        header("Location: ../index.php");
    }

    else {
        $_SESSION['message'] = $editUser['message'];
        $_SESSION['status'] = $editUser['status'];
        header("Location: ../index.php");
    }
}

if (isset($_POST['deleteUserBtn'])) {
	$deleteUser = deleteUser($pdo,$_GET['id']);

	if ($deleteUser) {
		$_SESSION['message'] = "Successfully deleted!";
		header("Location: ../index.php");
	}
}

if (isset($_GET['searchBtn'])) {
	$searchForAUser = searchForAUser($pdo, $_GET['searchInput']);
	foreach ($searchForAUser as $row) {
		echo "<tr> 
				<td>{$row['id']}</td>
                <td>{$row['data_specialization']}</td>
                <td>{$row['experience']}</td>
				<td>{$row['first_name']}</td>
				<td>{$row['last_name']}</td>
				<td>{$row['email']}</td>
				<td>{$row['gender']}</td>
				<td>{$row['nationality']}</td>

			  </tr>";
	}
}

?>
