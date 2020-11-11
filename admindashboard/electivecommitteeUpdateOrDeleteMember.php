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
    
    <br><br><br><br>
        <button id="active" style="margin-left:30px; margin-top:30px;  width: 150px" class="button" onclick="myFunction()">President</button>  

        <button id="active1" style="margin-left:30px; margin-top:30px;  width: 150px" class="button" onclick="myFunction2()">Vice President</button>  

        <button id="active2" style="margin-left:30px; margin-top:30px;  width: 150px" class="button" onclick="myFunction3()">Secretary</button>  

        <button id="active3" style="margin-left:30px; margin-top:30px;  width: 150px" class="button" onclick="myFunction4()">Treasurer</button>  

        <button id="active4" style="margin-left:30px; margin-top:30px;  width: 150px" class="button" onclick="myFunction5()">Team Members</button>  

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
         $imageURL = 'uploads/'.$row["file_name"];
        $update = 'updatefun()';
        $delete ='myown()';
        
        echo "<tr><td>" . $row["id"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td> 
        <td>" . $row["biography"]. "</td>
        <td>  <button id='" .$row["id"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["id"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
   
    </div>

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
         $imageURL = 'uploads/'.$row["file_name"];
$update = 'updatefun()';
        $delete ='myown()';
        
        echo "<tr><td>" . $row["id"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td> 
        <td>" . $row["biography"]. "</td>
        <td>  <button id='" .$row["id"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["id"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
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
         $imageURL = 'uploads/'.$row["file_name"];
$update = 'updatefun()';        $delete ='myown()';
        
        echo "<tr><td>" . $row["id"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td> 
        <td>" . $row["biography"]. "</td>
        <td>  <button id='" .$row["id"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["id"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
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
         $imageURL = 'uploads/'.$row["file_name"];
$update = 'updatefun()';        $delete ='myown()';
        
        echo "<tr><td>" . $row["id"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td> 
        <td>" . $row["biography"]. "</td>
        <td>  <button id='" .$row["id"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["id"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
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
         $imageURL = 'uploads/'.$row["file_name"];
$update = 'updatefun()';        $delete ='myown()';
        
        echo "<tr><td>" . $row["id"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td> 
        <td>" . $row["biography"]. "</td>
        <td>  <button id='" .$row["id"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["id"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
    </div>
  <script>
       
function myown() {
  var txt;
      var e = window.event,
       btn = e.target || e.srcElement;
  
  if (confirm("Press a button!")) {
    okPressed(btn.id);
  } else {
//     cancel pressed
  }
}

function okPressed(clicked_id){
    
    window.location = "delete.php?value="+clicked_id;
    
   
}
 
function updatefun(){
    var e = window.event,
        btn = e.target || e.srcElement;
    var id = btn.id;
     window.location = "electivecommitteeUpdate.php?value="+id;
}
</script>

    
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
  
  if (y.style.display == "block") {
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
  
  if (y.style.display == "block") {
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
  
  if (y.style.display == "block") {
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
</body>
</html> 