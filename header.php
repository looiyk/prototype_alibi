<?php
	$servername 	= "localhost";
	$username		= "root";
	$password		= "";
	$database		= 'alibi_db';

	$conn = new mysqli($servername, $username, $password, $database);

	if($conn -> connect_error){
		die("Connection failed: " . mysqli_connect_error());
	}

	session_start();

?>