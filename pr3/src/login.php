<?php
	$password = $_POST['password'];
	$username = $_POST['username'];

	header("Location: http://{$username}:{$password}@localhost/files/index.php");
	exit();
