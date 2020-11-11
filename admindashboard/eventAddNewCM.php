<?php
include('session.php');
?>
<?php

$var1 = $_GET['value'];
 
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
  <form action="uploadCM.php" method="post" enctype="multipart/form-data">
    
      <select name="role">
  <option value="Patron">Patron</option>
  <option value="Co-Patron">Co-Patron</option>
  <option value="Chair Person">Chair Person</option>
  <option value="Guest Advisor">Guest Advisor</option>
  <option value="International General Chair & Convenor">International General Chair & Convenor</option>
  <option value="Advisor-In-Chief">Advisor-In-Chief</option>
  <option value="Nodel Center Chair">Nodel Center Chair</option>
  <option value="Secretary">Secretary</option>
  <option value="Joint Secretary">Joint Secretary</option>
  <option value="Co-Ordinator">Co-Ordinator</option>
  <option value="Organizing Chair">Organizing Chair</option>
  <option value="Liasion Officer">Liasion Officer</option>
  <option value="Committee Chair">Committee Chair</option>
  <option value="Special Session Chair">Special Session Chair</option>
  <option value="Best Paper Chair">Best Paper Chair</option>
  <option value="Publicity Chair">Publicity Chair</option>
  <option value="International Technical Committee">International Technical Committee</option>

</select>
        <input type="hidden" id="var1" name="var1" value="<?php echo $var1 ?>" />

    <input style="width:45%;float:left" type="text" id="fisrtname" name="firstname" placeholder="First Name"  required/>
     <input style="width:45%; float:right" type="text" id="lastname" name="lastname" placeholder="Last Name" required/>

    <input type="text" id="affliation" name="affliation" placeholder="Affliation" required/>
       <input type="file" name="file">
    <input name="submit" type="submit" value="Login" />
<br><br>
      <h5><b>Note:</b> &nbsp; Please choose the .jpg or .png images</h5>
  </form>
</div>
    



</body>
</html> 