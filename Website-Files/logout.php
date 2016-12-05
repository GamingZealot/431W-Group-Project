<?php
	// set the expiration date to one hour ago
	unset($_COOKIE["user_id"]);
	unset($_COOKIE["user_name"]);
	setcookie("user_id", null, -1, '/');
	setcookie("user_name", null, -1, '/');
	header('Location: home.php');
	echo "Logged out";
?>