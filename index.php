<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header('Location: http://localhost/gulbir/profile.php/');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>DISTRICT TALENT SEARCH EXAM 2019</title>
<link href="http://localhost/gulbir/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
   
     <div id="top-text">
    <img class="logo floatLeft" alt="Logo"  />
    <img class="logo1 floatRight" alt="Logo" />
          
    <h1 style="text-align:center">DISTRICT TALENT SEARCH EXAM 2019</h1>
    <h2 style="text-align:center">PRIVATE SCHOOL ASSOCIATION, SITAMARHI</h2>
    </div>

<div id="main">
    
   
<div id="login">
<h2>Enter the details</h2>
    <br>
    
<form action="" method="post">
<label><b>Registration Number :</b> </label>
<input id="Reg" name="Reg" placeholder="registration no." type="text">
<label><b>Class :</b></label>
<input id="Class" name="Class" placeholder="Class no." type="text">
<input name="submit" type="submit" value=" Submit ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
    <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br> <br>
    
<div class="footer">
  <h3> Solution by: Cybaware</h3>
</div>
</body>
</html>