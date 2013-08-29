
<?php

include_once('User.php');

if(isset($_POST['submit'])) {

    $name = $_POST['user'];
    $pass = $_POST['pass'];

    $object = new User();
    $object->Login($name, $pass);
}
?>

<html>
<head></head>
<body>
<h1><b>SYSTEM LOGIN</b></h1>
	<form method="post" action="index.php">


                                        Username:&nbsp;<input type="text" name="user"/> <br>
                                        Passphrase:&nbsp;<input type="password" name="pass"/> <br>

                        <input type="submit" name="submit" value="Login"/>

    </form>

	<a href="newUser.php">Register New User</a>
</body>
</html>