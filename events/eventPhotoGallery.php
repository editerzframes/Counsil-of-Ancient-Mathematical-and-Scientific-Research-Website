<?php

$var1 = $_GET['value'];
 
?>
<!DOCTYPE html>
<html>
<head>
<title>DISTRICT TALENT SEARCH EXAM 2019</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="http://localhost/gulbir/events/eventstyle.css" rel="stylesheet" type="text/css" />
    
</head>
<body>


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~SECOND HEADER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->
  <div id="top-text">
    <img class="logo floatLeft" alt="Logo"  />
    <img class="logo2 floatright" alt="Logo" />
    <h1 class=" textheader2-1size" style="text-align:center; color:#407e7d">8th International Conference</h1>
    <h1 class=" textheader2-1size" style="text-align:center;font-weight:bold">Soft Computing for Problem Solving - SocProS 2018</h1>
    <h2 class=" textheader2-2size" style="text-align:center;font-weight:bold;color:#407e7d">December 17-19, 2018</h2>
    <h2 class=" textheader2-2size" style="text-align:center;font-weight:bold;color:#407e7d">Vellore Institute of Technology, Tamil Nadu, India</h2>

    </div>

<!--    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~MENU BAR~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ul>
    
  <li style="margin-left:160px"><a class="active" href="#home">HOME</a></li>
  <li class="hover-dropdown"><a href="#news">ABOUT</a>        </li>
  <li><a href="http://localhost/gulbir/ElectiveCommittee.php">EXECUTIVE COMMITTEE</a></li>
  <li><a href="#about">EVENTS</a></li>
  <li class="hover-dropdown"><a href="#home">SCRS MEMBERSHIP</a></li>
  <li><a href="#news">SPONSERSHIP</a></li>
  <li><a href="#contact">AWARDS</a></li>
  <li><a href="#about">SOCPROS</a></li>
  <li><a href="#about">CONTACT US</a></li>

</ul>

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Inside Content~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    
<div id="myDIV102">
 <?php
    include ('dbConfig.php');
    
$sql = "SELECT pgID, pgfile_name, pguploaded_on FROM pg WHERE EventID ='".$var1."' ORDER BY pguploaded_on DESC ";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  
    
      while($row = $result->fetch_assoc()) {
             $imageURL = 'http://localhost/gulbir/admindashboard/uploadCM/'.$row["pgfile_name"];
    $resp = 'responsive';
    $gal = 'gallery';
    $blank = '_blank';
    $wid = '600';
    $hih = '400';
   echo" <div class='".$resp."'>
        <div class=".$gal.">
         <a target=".$blank." href=".$imageURL.">
      <img src='".$imageURL."' width=".$wid." height=".$hih.">
    </a>
  </div>
</div>";
  }
  
}
?>


<div class="clearfix"></div>
</div>
    
    <br>
    <br><br>
    <br>

 
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~LAST FOOTER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="footer">
  <div class="w3-row-padding">
  <div class="w3-third" style="text-align:left; margin-left:20px">
    <p>Copyright @ SocProS 2019</p>
  </div>

  
  <div class="w3-third" style="float:right">
    <p>Organized by VIT Vellore
</p>
  </div>
</div>
</div>
    

</body>
</html>