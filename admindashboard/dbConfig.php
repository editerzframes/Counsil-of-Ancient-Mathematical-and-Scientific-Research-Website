<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "gulbir";

// Create database connection
$db = mysqli_connect($dbHost, $dbUsername, $dbPassword);
$connection = mysqli_select_db($db, "gulbir");
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>