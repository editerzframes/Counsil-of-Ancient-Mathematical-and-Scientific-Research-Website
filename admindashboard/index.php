<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header('Location: http://localhost/gulbir/admindashboard/profile.php/');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link href="http://localhost/gulbir/admindashboard/indexstyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~SECOND HEADER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->
  <div id="top-text">
    <img class="logo floatLeft" alt="Logo"  />
    <h1 class="textheader2 textheader2-1size" style="text-align:left">SOFT COMPUTING RESEARCH SOCIETY</h1>
    <h2 class="textheader2 textheader2-2size" style="text-align:left">Registered under the societies registration act XXI of 1860</h2>
    </div>

<!--    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    
<div class="form-style-8">
  <h2>Login to your account</h2>
  <form action="" method="post">
    <input type="text" id="name" name="username" placeholder="Username" />
    <input type="password" id="password" name="password" placeholder="Password" />
    <input name="submit" type="submit" value="Login" />
    
<span><?php echo $error; ?></span>
  </form>
</div>
    



</body>
</html>