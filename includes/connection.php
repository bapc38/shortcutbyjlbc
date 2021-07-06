<?php 
// Establish database connection.
try
{
$con = new mysqli("localhost", "root", "", "shortcutdb");
	$con->set_charset("utf8mb4");
  // echo ('connected to db');
}
catch(Exception $e) {
  error_log($e->getMessage());
  exit('Error connecting to database');
	
}
?>