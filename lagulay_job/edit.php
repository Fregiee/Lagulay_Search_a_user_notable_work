<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<?php $getUserByID = getUserByID($pdo, $_GET['id']); ?>
	<h1>Edit the user!</h1>
	<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <p>
			<label for="data_specialization">Data Specialization</label> 
			<input type="text" name="data_specialization" value="<?php echo $getUserByID['data_specialization']; ?>">
		</p>
		<p>
			<label for="experience">Experience</label> 
			<input type="text" name="experience" value="<?php echo $getUserByID['experience']; ?>">
		</p>
        <p>
			<label for="firstName">First Name</label> 
			<input type="text" name="first_name" value="<?php echo $getUserByID['first_name']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="last_name" value="<?php echo $getUserByID['last_name']; ?>">
		</p>
		<p>
			<label for="email">Email</label> 
			<input type="text" name="email" value="<?php echo $getUserByID['email']; ?>">
		</p>
		<p>
			<label for="gender">Gender</label> 
			<input type="text" name="gender" value="<?php echo $getUserByID['gender']; ?>">
		</p>
		<p>
			<label for="nationality">Nationality</label> 
			<input type="text" name="nationality" value="<?php echo $getUserByID['nationality']; ?>">
            <input type="submit" value="Save" name="editUserBtn">
		</p>
		
	</form>
</body>
</html>