

<!DOCTYPE html>
<html>
<head>
<title>DISTRICT TALENT SEARCH EXAM 2019</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="http://localhost/gulbir/mainstyle.css" rel="stylesheet" type="text/css" />
    
</head>
<body>

<!--    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~HEADLINE AND DROP DOWN LIST~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="headline">
    <img src="http://localhost/gulbir/mishra1/mail.png" alt="mail" style="width:15px;height:15px;"> contact@scrs.in, jcbansal@scrs.in 
        
        <img src="http://localhost/gulbir/mishra1/phone.png" alt="mail" style="width:15px;height:15px;"> 
        +91- 11 - 24195298, +91-9582052201
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">--- list of colobrators ---</button>
        <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="#about">About</a>
    <a href="#base">Base</a>
    <a href="#blog">Blog</a>
    <a href="#contact">Contact</a>
    <a href="#custom">Custom</a>
    <a href="#support">Support</a>
    <a href="#tools">Tools</a>
  </div>
        </div>
    </div>
    
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    
    
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~SECOND HEADER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->
  <div id="top-text">
    <img class="logo floatLeft" alt="Logo"  />
      <button class="header2button header2button-register">Register</button>
       <button class="header2button header2button-login">Login</button>
    <h1 class="textheader2 textheader2-1size" style="text-align:left">SOFT COMPUTING RESEARCH SOCIETY</h1>
    <h2 class="textheader2 textheader2-2size" style="text-align:left">Registered under the societies registration act XXI of 1860</h2>
    </div>

<!--    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~MENU BAR~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ul>
    
  <li style="margin-left:20px"><a class="active" href="#home">HOME</a></li>
  <li class="hover-dropdown"><a href="#news">ABOUT</a>
        <div class="sub-dropdown">
      <a href="#">ABOUT SCRS</a><hr>
      <a href="#">ABOUT LOGO</a><hr>
      <a href="#">OBJECTIVES</a><hr>
    </div>
        </li>
  <li><a href="#contact">EXECUTIVE COMMITTEE</a></li>
  <li><a href="#about">EVENTS</a></li>
  <li class="hover-dropdown"><a href="#home">SCRS MEMBERSHIP</a>
        <div class="sub-dropdown">
      <a href="#">WHY JOIN SCRS</a><hr>
      <a href="#">SCRS MEMBERSHIP</a><hr>
    </div>
        </li>
  <li><a href="#news">SPONSERSHIP</a></li>
  <li><a href="#contact">AWARDS</a></li>
  <li><a href="#about">SOCPROS</a></li>
  <li><a href="#about">CONTACT US</a></li>
<li><div class="input-group">
<form action="http://www.google.com/search" class="navbar-form navbar-left" method="get" name="searchform" target="_blank">
<input name="sitesearch" type="hidden" value="">
<input autocomplete="on" class="form-controls search" name="q" placeholder="Google Search" required="required" type="text">
<button class="class-button" type="submit">Search</button>
 </form></div>
        </li>
</ul>

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    
    
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~SOCIAL MEDIA~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  
<div class="icon-bar">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="#" class="google"><i class="fa fa-google"></i></a> 
</div>
       

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~INSIDE CONTENT~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <button id="active" style="margin-left:30px; margin-top:30px" class="button" onclick="myFunction()">President</button>  

        <button id="active1" style="margin-left:30px; margin-top:30px" class="button" onclick="myFunction2()">Vice President</button>  

        <button id="active2" style="margin-left:30px; margin-top:30px" class="button" onclick="myFunction3()">Secretary</button>  

        <button id="active3" style="margin-left:30px; margin-top:30px" class="button" onclick="myFunction4()">Treasurer</button>  

        <button id="active4" style="margin-left:30px; margin-top:30px" class="button" onclick="myFunction5()">Team Members</button>  


<div id="myDIV">
<?php
    include ('dbConfig.php');
    
$sql = "SELECT id, role, firstName, lastName, affliation, biography, file_name FROM electivecommittee WHERE role IN('President') ";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Profile Photo</th><th> Name</th><th>Role</th><th>Affliation</th><th>Biography</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'admindashboard/uploads/'.$row["file_name"];
        
        echo "<tr><td>" . $row["id"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td> 
        <td>" . $row["biography"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?></div>

<div id="myDIV2">
<?php
    include ('dbConfig.php');
    
$sql = "SELECT id, role, firstName, lastName, affliation, biography, file_name FROM electivecommittee WHERE role IN('Vice President') ";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Profile Photo</th><th> Name</th><th>Role</th><th>Affliation</th><th>Biography</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'admindashboard/uploads/'.$row["file_name"];
        
        echo "<tr><td>" . $row["id"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td> 
        <td>" . $row["biography"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?></div>
    
<div id="myDIV3">
<?php
    include ('dbConfig.php');
    
$sql = "SELECT id, role, firstName, lastName, affliation, biography, file_name FROM electivecommittee WHERE role IN('Secretary') ";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Profile Photo</th><th> Name</th><th>Role</th><th>Affliation</th><th>Biography</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'admindashboard/uploads/'.$row["file_name"];
        
        echo "<tr><td>" . $row["id"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td> 
        <td>" . $row["biography"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
    </div>
    
<div id="myDIV4">
<?php
    include ('dbConfig.php');
    
$sql = "SELECT id, role, firstName, lastName, affliation, biography, file_name FROM electivecommittee WHERE role IN('Treasurer') ";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Profile Photo</th><th> Name</th><th>Role</th><th>Affliation</th><th>Biography</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'admindashboard/uploads/'.$row["file_name"];
        
        echo "<tr><td>" . $row["id"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td> 
        <td>" . $row["biography"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
    </div>
    
<div id="myDIV5">
<?php
    include ('dbConfig.php');
    
$sql = "SELECT id, role, firstName, lastName, affliation, biography, file_name FROM electivecommittee WHERE role IN('Team Members') ";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Profile Photo</th><th> Name</th><th>Role</th><th>Affliation</th><th>Biography</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'admindashboard/uploads/'.$row["file_name"];
        
        echo "<tr><td>" . $row["id"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td> 
        <td>" . $row["biography"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
    </div>
    
<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
    var z = document.getElementById("myDIV3");
  var p = document.getElementById("myDIV4");
  var q = document.getElementById("myDIV5");
var ac = document.getElementById("active");
var ac1 = document.getElementById("active1");
var ac2 = document.getElementById("active2");
var ac3 = document.getElementById("active3");
var ac4 = document.getElementById("active4");


  y.style.display = "none";
  z.style.display = "none";
  p.style.display = "none";
  q.style.display = "none";
  
  if (x.style.display == "block") {
    x.style.display = "none";
    ac.style.opacity = "2.0";
  } else {
    x.style.display = "block";
     ac.style.opacity = "0.5";
     ac1.style.opacity = "2.0";
     ac2.style.opacity = "2.0";
     ac3.style.opacity = "2.0";
     ac4.style.opacity = "2.0";

  }
}

function myFunction2() {
  var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
   var z = document.getElementById("myDIV3");
  var p = document.getElementById("myDIV4");
  var q = document.getElementById("myDIV5");
  var ac = document.getElementById("active");
var ac1 = document.getElementById("active1");
var ac2 = document.getElementById("active2");
var ac3 = document.getElementById("active3");
var ac4 = document.getElementById("active4");
  
  x.style.display = "none";
   z.style.display = "none";
  p.style.display = "none";
  q.style.display = "none";
  
  if (y.style.display == "block") {
    y.style.display = "none";
    ac1.style.opacity = "2.0";
  } else {
    y.style.display = "block";
    ac.style.opacity = "2.0";
     ac1.style.opacity = "0.5";
     ac2.style.opacity = "2.0";
     ac3.style.opacity = "2.0";
     ac4.style.opacity = "2.0";
  }
}

function myFunction3() {
  var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
   var z = document.getElementById("myDIV3");
  var p = document.getElementById("myDIV4");
  var q = document.getElementById("myDIV5");
  var ac = document.getElementById("active");
var ac1 = document.getElementById("active1");
var ac2 = document.getElementById("active2");
var ac3 = document.getElementById("active3");
var ac4 = document.getElementById("active4");
  
  x.style.display = "none";
   y.style.display = "none";
  p.style.display = "none";
  q.style.display = "none";
  
  if (z.style.display == "block") {
    z.style.display = "none";
    ac2.style.opacity = "2.0";
  } else {
    z.style.display = "block";
    ac.style.opacity = "2.0";
     ac1.style.opacity = "2.0";
     ac2.style.opacity = "0.5";
     ac3.style.opacity = "2.0";
     ac4.style.opacity = "2.0";
  }
}


function myFunction4() {
  var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
   var z = document.getElementById("myDIV3");
  var p = document.getElementById("myDIV4");
  var q = document.getElementById("myDIV5");
  var ac = document.getElementById("active");
var ac1 = document.getElementById("active1");
var ac2 = document.getElementById("active2");
var ac3 = document.getElementById("active3");
var ac4 = document.getElementById("active4");
  
  x.style.display = "none";
   z.style.display = "none";
  y.style.display = "none";
  q.style.display = "none";
  
  if (p.style.display == "block") {
    p.style.display = "none";
    ac3.style.opacity = "2.0";
  } else {
    p.style.display = "block";
    ac.style.opacity = "2.0";
     ac1.style.opacity = "2.0";
     ac2.style.opacity = "2.0";
     ac3.style.opacity = "0.5";
     ac4.style.opacity = "2.0";
  }
}


function myFunction5() {
  var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
   var z = document.getElementById("myDIV3");
  var p = document.getElementById("myDIV4");
  var q = document.getElementById("myDIV5");
  var ac = document.getElementById("active");
var ac1 = document.getElementById("active1");
var ac2 = document.getElementById("active2");
var ac3 = document.getElementById("active3");
var ac4 = document.getElementById("active4");
  
  x.style.display = "none";
   z.style.display = "none";
  p.style.display = "none";
  y.style.display = "none";
  
  if (q.style.display == "block") {
    q.style.display = "none";
    ac4.style.opacity = "2.0";
  } else {
    q.style.display = "block";
     ac.style.opacity = "2.0";
     ac1.style.opacity = "2.0";
     ac2.style.opacity = "2.0";
     ac3.style.opacity = "2.0";
     ac4.style.opacity = "0.5";
    
  }
}
</script>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~FOOTER 2~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="footer2">
    
<div class="row">

     <div class="column" style="width:6%">
    </div>
    
  <div class="column" style="width:22%">
  <h1 class="heading">ABOUT SCRS</h1><hr class="linehr">
  <p class="para">To promote research in soft computing and allied areas, Soft Computing Research Society (SCRS) is established in 2013 with its headquarter in Delhi, India. <a href="#" > Read More... </a> </p>
  </div>
    
  <div class="column" style="width:22%">
  <h1 class="heading">NEWSLETTER SUBSCRIBE</h1><hr class="linehr">
  <p class="para">Email Address:</p>
  <form action="search.php" method="post" class="index-search-form">
  <input name="search" type="text" placeholder="What are you looking for?">
  <button name="submit" class="" type="submit">Search</button>
</form>
    <p class="para">Follow Us!</p>
     
  </div>
    
  <div class="column" style="width:22%">
  <h1 class="heading">CONTACT US</h1><hr  class="linehr">
  <p class="para"><i class="fa fa-map-marker"></i>   &nbsp;&nbsp; Soft Computing Research Society Room No. 327, Akbar BhawanChankyapuri New Delhi – 110021. </p>
      <p class="para"><i class="fa fa-envelope-o"></i> &nbsp;&nbsp; contact@scrs.in, jcbansal@scrs.in </p>
<p class="para"> <i class="fa fa-phone"></i> &nbsp;&nbsp; +91- 11 - 24195298, +91-9582052201</p>
  </div>
    
  <div class="column" style="width:22%">
  <h1 class="heading">USE FULL LINKS</h1><hr class="linehr">
  <p class="para">Home</p>
      <p class="para">About</p>
      <p class="para">Events</p>
      <p class="para">Join SCRS</p>
      <p class="para">Awards</p>
      <p class="para">Gallery</p>
      <p class="para">Contact Us</p>
      <p class="para">Give to SCRS</p>
  </div>

    <div class="column" style="width:6%">
    </div>
</div>
</div>
    
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~LAST FOOTER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="footer">
  <div class="w3-row-padding">
  <div class="w3-third" style="text-align:left; margin-left:20px">
    <p>All Rights Reserved - @2018 Soft Computing Research Society</p>
    <p>Designed And Developed By - Webdesigning2u.com</p>
  </div>

  
  <div class="w3-third" style="float:right">
    <p>Access Webmail | Last Updated on Jan. 2019 | Hit Counter: 279994</p>
  </div>
</div>
</div>
    
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
</body>
</html>