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
	<h1>Edit the user!</h1>
	<form action="core/handleForms.php" method="POST">
        <p>
			<label for="data_specialization">Data Specialization</label> 
			<input type="text" name="data_specialization">
		</p>
		<p>
			<label for="experience">Experience</label> 
			<input type="text" name="experience">
		</p>
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="first_name">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="last_name">
		</p>
		<p>
			<label for="email">Email</label> 
			<input type="text" name="email">
		</p>
		<p>
			<label for="gender">Gender</label> 
			<input type="text" name="gender">
		</p>
		<p>
			<label for="firstName">Nationality</label> 
			<input type="text" name="nationality">
            <input type="submit" name="insertUserBtn">
		</p>
	</form>
</body>
</html>