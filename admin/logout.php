<?php
include('includes/dbconnection.php');
				$sql ="INSERT INTO audit_trail (Activity, Modified_By, Username_or_Client_ID) VALUES ('Admin Logout', 'Admin', 'homebusters')";
    			$query=$dbh->prepare($sql);
				$query-> execute();
session_start();
session_unset();
session_destroy();
header('location:login.php');

?>