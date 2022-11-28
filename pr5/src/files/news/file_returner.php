<?php
require("file_uploader.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['name'])
	$name = $_GET['name'];
	$filename = "upload/" . $name;
	$view = $_GET['view'];
	header("Content-Length: ".filesize($filename));
	header("Content-Disposition: $view; filename = $name");
	header("Content-type: application/pdf");
	/*header("Content-Description: File Transfer");*/

	readfile($filename);


?>