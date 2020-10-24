<?php 

/* Credentials */
$servername = "MCSERVER";
$username = "MCUSER";
$password = "MCPASSWORD";
$database = "MCDB";


/* Connection */
$conn = new mysqli($servername, $username, $password, $database);

/* If connection fails for some reason */
if ($conn->connect_error) {
	die("Database connection failed: ". $conn->connect_error);
}

?>