<?php
//ob_start();
	include_once('User.php');

	if(isset($_POST['submit'])) {

		$name = $_POST['user'];
		$pass = $_POST['pass'];
		$role = $_POST['role'];

		$object = new User();
		$object->register($name, $pass, $role);
	}

?>

<html>
<head>
<title>New User</title>
</head>
<body>

	<h1>Register New User.</h1>
		
		<form method="post" action="newUser.php">
			Username:&nbsp;<input type="text" name="user" value=" "/><br>
			Password:&nbsp;&nbsp;<input type="password" name="pass"/><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Role:
			&nbsp;&nbsp;
					<select name="role">
							  <option value="Tech">Technician</option>
							  <option value="Engineer">Engineer</option>
							  <option value="Admin">Administrator</option>
					</select>
					&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" name="submit" value="Register"/>
				
	</form>
</body>
</html>