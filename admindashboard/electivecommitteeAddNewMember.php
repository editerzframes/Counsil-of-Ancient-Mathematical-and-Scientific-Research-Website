<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="http://localhost/gulbir/admindashboard/electivecommitteestyle.css" rel="stylesheet" type="text/css">
</head>
<body>

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~SECOND HEADER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->
  <div id="top-text">
    <img class="logo floatLeft" alt="Logo"  />
      
    <h1 class="textheader2 textheader2-1size" style="text-align:left">SOFT COMPUTING RESEARCH SOCIETY</h1>
    <h2 class="textheader2 textheader2-2size" style="text-align:left">Registered under the societies registration act XXI of 1860</h2>
    </div>

<!--    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<button style="margin-left:30px; margin-top:30px; float:left" class="button" onClick="parent.location='http://localhost/gulbir/admindashboard/profile.php'">Back ></button>

    <button style="margin-right:30px; margin-top:30px; float:right" class="button" onClick="parent.location='http://localhost/gulbir/admindashboard/logout.php'">Logout</button>
    
    
<div class="form-style-8">
  <h2>Enter the Following Details</h2>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    
      <select name="role">
  <option value="President">President</option>
  <option value="Vice President">Vice President</option>
  <option value="Secretary">Secretary</option>
  <option value="Treasurer">Treasurer</option>
  <option value="Team Members">Team Members</option>
</select>
      
    <input style="width:45%;float:left" type="text" id="fisrtname" name="firstname" placeholder="First Name"  required/>
     <input style="width:45%; float:right" type="text" id="lastname" name="lastname" placeholder="Last Name" required/>

    <input type="text" id="affliation" name="affliation" placeholder="Affliation" required/>
          <textarea placeholder="Biography" id="biography" name="biography" onkeyup="adjust_textarea(this)" required></textarea>
       <input type="file" name="file">
    <input name="submit" type="submit" value="Login" />
<br><br>
      <h5><b>Note:</b> &nbsp; Please choose the .jpg or .png images</h5>
  </form>
</div>
    



</body>
</html> 