<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="http://localhost/gulbir/admindashboard/style.css" rel="stylesheet" type="text/css">
</head>
<body>

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~SECOND HEADER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->
  <div id="top-text">
    <img class="logo floatLeft" alt="Logo"  />
      
    <h1 class="textheader2 textheader2-1size" style="text-align:left">SOFT COMPUTING RESEARCH SOCIETY</h1>
    <h2 class="textheader2 textheader2-2size" style="text-align:left">Registered under the societies registration act XXI of 1860</h2>
    </div>

<!--    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
 
<button class="button" onClick="parent.location='http://localhost/gulbir/admindashboard/AddNewEvent.php'"> Add a new Event</button>
    
<button class="button" onClick="parent.location='http://localhost/gulbir/admindashboard/eventUpdateOrDeleteEvent.php'"> Update or Delete a Event </button>
    
<button class="button" onClick="parent.location='http://localhost/gulbir/admindashboard/eventAddCMSelectevent.php'"> Add a Committee Member </button>
     
<button class="button" onClick="parent.location='http://localhost/gulbir/admindashboard/eventUpdateOrDeleteCMSelectEvent.php'"> Update or Delete a Committee Member </button>

<button class="button" onClick="parent.location='http://localhost/gulbir/admindashboard/eventAddKSSelectevent.php'"> Add a new Keynote Speaker </button>
    
<button class="button" onClick="parent.location='http://localhost/gulbir/admindashboard/eventUpdateOrDeleteKSSelectevent.php'"> Update or Delete a Keynote Speaker </button>
    
<button class="button" onClick="parent.location='http://localhost/gulbir/admindashboard/eventAddDonwloadSelectevent.php'"> Add Downloads </button>

    <button class="button" onClick="parent.location='http://localhost/gulbir/admindashboard/eventUpdateOrDeleteDSelectevent.php'"> Update or Delete a Downloads </button>

    
<button class="button" onClick="parent.location='http://localhost/gulbir/admindashboard/eventAddPhotoGallerySelectevent.php'"> Add Photos </button>
    
<button class="button" onClick="parent.location='http://localhost/gulbir/admindashboard/eventUpdateOrDeletePGSelectevent.php'"> Update or Delete a Photo </button>

<button class="button" onClick="parent.location='http://localhost/gulbir/admindashboard/eventAddSponserSelectevent.php'"> Add Sponser</button>
    
<button class="button" onClick="parent.location='http://localhost/gulbir/admindashboard/eventUpdateOrDeleteSSelectevent.php'"> Update or Delete a Sponser </button>
    </body>
</html> 