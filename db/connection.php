<?php
	$dbuser = "claire marie";
	$dbpass = "lanorias";
	$dbname = "it301ads";
	$dbhost = "localhost";

	$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
?>
