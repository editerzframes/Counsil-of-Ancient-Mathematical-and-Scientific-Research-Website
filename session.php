<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db($connection, "company");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query( $connection, "select * from resultclass1 where Reg='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['Reg'];
$class = $row['Class'];
$name = $row['name'];
$rank = $row['rank'];
$math = $row['math'];
$sci = $row['sci'];
$eng = $row['eng'];
$ssc = $row['ssc'];
$gk = $row['gk'];
$markst = $row['marks'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header("Location: http://localhost/gulbir/index.php/"); // Redirecting To Home Page
}
?>

