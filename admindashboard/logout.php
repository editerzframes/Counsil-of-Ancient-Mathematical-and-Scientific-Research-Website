<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: http://localhost/gulbir/admindashboard/index.php/"); // Redirecting To Home Page
}
?>