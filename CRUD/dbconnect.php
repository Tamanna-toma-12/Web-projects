<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="8th_batch";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	if($conn)
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

?>