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
    
  

<div id="myDIVevent">
<?php
    include ('dbConfig.php');
    

$sql = "SELECT EventID, eventheading, eventabout, eventfile_name, eventuploaded_on FROM events ORDER BY eventuploaded_on DESC ";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Event Photo</th><th>Event Name</th><th>About</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'uploads/'.$row["eventfile_name"];
        $update = 'updatefun()';
       
        echo "<tr><td>" . $row["EventID"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["eventheading"]. "</td> 
        <td>" . $row["eventabout"]. "</td> 
        <td>  <button id='" .$row["EventID"]. "' onclick='".$update."'>Select</button>  </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

    mysqli_close($db);

?>
   
    </div>
  <script>
 
function updatefun(){
    var e = window.event,
        btn = e.target || e.srcElement;
    var id = btn.id;
     window.location = "eventUpdateOrDeletePG.php?value="+id;
}
</script>
</body>
</html> 