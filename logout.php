<?php

session_start();
	$page = "index.php";

	unset($_SESSION["auth_username"]);
	session_destroy($_SESSION["auth_username"]);
	header('Location:'.$page);

?>