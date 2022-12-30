<?php

$host = 'lamp_mysql';
$user = 'root';
$password = 'toor';

$conn = new mysqli($host, $user, $password);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} else {
	echo '<h1>Database connected!</h1><br>';
	echo 'HOST: ' . $host . '<br>';
	$conn->close();
}

?>
