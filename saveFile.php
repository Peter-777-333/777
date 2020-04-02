<?php
define('SITE_ROOT', realpath(dirname(__FILE__)));
	$uploadDir = '/files/';
	$uploadFile = $uploadDir . basename($_FILES['userfile']['name']);
	var_dump($uploadFile);
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], SITE_ROOT . $uploadFile)) {
		echo "ФАЙЛ OK ";
		$mysql = new mysqli('localhost:3306', 'root', 'root', 'users');
		if ($mysql->errno) {
			echo "Error" . $mysql->error;
			exit;
		}
		$result = mysql_query ("UPDATE users SET `path`='$uploadFile' WHERE id='$id'");
		// $query = "INSERT INTO users (`path`) VALUES ('$uploadFile')";
		$mysql -> query($query);
		if ($mysql->error) {
			echo "Error" . $mysql->error;
			exit;
		}
	} else {
		echo "Error";
	}
?><br>
<button><a href="vphoto.php">TEST</a></button>
