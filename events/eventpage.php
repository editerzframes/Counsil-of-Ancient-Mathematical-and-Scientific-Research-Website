<?php

$var1 = $_GET['value'];
 
     include ('dbConfig.php');
    
$sql = "SELECT EventID, eventheading, eventabout, eventfile_name FROM events WHERE EventID='".$var1."'";
$result = $db->query($sql);

$row = $result->fetch_assoc();
$eventheading = $row["eventheading"];
$eventabout = $row["eventabout"];
$imageURL = 'http://localhost/gulbir/admindashboard/uploadevent/'.$row["eventfile_name"];

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
    
    <h1 class=" textheader2-1size" style="text-align:center;font-weight:bold;margin-top:50px"><?php echo $eventheading ?></h1>
  
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

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~CARD VIEW~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="cardview">
    <div class="row-cardview">

    <div class="column-cardview" style="width:5%">
        
        </div>
        
  <div class="column-cardview" style="width:22%">
<div class="vertical-menu" style="margin-top:20px">
  <a onclick='show_more_menu()'>Committees</a><hr>
  <a onclick='show_more_menu2()'>Keynote Speakers</a><hr>
  <a onclick='show_more_menu3()'>Important Downloads</a><hr>
  <a href="http://localhost/gulbir/events/eventRegistrationFee.php">Registration Fee Details</a><hr>
  <a href="http://localhost/gulbir/events/eventConference.php">Conference Procedure</a><hr>
  <a href="http://localhost/gulbir/events/eventArticlePublication.php">Article Publication</a><hr>
  <a href="http://localhost/gulbir/events/eventArticleSubmission.php">Article Submission</a><hr>
  <a href="http://localhost/gulbir/events/eventRegistration.php">Registration</a><hr>
  <a href="http://localhost/gulbir/events/eventImportantDates.php">Important Dates</a><hr>
  <a href="http://localhost/gulbir/events/eventAwards.php">Awards</a><hr>
  <a onclick='show_more_menu5()'>Photo Gallery</a><hr>
  <a onclick='show_more_menu4()'>Sponsers</a><hr>

</div> 
      
  </div>
        
        
<script>
    function show_more_menu(){
        var id = <?php echo $var1 ?>;
        window.location = "http://localhost/gulbir/events/eventCommittees.php?value="+id;
    }
    function show_more_menu2(){
        var id = <?php echo $var1 ?>;
        window.location = "http://localhost/gulbir/events/eventKeynote.php?value="+id;
    }
    function show_more_menu4(){
        var id = <?php echo $var1 ?>;
        window.location = "http://localhost/gulbir/events/eventSponsers.php?value="+id;
    }
    function show_more_menu3(){
        var id = <?php echo $var1 ?>;
        window.location = "http://localhost/gulbir/events/eventDownload.php?value="+id;
    }
      function show_more_menu5(){
        var id = <?php echo $var1 ?>;
        window.location = "http://localhost/gulbir/events/eventPhotoGallery.php?value="+id;
    }
        </script>
    
  <div class="column-cardview" style="width:46%">
           <div class="card" style="margin-top:20px" >
               <img src="<?php echo $imageURL ?>" width="100%"> </div>
    <h4 class="heading-cardview" style="font-size:18px"><b><?php echo $eventheading ?></b></h4> <hr class="hr-cardview"> 
     <div class="card" style="margin-top:20px" >
  <div class="container">
    <h4 class="heading-cardview"><b>About the Event</b></h4> <hr class="hr-cardview"> 
<p class="para-cardview" ><?php echo $eventabout ?></p>

  
  </div>
</div>
     

     
  </div>
    
  <div class="column-cardview" style="width:22%">
   <div class="card" style="margin-top:20px; height:350px">
  <div class="container">
    <h4 class="heading-cardview"><b>Important Dates</b></h4> <hr class="hr-cardview"> 
<ol><p>
  <li class="para-cardview">Last Date of paper Submission: May 15, 2019</li>
  <li class="para-cardview">Notification of acceptance: June 15, 2019 (Earlier Submitted papers' authors will be notified by May 15 2019)</li>
  <li class="para-cardview">Camera-ready submission of accepted papers: June 30, 2019</li>
<li class="para-cardview">Special Session Proposal: May 10, 2019</li>
<li class="para-cardview">Tutorial Proposal: May 30, 2019</li>
<li class="para-cardview">Registration of accepted papers: June 30, 2019</li>
<li class="para-cardview">Conference Date: September 02-04, 2019</li>
</p></ol>
      
  </div>
</div> 
      
      
     <div class="card" style="margin-top:20px; height:170px">
  <div class="container">
    <h4 class="heading-cardview"><b>Awards</b></h4> <hr class="hr-cardview"> 
<ol><p>
  <li class="para-cardview">Best Student Paper (Session Wise)</li>
  <li class="para-cardview">Best Innovative Paper</li>
  <li class="para-cardview">Best Doctoral Thesis</li>
<li class="para-cardview">Best Application Paper</li>
</p></ol>
      
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