<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "db_eguide";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	return false;

	$servername = "localhost";
	$username = "u187511933_eguide";
	$password = "!Creatives2020";
	$database = "u187511933_eguide";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
    } 

?> 