<?php
	$conn = new mysqli('localhost', 'root', '', 'db_ppdb');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>	
<?php

// Database configuration 	
$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname   = "db_ppdb";
 
// Create database connection 
$con = new mysqli($hostname, $username, $password, $dbname); 
 
// Check connection 
if ($con->connect_error) { 
	die("Connection failed: " . $con->connect_error); 
}

?>