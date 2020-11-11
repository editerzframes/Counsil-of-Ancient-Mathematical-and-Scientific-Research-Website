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
    
    <br><br><br><br>
       
  

<div id="myDIVevent">
<?php
    include ('dbConfig.php');
    

$sql = "SELECT dID, title, description, dfile_name, duploaded_on FROM d WHERE EventID ='".$var1."' ORDER BY duploaded_on DESC ";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Keynote Speaker Photo</th><th>Name</th><th>Affliation</th><th>Biography</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'uploadCM/'.$row["dfile_name"];
        $update = 'updatefun()';
       $delete ='myown()';
        
        echo "<tr><td>" . $row["dID"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["title"]. "</td> 
        <td>" . $row["description"]. "</td> 
         <td>  <button id='" .$row["dID"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["dID"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

    mysqli_close($db);

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
    
    window.location = "eventDeleteD.php?value="+clicked_id;
    
   
}
 
function updatefun(){
    var e = window.event,
        btn = e.target || e.srcElement;
    var id = btn.id;
     window.location = "eventUpdateD.php?value="+id;
}
</script>

  
</body>
</html> 