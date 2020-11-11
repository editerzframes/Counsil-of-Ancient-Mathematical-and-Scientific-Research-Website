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
  <li><a href="http://localhost/gulbir/ElectiveCommittee.php">EXECUTIVE COMMITTEE</a></li>
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
    
    
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~SOCIAL MEDIA AND SLIDESHOW~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div style="background-color:#262626">

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="http://localhost/gulbir/mishra1/slide_2.jpg" >
<!--  <div class="text">Caption Text</div>-->
</div>

<div class="mySlides fade">
  <img src="http://localhost/gulbir/mishra1/slide_5.jpg" >
<!--  <div class="text">Caption Two</div>-->
</div>

<div class="mySlides fade">
  <img src="http://localhost/gulbir/mishra1/slide_3.jpg" >
<!--  <div class="text">Caption Three</div>-->
</div>

    <div class="mySlides fade">
  <img src="http://localhost/gulbir/mishra1/slide_6.jpg" >
<!--  <div class="text">Caption Three</div>-->
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
    <span class="dot"></span> 
</div>

<div class="icon-bar">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="#" class="google"><i class="fa fa-google"></i></a> 
</div>
        
    </div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~CARD VIEW~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="cardview">
    <div class="row-cardview">

    <div class="column-cardview" style="width:5%">
        
        </div>
        
  <div class="column-cardview" style="width:22%">
  <div class="card" style="margin-top:20px">
  <img src="http://localhost/gulbir/mishra1/IMG_2819.jpg" alt="Avatar" style="width:100%; height:150px">
  <div class="container">
    <h4 class="heading-cardview"><b>WHO WE ARE</b></h4> <hr class="hr-cardview"> 
    <p class="para-cardview">To promote research in soft computing and allied areas, Soft Computing Research Society (SCRS) is established in 2013 with its headquarter in Delhi, India. Soft Computing Research Society is a non-profit, scientific swarm of the institutions / labs / researchers / scientists / academicians / research scholars / students / industry R & D persons interested in soft computing.</p> 
  </div>
</div>
      
      <div class="card" style="margin-top:20px">
  <img src="http://localhost/gulbir/mishra1/IMG_2731.jpg" alt="Avatar" style="width:100%; height:150px">
  <div class="container">
    <h4 class="heading-cardview"><b>GET INVOLVED</b></h4> <hr class="hr-cardview"> 
    <p class="para-cardview">Apply here to join SCRS
</p> 
  </div>
</div>
      
            <div class="card" style="margin-top:20px">
  <img src="http://localhost/gulbir/mishra1/workshopsandconference.png" alt="Avatar" style="width:100%; height:150px">
  <div class="container">
    <h4 class="heading-cardview"><b>WORKSHOPS AND CONFERENCES</b></h4> <hr class="hr-cardview"> 
    <p class="para-cardview">Workshops and Conferences
</p> 
  </div>
</div>
      
  </div>
    
  <div class="column-cardview" style="width:46%">
      
      <?php
    include ('dbConfig.php');
    
$sql = "SELECT EventID, eventheading, eventabout, eventfile_name, eventuploaded_on FROM events ORDER BY eventuploaded_on DESC LIMIT 6";
$result = $db->query($sql);

?>
      
     <div class="card" style="margin-top:20px" >
  <div class="container">
    <h4 class="heading-cardview"><b>LATEST NEWS</b></h4> <hr class="hr-cardview"> 
<span id="rainbow" style="font-size:12px">NEW</span>
  <?php    
      if ($result->num_rows > 0) {
    

    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'http://localhost/gulbir/admindashboard/uploadevent/'.$row["eventfile_name"];
        $update = 'updatefun()';
        $rcorners1 = 'rcorners1';
        $h5_cardview = 'h5-cardview';
        $parah5_cardview = 'parah5-cardview';
        $hrh5_cardview = 'hrh5-cardview';
        $style = 'width:150px; height:100px; float:right';
        $style1 = 'float:left';
        
        echo "<div id='".$rcorners1."'>
        <img src='".$imageURL."' style='".$style."'>
      <h5 class='".$h5_cardview."' style='".$style1."'>" . $row["eventheading"]. "</h5><br><br>
      <p class='".$parah5_cardview."'>" . $row["eventuploaded_on"]. "</p>
      <p class='".$parah5_cardview."'>" . $row["eventabout"]. "</p>
      <button id='" .$row["EventID"]. "' onclick='".$update."'>Open</button>
      </div> 
      
      <br><hr class='".$hrh5_cardview."'><br>";
                
    }
} else {
    echo "0 results";
}
?>
      
<script>
    function updatefun(){
    var e = window.event,
        btn = e.target || e.srcElement;
    var id = btn.id;
     window.location = "http://localhost/gulbir/events/eventpage.php?value="+id;
}
</script>  

-->
      <div style="overflow:hidden">
           <h4 class="heading-cardview" style="float:right; font-size:12px"><b>See all</b></h4>  </div>
  
  </div>
</div>
     
       <div class="card" style="margin-top:20px" >
  <div class="container">
    <h4 class="heading-cardview"><b>QUICK LINKS</b></h4> <hr class="hr-cardview"> 
<p class="para-cardview" >Pay Membership Fee Online  Pay Online (via PAYTM).  No Charges</p>
  <p class="para-cardview"> Pay Online (Via Payumoney).  In this mode of payment, 2% + taxes will be charged by payumoney</p> 
<p class="para-cardview">Academic Event Sponsorship Form</p>
<p class="para-cardview">Travel Grant Form</p>
<p class="para-cardview">Registration Grant Form</p>
  </div>
</div>
     
  </div>
    
  <div class="column-cardview" style="width:22%">
   <div class="card" style="margin-top:20px; height:250px">
  <div class="container">
    <h4 class="heading-cardview"><b>JOIN US</b></h4> <hr class="hr-cardview"> 
    <p class="para-cardview">To join SCRS follow the steps listed below: </p> 
<ol><p>
  <li class="para-cardview">Register by clicking the register link given at the top right corner of the website.</li>
  <li class="para-cardview">Verify the email by clicking the link sent to your registered email ID.</li>
  <li class="para-cardview">Login and apply</li>
</p></ol>
      
  </div>
</div>
      
      <div class="card" style="margin-top:20px; height:250px" >
  <div class="container">
    <h4 class="heading-cardview"><b>WHAT WE DO</b></h4> <hr class="hr-cardview"> 
 <img src="http://localhost/gulbir/mishra1/Title.jpg" alt="Avatar" style="width:100%; height:150px">
  </div>
</div>
      
  </div>
    
 <div class="column-cardview" style="width:5%">
        
        </div>

    
</div>
    </div>

    <script type="text/javascript">
// <![CDATA[
var speed=100; // speed colours change, 1 second = 1000
var glow=3; // can be set from '0' for no glow, to 10
var raincol=new Array("#ff0000", "#ff5500", "#ffaa00", "#ffff00", "#aaff00", "#55ff00", "#00ff00", "#00ff55", "#00ffaa", "#00ffff", "#00aaff", "#0055ff", "#0000ff", "#5500ff", "#aa00ff", "#ff00ff", "#ff00aa", "#ff0055"); // change the colours if you want to
var alink="http://www.mf2fm.com/rv/"; // page to link text to (set to ="" for no link)

/****************************
*    Rainbow Text Effect    *
*(c)2003-13 mf2fm web-design*
*  http://www.mf2fm.com/rv  *
* DON'T EDIT BELOW THIS BOX *
****************************/
var rainbow, raintxt, raincnt=0;

function addLoadEvent(funky) {
  var oldonload=window.onload;
  if (typeof(oldonload)!='function') window.onload=funky;
  else window.onload=function() {
    if (oldonload) oldonload();
    funky();
  }
}

addLoadEvent(regenbogen);

function regenbogen() { if (document.getElementById) {
  var i, rainbeau;
  rainbow=document.getElementById("rainbow");
  raintxt=rainbow.firstChild.nodeValue;
  while (rainbow.childNodes.length) rainbow.removeChild(rainbow.childNodes[0]);
  for (i=0; i<raintxt.length; i++) {
    rainbeau=document.createElement("span");
    rainbeau.setAttribute("id", "rain"+i);
    rainbeau.appendChild(document.createTextNode(raintxt.charAt(i)));
    if (alink) {
      rainbeau.style.cursor="pointer";
      rainbeau.onclick=function() { top.location.href=alink; }
    }
    rainbow.appendChild(rainbeau);
  }
  rainbow=setInterval ("raining()", speed);
}}

function raining() {
  var i, c;
  for (i=0; i<raintxt.length; i++) {
    c=raincol[(i+raincnt)%raincol.length];
    document.getElementById("rain"+i).style.color=c;
	if (glow) document.getElementById("rain"+i).style.textShadow=c+" 0px 0px "+glow+"px";
  }
  raincnt++;
}
// ]]>
</script>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    
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