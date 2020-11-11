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
       
  

        <button id="active" style="margin-left:30px; margin-top:30px" class="button" onclick="myFunction()">Patron</button>  

        <button id="active1" style="margin-left:30px; margin-top:30px" class="button" onclick="myFunction2()">Co-Patron</button>  

        <button id="active2" style="margin-left:30px; margin-top:30px" class="button" onclick="myFunction3()">Chair Person</button>  

        <button id="active3" style="margin-left:30px; margin-top:30px" class="button" onclick="myFunction4()">Guest Advisor</button>  

        <button id="active4" style="margin-left:30px; margin-top:30px" class="button" onclick="myFunction5()">International General Chair and Convenor</button>  

        <button id="active5" style="margin-left:30px; margin-top:30px" class="button" onclick="myFunction6()">Advisor-In-Chief</button>  

        <button id="active6" style="margin-left:30px; margin-top:30px" class="button" onclick="myFunction7()">Nodel Center Chair</button>  

        <button id="active7" style="margin-left:30px; margin-top:30px" class="button" onclick="myFunction8()">Secretary</button>  

        <button id="active8" style="margin-left:30px; margin-top:30px" class="button" onclick="myFunction9()">Joint Secretary</button>  

        <button id="active9" style="margin-left:30px; margin-top:30px" class="button" onclick="myFunction10()">Co-Ordinator</button>  

        <button id="active10" style="margin-left:30px; margin-top:30px" class="button" onclick="myFunction11()">Organizing Chair</button>  

        <button id="active11" style="margin-left:30px; margin-top:30px" class="button" onclick="myFunction12()">Liasion Officer</button>  

        <button id="active12" style="margin-left:30px; margin-top:30px" class="button" onclick="myFunction13()">Committee Chair</button>  

        <button id="active13" style="margin-left:30px; margin-top:30px" class="button" onclick="myFunction14()">Special Session Chair</button>  

        <button id="active14" style="margin-left:30px; margin-top:30px" class="button" onclick="myFunction15()">Best Paper Chair</button>  

        <button id="active15" style="margin-left:30px; margin-top:30px" class="button" onclick="myFunction16()">Publicity Chair</button>  

        <button id="active16" style="margin-left:30px; margin-top:30px" class="button" onclick="myFunction17()">International Technical Committee</button>  

<div id="myDIV">
      <?php
    include ('dbConfig.php');
    
$sql = "SELECT cmID, role, firstName, lastName, affliation, cmfile_name FROM cm WHERE role IN('Patron') AND EventID ='".$var1."'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Profile Photo</th><th> Name</th><th>Role</th><th>Affliation</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'http://localhost/gulbir/admindashboard/uploadevent/'.$row["cmfile_name"];
        $update = 'updatefun()';
       $delete ='myown()';
        
        echo "<tr><td>" . $row["cmID"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td>
         <td>  <button id='" .$row["cmID"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["cmID"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
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
    
$sql = "SELECT cmID, role, firstName, lastName, affliation, cmfile_name FROM cm WHERE role IN('Co-Patron') AND EventID ='".$var1."'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Profile Photo</th><th> Name</th><th>Role</th><th>Affliation</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'http://localhost/gulbir/admindashboard/uploadevent/'.$row["cmfile_name"];
        $update = 'updatefun()';
       $delete ='myown()';
        
        echo "<tr><td>" . $row["cmID"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td>
         <td>  <button id='" .$row["cmID"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["cmID"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
</div>
    
<div id="myDIV3">
     <?php
    include ('dbConfig.php');
    
$sql = "SELECT cmID, role, firstName, lastName, affliation, cmfile_name FROM cm WHERE role IN('Chair Person') AND EventID ='".$var1."'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Profile Photo</th><th> Name</th><th>Role</th><th>Affliation</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'http://localhost/gulbir/admindashboard/uploadevent/'.$row["cmfile_name"];
        $update = 'updatefun()';
       $delete ='myown()';
        
        echo "<tr><td>" . $row["cmID"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td>
         <td>  <button id='" .$row["cmID"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["cmID"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
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
    
$sql = "SELECT cmID, role, firstName, lastName, affliation, cmfile_name FROM cm WHERE role IN('Guest Advisor') AND EventID ='".$var1."'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Profile Photo</th><th> Name</th><th>Role</th><th>Affliation</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'http://localhost/gulbir/admindashboard/uploadevent/'.$row["cmfile_name"];
        $update = 'updatefun()';
       $delete ='myown()';
        
        echo "<tr><td>" . $row["cmID"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td>
         <td>  <button id='" .$row["cmID"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["cmID"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
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
    
$sql = "SELECT cmID, role, firstName, lastName, affliation, cmfile_name FROM cm WHERE role IN('International General Chair & Convenor') AND EventID ='".$var1."'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Profile Photo</th><th> Name</th><th>Role</th><th>Affliation</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'http://localhost/gulbir/admindashboard/uploadevent/'.$row["cmfile_name"];
        $update = 'updatefun()';
       $delete ='myown()';
        
        echo "<tr><td>" . $row["cmID"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td>
         <td>  <button id='" .$row["cmID"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["cmID"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
</div>
    
<div id="myDIV6">
      <?php
    include ('dbConfig.php');
    
$sql = "SELECT cmID, role, firstName, lastName, affliation, cmfile_name FROM cm WHERE role IN('Advisor-In-Chief') AND EventID ='".$var1."'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Profile Photo</th><th> Name</th><th>Role</th><th>Affliation</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'http://localhost/gulbir/admindashboard/uploadevent/'.$row["cmfile_name"];
        $update = 'updatefun()';
       $delete ='myown()';
        
        echo "<tr><td>" . $row["cmID"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td>
         <td>  <button id='" .$row["cmID"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["cmID"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
</div>
    
<div id="myDIV7">
     <?php
    include ('dbConfig.php');
    
$sql = "SELECT cmID, role, firstName, lastName, affliation, cmfile_name FROM cm WHERE role IN('Nodel Center Chair') AND EventID ='".$var1."'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Profile Photo</th><th> Name</th><th>Role</th><th>Affliation</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'http://localhost/gulbir/admindashboard/uploadevent/'.$row["cmfile_name"];
        $update = 'updatefun()';
       $delete ='myown()';
        
        echo "<tr><td>" . $row["cmID"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td>
         <td>  <button id='" .$row["cmID"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["cmID"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
</div>
    
<div id="myDIV8">
     <?php
    include ('dbConfig.php');
    
$sql = "SELECT cmID, role, firstName, lastName, affliation, cmfile_name FROM cm WHERE role IN('Secretary') AND EventID ='".$var1."'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Profile Photo</th><th> Name</th><th>Role</th><th>Affliation</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'http://localhost/gulbir/admindashboard/uploadevent/'.$row["cmfile_name"];
        $update = 'updatefun()';
       $delete ='myown()';
        
        echo "<tr><td>" . $row["cmID"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td>
         <td>  <button id='" .$row["cmID"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["cmID"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
</div>
    
<div id="myDIV9">
      <?php
    include ('dbConfig.php');
    
$sql = "SELECT cmID, role, firstName, lastName, affliation, cmfile_name FROM cm WHERE role IN('Joint Secretary') AND EventID ='".$var1."'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Profile Photo</th><th> Name</th><th>Role</th><th>Affliation</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'http://localhost/gulbir/admindashboard/uploadevent/'.$row["cmfile_name"];
        $update = 'updatefun()';
       $delete ='myown()';
        
        echo "<tr><td>" . $row["cmID"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td>
         <td>  <button id='" .$row["cmID"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["cmID"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
</div>
    
<div id="myDIV10">
    <?php
    include ('dbConfig.php');
    
$sql = "SELECT cmID, role, firstName, lastName, affliation, cmfile_name FROM cm WHERE role IN('Co-Ordinator') AND EventID ='".$var1."'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Profile Photo</th><th> Name</th><th>Role</th><th>Affliation</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'http://localhost/gulbir/admindashboard/uploadevent/'.$row["cmfile_name"];
        $update = 'updatefun()';
       $delete ='myown()';
        
        echo "<tr><td>" . $row["cmID"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td>
         <td>  <button id='" .$row["cmID"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["cmID"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
</div>
    
<div id="myDIV11">
     <?php
    include ('dbConfig.php');
    
$sql = "SELECT cmID, role, firstName, lastName, affliation, cmfile_name FROM cm WHERE role IN('Organizing Chair') AND EventID ='".$var1."'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Profile Photo</th><th> Name</th><th>Role</th><th>Affliation</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'http://localhost/gulbir/admindashboard/uploadevent/'.$row["cmfile_name"];
        $update = 'updatefun()';
       $delete ='myown()';
        
        echo "<tr><td>" . $row["cmID"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td>
         <td>  <button id='" .$row["cmID"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["cmID"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
</div>
    
<div id="myDIV12">
      <?php
    include ('dbConfig.php');
    
$sql = "SELECT cmID, role, firstName, lastName, affliation, cmfile_name FROM cm WHERE role IN('Liasion Officer') AND EventID ='".$var1."'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Profile Photo</th><th> Name</th><th>Role</th><th>Affliation</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'http://localhost/gulbir/admindashboard/uploadevent/'.$row["cmfile_name"];
        $update = 'updatefun()';
       $delete ='myown()';
        
        echo "<tr><td>" . $row["cmID"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td>
         <td>  <button id='" .$row["cmID"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["cmID"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
</div>
    
<div id="myDIV13">
     <?php
    include ('dbConfig.php');
    
$sql = "SELECT cmID, role, firstName, lastName, affliation, cmfile_name FROM cm WHERE role IN('Committee Chair') AND EventID ='".$var1."'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Profile Photo</th><th> Name</th><th>Role</th><th>Affliation</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'http://localhost/gulbir/admindashboard/uploadevent/'.$row["cmfile_name"];
        $update = 'updatefun()';
       $delete ='myown()';
        
        echo "<tr><td>" . $row["cmID"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td>
         <td>  <button id='" .$row["cmID"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["cmID"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
</div>
    
<div id="myDIV14">
     <?php
    include ('dbConfig.php');
    
$sql = "SELECT cmID, role, firstName, lastName, affliation, cmfile_name FROM cm WHERE role IN('Special Session Chair') AND EventID ='".$var1."'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Profile Photo</th><th> Name</th><th>Role</th><th>Affliation</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'http://localhost/gulbir/admindashboard/uploadevent/'.$row["cmfile_name"];
        $update = 'updatefun()';
       $delete ='myown()';
        
        echo "<tr><td>" . $row["cmID"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td>
         <td>  <button id='" .$row["cmID"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["cmID"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
</div>
    
<div id="myDIV15">
      <?php
    include ('dbConfig.php');
    
$sql = "SELECT cmID, role, firstName, lastName, affliation, cmfile_name FROM cm WHERE role IN('Best Paper Chair') AND EventID ='".$var1."'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Profile Photo</th><th> Name</th><th>Role</th><th>Affliation</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'http://localhost/gulbir/admindashboard/uploadevent/'.$row["cmfile_name"];
        $update = 'updatefun()';
       $delete ='myown()';
        
        echo "<tr><td>" . $row["cmID"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td>
         <td>  <button id='" .$row["cmID"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["cmID"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
</div>
    
<div id="myDIV16">
      <?php
    include ('dbConfig.php');
    
$sql = "SELECT cmID, role, firstName, lastName, affliation, cmfile_name FROM cm WHERE role IN('Publicity Chair') AND EventID ='".$var1."'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Profile Photo</th><th> Name</th><th>Role</th><th>Affliation</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'http://localhost/gulbir/admindashboard/uploadevent/'.$row["cmfile_name"];
        $update = 'updatefun()';
       $delete ='myown()';
        
        echo "<tr><td>" . $row["cmID"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td>
         <td>  <button id='" .$row["cmID"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["cmID"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
</div>
    
<div id="myDIV17">
      <?php
    include ('dbConfig.php');
    
$sql = "SELECT cmID, role, firstName, lastName, affliation, cmfile_name FROM cm WHERE role IN('International Technical Committee') AND EventID ='".$var1."'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Profile Photo</th><th> Name</th><th>Role</th><th>Affliation</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $imageURL = 'http://localhost/gulbir/admindashboard/uploadevent/'.$row["cmfile_name"];
        $update = 'updatefun()';
       $delete ='myown()';
        
        echo "<tr><td>" . $row["cmID"]. "</td>
        <td><img src='".$imageURL."' ></td>
        <td>" . $row["firstName"]. " " . $row["lastName"]. "</td> 
        <td>" . $row["role"]. "</td> 
        <td>" . $row["affliation"]. "</td>
         <td>  <button id='" .$row["cmID"]. "' onclick='".$update."'>Update</button>  <button  id='" .$row["cmID"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
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
  var q1 = document.getElementById("myDIV6");
  var q2 = document.getElementById("myDIV7");
  var q3 = document.getElementById("myDIV8");
  var q4 = document.getElementById("myDIV9");
  var q5 = document.getElementById("myDIV10");
  var q6 = document.getElementById("myDIV11");
  var q7 = document.getElementById("myDIV12");
  var q8 = document.getElementById("myDIV13");
  var q9 = document.getElementById("myDIV14");
  var q10 = document.getElementById("myDIV15");
  var q11 = document.getElementById("myDIV16");
  var q12 = document.getElementById("myDIV17");

var ac = document.getElementById("active");
var ac1 = document.getElementById("active1");
var ac2 = document.getElementById("active2");
var ac3 = document.getElementById("active3");
var ac4 = document.getElementById("active4");
var ac41 = document.getElementById("active5");
var ac42 = document.getElementById("active6");
var ac43 = document.getElementById("active7");
var ac44 = document.getElementById("active8");
var ac45 = document.getElementById("active9");
var ac46 = document.getElementById("active10");
var ac47 = document.getElementById("active11");
var ac48 = document.getElementById("active12");
var ac49 = document.getElementById("active13");
var ac410 = document.getElementById("active14");
var ac411 = document.getElementById("active15");
var ac412 = document.getElementById("active16");


  y.style.display = "none";
  z.style.display = "none";
  p.style.display = "none";
  q.style.display = "none";
  q1.style.display = "none";
  q2.style.display = "none";
  q3.style.display = "none";
  q4.style.display = "none";
  q5.style.display = "none";
  q6.style.display = "none";
  q7.style.display = "none";
  q8.style.display = "none";
  q9.style.display = "none";
  q10.style.display = "none";
  q11.style.display = "none";
  q12.style.display = "none";

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
      ac41.style.opacity = "2.0";
      ac42.style.opacity = "2.0";
      ac43.style.opacity = "2.0";
      ac44.style.opacity = "2.0";
      ac45.style.opacity = "2.0";
      ac46.style.opacity = "2.0";
      ac47.style.opacity = "2.0";
      ac48.style.opacity = "2.0";
      ac49.style.opacity = "2.0";
      ac410.style.opacity = "2.0";
      ac411.style.opacity = "2.0";
      ac412.style.opacity = "2.0";

  }
}

function myFunction2() {
   var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
    var z = document.getElementById("myDIV3");
  var p = document.getElementById("myDIV4");
  var q = document.getElementById("myDIV5");
  var q1 = document.getElementById("myDIV6");
  var q2 = document.getElementById("myDIV7");
  var q3 = document.getElementById("myDIV8");
  var q4 = document.getElementById("myDIV9");
  var q5 = document.getElementById("myDIV10");
  var q6 = document.getElementById("myDIV11");
  var q7 = document.getElementById("myDIV12");
  var q8 = document.getElementById("myDIV13");
  var q9 = document.getElementById("myDIV14");
  var q10 = document.getElementById("myDIV15");
  var q11 = document.getElementById("myDIV16");
  var q12 = document.getElementById("myDIV17");

var ac = document.getElementById("active");
var ac1 = document.getElementById("active1");
var ac2 = document.getElementById("active2");
var ac3 = document.getElementById("active3");
var ac4 = document.getElementById("active4");
var ac41 = document.getElementById("active5");
var ac42 = document.getElementById("active6");
var ac43 = document.getElementById("active7");
var ac44 = document.getElementById("active8");
var ac45 = document.getElementById("active9");
var ac46 = document.getElementById("active10");
var ac47 = document.getElementById("active11");
var ac48 = document.getElementById("active12");
var ac49 = document.getElementById("active13");
var ac410 = document.getElementById("active14");
var ac411 = document.getElementById("active15");
var ac412 = document.getElementById("active16");

  
  x.style.display = "none";
   z.style.display = "none";
  p.style.display = "none";
  q.style.display = "none";
    q1.style.display = "none";
  q2.style.display = "none";
  q3.style.display = "none";
  q4.style.display = "none";
  q5.style.display = "none";
  q6.style.display = "none";
  q7.style.display = "none";
  q8.style.display = "none";
  q9.style.display = "none";
  q10.style.display = "none";
  q11.style.display = "none";
  q12.style.display = "none";
  
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
      ac41.style.opacity = "2.0";
      ac42.style.opacity = "2.0";
      ac43.style.opacity = "2.0";
      ac44.style.opacity = "2.0";
      ac45.style.opacity = "2.0";
      ac46.style.opacity = "2.0";
      ac47.style.opacity = "2.0";
      ac48.style.opacity = "2.0";
      ac49.style.opacity = "2.0";
      ac410.style.opacity = "2.0";
      ac411.style.opacity = "2.0";
      ac412.style.opacity = "2.0";
  }
}

function myFunction3() {
   var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
    var z = document.getElementById("myDIV3");
  var p = document.getElementById("myDIV4");
  var q = document.getElementById("myDIV5");
  var q1 = document.getElementById("myDIV6");
  var q2 = document.getElementById("myDIV7");
  var q3 = document.getElementById("myDIV8");
  var q4 = document.getElementById("myDIV9");
  var q5 = document.getElementById("myDIV10");
  var q6 = document.getElementById("myDIV11");
  var q7 = document.getElementById("myDIV12");
  var q8 = document.getElementById("myDIV13");
  var q9 = document.getElementById("myDIV14");
  var q10 = document.getElementById("myDIV15");
  var q11 = document.getElementById("myDIV16");
  var q12 = document.getElementById("myDIV17");

var ac = document.getElementById("active");
var ac1 = document.getElementById("active1");
var ac2 = document.getElementById("active2");
var ac3 = document.getElementById("active3");
var ac4 = document.getElementById("active4");
var ac41 = document.getElementById("active5");
var ac42 = document.getElementById("active6");
var ac43 = document.getElementById("active7");
var ac44 = document.getElementById("active8");
var ac45 = document.getElementById("active9");
var ac46 = document.getElementById("active10");
var ac47 = document.getElementById("active11");
var ac48 = document.getElementById("active12");
var ac49 = document.getElementById("active13");
var ac410 = document.getElementById("active14");
var ac411 = document.getElementById("active15");
var ac412 = document.getElementById("active16");

  
  x.style.display = "none";
   y.style.display = "none";
  p.style.display = "none";
  q.style.display = "none";
    q1.style.display = "none";
  q2.style.display = "none";
  q3.style.display = "none";
  q4.style.display = "none";
  q5.style.display = "none";
  q6.style.display = "none";
  q7.style.display = "none";
  q8.style.display = "none";
  q9.style.display = "none";
  q10.style.display = "none";
  q11.style.display = "none";
  q12.style.display = "none";
  
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
      ac41.style.opacity = "2.0";
      ac42.style.opacity = "2.0";
      ac43.style.opacity = "2.0";
      ac44.style.opacity = "2.0";
      ac45.style.opacity = "2.0";
      ac46.style.opacity = "2.0";
      ac47.style.opacity = "2.0";
      ac48.style.opacity = "2.0";
      ac49.style.opacity = "2.0";
      ac410.style.opacity = "2.0";
      ac411.style.opacity = "2.0";
      ac412.style.opacity = "2.0";
  }
}


function myFunction4() {
   var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
    var z = document.getElementById("myDIV3");
  var p = document.getElementById("myDIV4");
  var q = document.getElementById("myDIV5");
  var q1 = document.getElementById("myDIV6");
  var q2 = document.getElementById("myDIV7");
  var q3 = document.getElementById("myDIV8");
  var q4 = document.getElementById("myDIV9");
  var q5 = document.getElementById("myDIV10");
  var q6 = document.getElementById("myDIV11");
  var q7 = document.getElementById("myDIV12");
  var q8 = document.getElementById("myDIV13");
  var q9 = document.getElementById("myDIV14");
  var q10 = document.getElementById("myDIV15");
  var q11 = document.getElementById("myDIV16");
  var q12 = document.getElementById("myDIV17");

var ac = document.getElementById("active");
var ac1 = document.getElementById("active1");
var ac2 = document.getElementById("active2");
var ac3 = document.getElementById("active3");
var ac4 = document.getElementById("active4");
var ac41 = document.getElementById("active5");
var ac42 = document.getElementById("active6");
var ac43 = document.getElementById("active7");
var ac44 = document.getElementById("active8");
var ac45 = document.getElementById("active9");
var ac46 = document.getElementById("active10");
var ac47 = document.getElementById("active11");
var ac48 = document.getElementById("active12");
var ac49 = document.getElementById("active13");
var ac410 = document.getElementById("active14");
var ac411 = document.getElementById("active15");
var ac412 = document.getElementById("active16");

  
  x.style.display = "none";
   z.style.display = "none";
  y.style.display = "none";
  q.style.display = "none";
    q1.style.display = "none";
  q2.style.display = "none";
  q3.style.display = "none";
  q4.style.display = "none";
  q5.style.display = "none";
  q6.style.display = "none";
  q7.style.display = "none";
  q8.style.display = "none";
  q9.style.display = "none";
  q10.style.display = "none";
  q11.style.display = "none";
  q12.style.display = "none";
  
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
      ac41.style.opacity = "2.0";
      ac42.style.opacity = "2.0";
      ac43.style.opacity = "2.0";
      ac44.style.opacity = "2.0";
      ac45.style.opacity = "2.0";
      ac46.style.opacity = "2.0";
      ac47.style.opacity = "2.0";
      ac48.style.opacity = "2.0";
      ac49.style.opacity = "2.0";
      ac410.style.opacity = "2.0";
      ac411.style.opacity = "2.0";
      ac412.style.opacity = "2.0";
  }
}


function myFunction5() {
    var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
    var z = document.getElementById("myDIV3");
  var p = document.getElementById("myDIV4");
  var q = document.getElementById("myDIV5");
  var q1 = document.getElementById("myDIV6");
  var q2 = document.getElementById("myDIV7");
  var q3 = document.getElementById("myDIV8");
  var q4 = document.getElementById("myDIV9");
  var q5 = document.getElementById("myDIV10");
  var q6 = document.getElementById("myDIV11");
  var q7 = document.getElementById("myDIV12");
  var q8 = document.getElementById("myDIV13");
  var q9 = document.getElementById("myDIV14");
  var q10 = document.getElementById("myDIV15");
  var q11 = document.getElementById("myDIV16");
  var q12 = document.getElementById("myDIV17");

var ac = document.getElementById("active");
var ac1 = document.getElementById("active1");
var ac2 = document.getElementById("active2");
var ac3 = document.getElementById("active3");
var ac4 = document.getElementById("active4");
var ac41 = document.getElementById("active5");
var ac42 = document.getElementById("active6");
var ac43 = document.getElementById("active7");
var ac44 = document.getElementById("active8");
var ac45 = document.getElementById("active9");
var ac46 = document.getElementById("active10");
var ac47 = document.getElementById("active11");
var ac48 = document.getElementById("active12");
var ac49 = document.getElementById("active13");
var ac410 = document.getElementById("active14");
var ac411 = document.getElementById("active15");
var ac412 = document.getElementById("active16");

  
  x.style.display = "none";
   z.style.display = "none";
  p.style.display = "none";
  y.style.display = "none";
    q1.style.display = "none";
  q2.style.display = "none";
  q3.style.display = "none";
  q4.style.display = "none";
  q5.style.display = "none";
  q6.style.display = "none";
  q7.style.display = "none";
  q8.style.display = "none";
  q9.style.display = "none";
  q10.style.display = "none";
  q11.style.display = "none";
  q12.style.display = "none";
  
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
      ac41.style.opacity = "2.0";
      ac42.style.opacity = "2.0";
      ac43.style.opacity = "2.0";
      ac44.style.opacity = "2.0";
      ac45.style.opacity = "2.0";
      ac46.style.opacity = "2.0";
      ac47.style.opacity = "2.0";
      ac48.style.opacity = "2.0";
      ac49.style.opacity = "2.0";
      ac410.style.opacity = "2.0";
      ac411.style.opacity = "2.0";
      ac412.style.opacity = "2.0";
    
  }
}
    
function myFunction6() {
  var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
    var z = document.getElementById("myDIV3");
  var p = document.getElementById("myDIV4");
  var q = document.getElementById("myDIV5");
  var q1 = document.getElementById("myDIV6");
  var q2 = document.getElementById("myDIV7");
  var q3 = document.getElementById("myDIV8");
  var q4 = document.getElementById("myDIV9");
  var q5 = document.getElementById("myDIV10");
  var q6 = document.getElementById("myDIV11");
  var q7 = document.getElementById("myDIV12");
  var q8 = document.getElementById("myDIV13");
  var q9 = document.getElementById("myDIV14");
  var q10 = document.getElementById("myDIV15");
  var q11 = document.getElementById("myDIV16");
  var q12 = document.getElementById("myDIV17");

var ac = document.getElementById("active");
var ac1 = document.getElementById("active1");
var ac2 = document.getElementById("active2");
var ac3 = document.getElementById("active3");
var ac4 = document.getElementById("active4");
var ac41 = document.getElementById("active5");
var ac42 = document.getElementById("active6");
var ac43 = document.getElementById("active7");
var ac44 = document.getElementById("active8");
var ac45 = document.getElementById("active9");
var ac46 = document.getElementById("active10");
var ac47 = document.getElementById("active11");
var ac48 = document.getElementById("active12");
var ac49 = document.getElementById("active13");
var ac410 = document.getElementById("active14");
var ac411 = document.getElementById("active15");
var ac412 = document.getElementById("active16");



  y.style.display = "none";
  z.style.display = "none";
  p.style.display = "none";
  q.style.display = "none";
    x.style.display = "none";
  q2.style.display = "none";
  q3.style.display = "none";
  q4.style.display = "none";
  q5.style.display = "none";
  q6.style.display = "none";
  q7.style.display = "none";
  q8.style.display = "none";
  q9.style.display = "none";
  q10.style.display = "none";
  q11.style.display = "none";
  q12.style.display = "none";
  
  if (q1.style.display == "block") {
    q1.style.display = "none";
    ac41.style.opacity = "2.0";
  } else {
    q1.style.display = "block";
     ac.style.opacity = "2.0";
     ac1.style.opacity = "2.0";
     ac2.style.opacity = "2.0";
     ac3.style.opacity = "2.0";
     ac4.style.opacity = "2.0";
      ac41.style.opacity = "0.5";
      ac42.style.opacity = "2.0";
      ac43.style.opacity = "2.0";
      ac44.style.opacity = "2.0";
      ac45.style.opacity = "2.0";
      ac46.style.opacity = "2.0";
      ac47.style.opacity = "2.0";
      ac48.style.opacity = "2.0";
      ac49.style.opacity = "2.0";
      ac410.style.opacity = "2.0";
      ac411.style.opacity = "2.0";
      ac412.style.opacity = "2.0";

  }
}

function myFunction7() {
    var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
    var z = document.getElementById("myDIV3");
  var p = document.getElementById("myDIV4");
  var q = document.getElementById("myDIV5");
  var q1 = document.getElementById("myDIV6");
  var q2 = document.getElementById("myDIV7");
  var q3 = document.getElementById("myDIV8");
  var q4 = document.getElementById("myDIV9");
  var q5 = document.getElementById("myDIV10");
  var q6 = document.getElementById("myDIV11");
  var q7 = document.getElementById("myDIV12");
  var q8 = document.getElementById("myDIV13");
  var q9 = document.getElementById("myDIV14");
  var q10 = document.getElementById("myDIV15");
  var q11 = document.getElementById("myDIV16");
  var q12 = document.getElementById("myDIV17");

var ac = document.getElementById("active");
var ac1 = document.getElementById("active1");
var ac2 = document.getElementById("active2");
var ac3 = document.getElementById("active3");
var ac4 = document.getElementById("active4");
var ac41 = document.getElementById("active5");
var ac42 = document.getElementById("active6");
var ac43 = document.getElementById("active7");
var ac44 = document.getElementById("active8");
var ac45 = document.getElementById("active9");
var ac46 = document.getElementById("active10");
var ac47 = document.getElementById("active11");
var ac48 = document.getElementById("active12");
var ac49 = document.getElementById("active13");
var ac410 = document.getElementById("active14");
var ac411 = document.getElementById("active15");
var ac412 = document.getElementById("active16");

  
  x.style.display = "none";
   z.style.display = "none";
  p.style.display = "none";
  q.style.display = "none";
    q1.style.display = "none";
  y.style.display = "none";
  q3.style.display = "none";
  q4.style.display = "none";
  q5.style.display = "none";
  q6.style.display = "none";
  q7.style.display = "none";
  q8.style.display = "none";
  q9.style.display = "none";
  q10.style.display = "none";
  q11.style.display = "none";
  q12.style.display = "none";
  
  if (q2.style.display == "block") {
    q2.style.display = "none";
    ac42.style.opacity = "2.0";
  } else {
    q2.style.display = "block";
    ac.style.opacity = "2.0";
     ac1.style.opacity = "2.0";
     ac2.style.opacity = "2.0";
     ac3.style.opacity = "2.0";
     ac4.style.opacity = "2.0";
      ac41.style.opacity = "2.0";
      ac42.style.opacity = "0.5";
      ac43.style.opacity = "2.0";
      ac44.style.opacity = "2.0";
      ac45.style.opacity = "2.0";
      ac46.style.opacity = "2.0";
      ac47.style.opacity = "2.0";
      ac48.style.opacity = "2.0";
      ac49.style.opacity = "2.0";
      ac410.style.opacity = "2.0";
      ac411.style.opacity = "2.0";
      ac412.style.opacity = "2.0";
  }
}

function myFunction8() {
    var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
    var z = document.getElementById("myDIV3");
  var p = document.getElementById("myDIV4");
  var q = document.getElementById("myDIV5");
  var q1 = document.getElementById("myDIV6");
  var q2 = document.getElementById("myDIV7");
  var q3 = document.getElementById("myDIV8");
  var q4 = document.getElementById("myDIV9");
  var q5 = document.getElementById("myDIV10");
  var q6 = document.getElementById("myDIV11");
  var q7 = document.getElementById("myDIV12");
  var q8 = document.getElementById("myDIV13");
  var q9 = document.getElementById("myDIV14");
  var q10 = document.getElementById("myDIV15");
  var q11 = document.getElementById("myDIV16");
  var q12 = document.getElementById("myDIV17");

var ac = document.getElementById("active");
var ac1 = document.getElementById("active1");
var ac2 = document.getElementById("active2");
var ac3 = document.getElementById("active3");
var ac4 = document.getElementById("active4");
var ac41 = document.getElementById("active5");
var ac42 = document.getElementById("active6");
var ac43 = document.getElementById("active7");
var ac44 = document.getElementById("active8");
var ac45 = document.getElementById("active9");
var ac46 = document.getElementById("active10");
var ac47 = document.getElementById("active11");
var ac48 = document.getElementById("active12");
var ac49 = document.getElementById("active13");
var ac410 = document.getElementById("active14");
var ac411 = document.getElementById("active15");
var ac412 = document.getElementById("active16");

  
  x.style.display = "none";
   y.style.display = "none";
  p.style.display = "none";
  q.style.display = "none";
    q1.style.display = "none";
  q2.style.display = "none";
  z.style.display = "none";
  q4.style.display = "none";
  q5.style.display = "none";
  q6.style.display = "none";
  q7.style.display = "none";
  q8.style.display = "none";
  q9.style.display = "none";
  q10.style.display = "none";
  q11.style.display = "none";
  q12.style.display = "none";
  
  if (q3.style.display == "block") {
    q3.style.display = "none";
    ac43.style.opacity = "2.0";
  } else {
    q3.style.display = "block";
    ac.style.opacity = "2.0";
     ac1.style.opacity = "2.0";
     ac2.style.opacity = "2.0";
     ac3.style.opacity = "2.0";
     ac4.style.opacity = "2.0";
      ac41.style.opacity = "2.0";
      ac42.style.opacity = "2.0";
      ac43.style.opacity = "0.5";
      ac44.style.opacity = "2.0";
      ac45.style.opacity = "2.0";
      ac46.style.opacity = "2.0";
      ac47.style.opacity = "2.0";
      ac48.style.opacity = "2.0";
      ac49.style.opacity = "2.0";
      ac410.style.opacity = "2.0";
      ac411.style.opacity = "2.0";
      ac412.style.opacity = "2.0";
  }
}


function myFunction9() {
   var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
    var z = document.getElementById("myDIV3");
  var p = document.getElementById("myDIV4");
  var q = document.getElementById("myDIV5");
  var q1 = document.getElementById("myDIV6");
  var q2 = document.getElementById("myDIV7");
  var q3 = document.getElementById("myDIV8");
  var q4 = document.getElementById("myDIV9");
  var q5 = document.getElementById("myDIV10");
  var q6 = document.getElementById("myDIV11");
  var q7 = document.getElementById("myDIV12");
  var q8 = document.getElementById("myDIV13");
  var q9 = document.getElementById("myDIV14");
  var q10 = document.getElementById("myDIV15");
  var q11 = document.getElementById("myDIV16");
  var q12 = document.getElementById("myDIV17");

var ac = document.getElementById("active");
var ac1 = document.getElementById("active1");
var ac2 = document.getElementById("active2");
var ac3 = document.getElementById("active3");
var ac4 = document.getElementById("active4");
var ac41 = document.getElementById("active5");
var ac42 = document.getElementById("active6");
var ac43 = document.getElementById("active7");
var ac44 = document.getElementById("active8");
var ac45 = document.getElementById("active9");
var ac46 = document.getElementById("active10");
var ac47 = document.getElementById("active11");
var ac48 = document.getElementById("active12");
var ac49 = document.getElementById("active13");
var ac410 = document.getElementById("active14");
var ac411 = document.getElementById("active15");
var ac412 = document.getElementById("active16");

  
  x.style.display = "none";
   z.style.display = "none";
  y.style.display = "none";
  q.style.display = "none";
    q1.style.display = "none";
  q2.style.display = "none";
  q3.style.display = "none";
  p.style.display = "none";
  q5.style.display = "none";
  q6.style.display = "none";
  q7.style.display = "none";
  q8.style.display = "none";
  q9.style.display = "none";
  q10.style.display = "none";
  q11.style.display = "none";
  q12.style.display = "none";
  
  if (q4.style.display == "block") {
    q4.style.display = "none";
    ac44.style.opacity = "2.0";
  } else {
    q4.style.display = "block";
    ac.style.opacity = "2.0";
     ac1.style.opacity = "2.0";
     ac2.style.opacity = "2.0";
     ac3.style.opacity = "2.0";
     ac4.style.opacity = "2.0";
      ac41.style.opacity = "2.0";
      ac42.style.opacity = "2.0";
      ac43.style.opacity = "2.0";
      ac44.style.opacity = "0.5";
      ac45.style.opacity = "2.0";
      ac46.style.opacity = "2.0";
      ac47.style.opacity = "2.0";
      ac48.style.opacity = "2.0";
      ac49.style.opacity = "2.0";
      ac410.style.opacity = "2.0";
      ac411.style.opacity = "2.0";
      ac412.style.opacity = "2.0";
  }
}


function myFunction10() {
    var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
    var z = document.getElementById("myDIV3");
  var p = document.getElementById("myDIV4");
  var q = document.getElementById("myDIV5");
  var q1 = document.getElementById("myDIV6");
  var q2 = document.getElementById("myDIV7");
  var q3 = document.getElementById("myDIV8");
  var q4 = document.getElementById("myDIV9");
  var q5 = document.getElementById("myDIV10");
  var q6 = document.getElementById("myDIV11");
  var q7 = document.getElementById("myDIV12");
  var q8 = document.getElementById("myDIV13");
  var q9 = document.getElementById("myDIV14");
  var q10 = document.getElementById("myDIV15");
  var q11 = document.getElementById("myDIV16");
  var q12 = document.getElementById("myDIV17");

var ac = document.getElementById("active");
var ac1 = document.getElementById("active1");
var ac2 = document.getElementById("active2");
var ac3 = document.getElementById("active3");
var ac4 = document.getElementById("active4");
var ac41 = document.getElementById("active5");
var ac42 = document.getElementById("active6");
var ac43 = document.getElementById("active7");
var ac44 = document.getElementById("active8");
var ac45 = document.getElementById("active9");
var ac46 = document.getElementById("active10");
var ac47 = document.getElementById("active11");
var ac48 = document.getElementById("active12");
var ac49 = document.getElementById("active13");
var ac410 = document.getElementById("active14");
var ac411 = document.getElementById("active15");
var ac412 = document.getElementById("active16");

  x.style.display = "none";
   z.style.display = "none";
  p.style.display = "none";
  y.style.display = "none";
    q1.style.display = "none";
  q2.style.display = "none";
  q3.style.display = "none";
  q4.style.display = "none";
  q.style.display = "none";
  q6.style.display = "none";
  q7.style.display = "none";
  q8.style.display = "none";
  q9.style.display = "none";
  q10.style.display = "none";
  q11.style.display = "none";
  q12.style.display = "none";
  
  if (q5.style.display == "block") {
    q5.style.display = "none";
    ac45.style.opacity = "2.0";
  } else {
    q5.style.display = "block";
     ac.style.opacity = "2.0";
     ac1.style.opacity = "2.0";
     ac2.style.opacity = "2.0";
     ac3.style.opacity = "2.0";
     ac4.style.opacity = "2.0";
      ac41.style.opacity = "2.0";
      ac42.style.opacity = "2.0";
      ac43.style.opacity = "2.0";
      ac44.style.opacity = "2.0";
      ac45.style.opacity = "0.5";
      ac46.style.opacity = "2.0";
      ac47.style.opacity = "2.0";
      ac48.style.opacity = "2.0";
      ac49.style.opacity = "2.0";
      ac410.style.opacity = "2.0";
      ac411.style.opacity = "2.0";
      ac412.style.opacity = "2.0";
    
  }
}
    
function myFunction11() {
    var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
    var z = document.getElementById("myDIV3");
  var p = document.getElementById("myDIV4");
  var q = document.getElementById("myDIV5");
  var q1 = document.getElementById("myDIV6");
  var q2 = document.getElementById("myDIV7");
  var q3 = document.getElementById("myDIV8");
  var q4 = document.getElementById("myDIV9");
  var q5 = document.getElementById("myDIV10");
  var q6 = document.getElementById("myDIV11");
  var q7 = document.getElementById("myDIV12");
  var q8 = document.getElementById("myDIV13");
  var q9 = document.getElementById("myDIV14");
  var q10 = document.getElementById("myDIV15");
  var q11 = document.getElementById("myDIV16");
  var q12 = document.getElementById("myDIV17");

var ac = document.getElementById("active");
var ac1 = document.getElementById("active1");
var ac2 = document.getElementById("active2");
var ac3 = document.getElementById("active3");
var ac4 = document.getElementById("active4");
var ac41 = document.getElementById("active5");
var ac42 = document.getElementById("active6");
var ac43 = document.getElementById("active7");
var ac44 = document.getElementById("active8");
var ac45 = document.getElementById("active9");
var ac46 = document.getElementById("active10");
var ac47 = document.getElementById("active11");
var ac48 = document.getElementById("active12");
var ac49 = document.getElementById("active13");
var ac410 = document.getElementById("active14");
var ac411 = document.getElementById("active15");
var ac412 = document.getElementById("active16");



  y.style.display = "none";
  z.style.display = "none";
  p.style.display = "none";
  q.style.display = "none";
    q1.style.display = "none";
  q2.style.display = "none";
  q3.style.display = "none";
  q4.style.display = "none";
  q5.style.display = "none";
  x.style.display = "none";
  q7.style.display = "none";
  q8.style.display = "none";
  q9.style.display = "none";
  q10.style.display = "none";
  q11.style.display = "none";
  q12.style.display = "none";
  
  if (q6.style.display == "block") {
    q6.style.display = "none";
    ac46.style.opacity = "2.0";
  } else {
    q6.style.display = "block";
     ac.style.opacity = "2.0";
     ac1.style.opacity = "2.0";
     ac2.style.opacity = "2.0";
     ac3.style.opacity = "2.0";
     ac4.style.opacity = "2.0";
      ac41.style.opacity = "2.0";
      ac42.style.opacity = "2.0";
      ac43.style.opacity = "2.0";
      ac44.style.opacity = "2.0";
      ac45.style.opacity = "2.0";
      ac46.style.opacity = "0.5";
      ac47.style.opacity = "2.0";
      ac48.style.opacity = "2.0";
      ac49.style.opacity = "2.0";
      ac410.style.opacity = "2.0";
      ac411.style.opacity = "2.0";
      ac412.style.opacity = "2.0";

  }
}

function myFunction12() {
   var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
    var z = document.getElementById("myDIV3");
  var p = document.getElementById("myDIV4");
  var q = document.getElementById("myDIV5");
  var q1 = document.getElementById("myDIV6");
  var q2 = document.getElementById("myDIV7");
  var q3 = document.getElementById("myDIV8");
  var q4 = document.getElementById("myDIV9");
  var q5 = document.getElementById("myDIV10");
  var q6 = document.getElementById("myDIV11");
  var q7 = document.getElementById("myDIV12");
  var q8 = document.getElementById("myDIV13");
  var q9 = document.getElementById("myDIV14");
  var q10 = document.getElementById("myDIV15");
  var q11 = document.getElementById("myDIV16");
  var q12 = document.getElementById("myDIV17");

var ac = document.getElementById("active");
var ac1 = document.getElementById("active1");
var ac2 = document.getElementById("active2");
var ac3 = document.getElementById("active3");
var ac4 = document.getElementById("active4");
var ac41 = document.getElementById("active5");
var ac42 = document.getElementById("active6");
var ac43 = document.getElementById("active7");
var ac44 = document.getElementById("active8");
var ac45 = document.getElementById("active9");
var ac46 = document.getElementById("active10");
var ac47 = document.getElementById("active11");
var ac48 = document.getElementById("active12");
var ac49 = document.getElementById("active13");
var ac410 = document.getElementById("active14");
var ac411 = document.getElementById("active15");
var ac412 = document.getElementById("active16");

  
  x.style.display = "none";
   z.style.display = "none";
  p.style.display = "none";
  q.style.display = "none";
    q1.style.display = "none";
  q2.style.display = "none";
  q3.style.display = "none";
  q4.style.display = "none";
  q5.style.display = "none";
  q6.style.display = "none";
  y.style.display = "none";
  q8.style.display = "none";
  q9.style.display = "none";
  q10.style.display = "none";
  q11.style.display = "none";
  q12.style.display = "none";
  
  if (q7.style.display == "block") {
    q7.style.display = "none";
    ac47.style.opacity = "2.0";
  } else {
    q7.style.display = "block";
    ac.style.opacity = "2.0";
     ac1.style.opacity = "2.0";
     ac2.style.opacity = "2.0";
     ac3.style.opacity = "2.0";
     ac4.style.opacity = "2.0";
      ac41.style.opacity = "2.0";
      ac42.style.opacity = "2.0";
      ac43.style.opacity = "2.0";
      ac44.style.opacity = "2.0";
      ac45.style.opacity = "2.0";
      ac46.style.opacity = "2.0";
      ac47.style.opacity = "0.5";
      ac48.style.opacity = "2.0";
      ac49.style.opacity = "2.0";
      ac410.style.opacity = "2.0";
      ac411.style.opacity = "2.0";
      ac412.style.opacity = "2.0";
  }
}

function myFunction13() {
   var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
    var z = document.getElementById("myDIV3");
  var p = document.getElementById("myDIV4");
  var q = document.getElementById("myDIV5");
  var q1 = document.getElementById("myDIV6");
  var q2 = document.getElementById("myDIV7");
  var q3 = document.getElementById("myDIV8");
  var q4 = document.getElementById("myDIV9");
  var q5 = document.getElementById("myDIV10");
  var q6 = document.getElementById("myDIV11");
  var q7 = document.getElementById("myDIV12");
  var q8 = document.getElementById("myDIV13");
  var q9 = document.getElementById("myDIV14");
  var q10 = document.getElementById("myDIV15");
  var q11 = document.getElementById("myDIV16");
  var q12 = document.getElementById("myDIV17");

var ac = document.getElementById("active");
var ac1 = document.getElementById("active1");
var ac2 = document.getElementById("active2");
var ac3 = document.getElementById("active3");
var ac4 = document.getElementById("active4");
var ac41 = document.getElementById("active5");
var ac42 = document.getElementById("active6");
var ac43 = document.getElementById("active7");
var ac44 = document.getElementById("active8");
var ac45 = document.getElementById("active9");
var ac46 = document.getElementById("active10");
var ac47 = document.getElementById("active11");
var ac48 = document.getElementById("active12");
var ac49 = document.getElementById("active13");
var ac410 = document.getElementById("active14");
var ac411 = document.getElementById("active15");
var ac412 = document.getElementById("active16");

  
  x.style.display = "none";
   y.style.display = "none";
  p.style.display = "none";
  q.style.display = "none";
    q1.style.display = "none";
  q2.style.display = "none";
  q3.style.display = "none";
  q4.style.display = "none";
  q5.style.display = "none";
  q6.style.display = "none";
  q7.style.display = "none";
  z.style.display = "none";
  q9.style.display = "none";
  q10.style.display = "none";
  q11.style.display = "none";
  q12.style.display = "none";
  
  if (q8.style.display == "block") {
    q8.style.display = "none";
    ac48.style.opacity = "2.0";
  } else {
    q8.style.display = "block";
    ac.style.opacity = "2.0";
     ac1.style.opacity = "2.0";
     ac2.style.opacity = "2.0";
     ac3.style.opacity = "2.0";
     ac4.style.opacity = "2.0";
    ac41.style.opacity = "2.0";
      ac42.style.opacity = "2.0";
      ac43.style.opacity = "2.0";
      ac44.style.opacity = "2.0";
      ac45.style.opacity = "2.0";
      ac46.style.opacity = "2.0";
      ac47.style.opacity = "2.0";
      ac48.style.opacity = "0.5";
      ac49.style.opacity = "2.0";
      ac410.style.opacity = "2.0";
      ac411.style.opacity = "2.0";
      ac412.style.opacity = "2.0";
  }
}


function myFunction14() {
    var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
    var z = document.getElementById("myDIV3");
  var p = document.getElementById("myDIV4");
  var q = document.getElementById("myDIV5");
  var q1 = document.getElementById("myDIV6");
  var q2 = document.getElementById("myDIV7");
  var q3 = document.getElementById("myDIV8");
  var q4 = document.getElementById("myDIV9");
  var q5 = document.getElementById("myDIV10");
  var q6 = document.getElementById("myDIV11");
  var q7 = document.getElementById("myDIV12");
  var q8 = document.getElementById("myDIV13");
  var q9 = document.getElementById("myDIV14");
  var q10 = document.getElementById("myDIV15");
  var q11 = document.getElementById("myDIV16");
  var q12 = document.getElementById("myDIV17");

var ac = document.getElementById("active");
var ac1 = document.getElementById("active1");
var ac2 = document.getElementById("active2");
var ac3 = document.getElementById("active3");
var ac4 = document.getElementById("active4");
var ac41 = document.getElementById("active5");
var ac42 = document.getElementById("active6");
var ac43 = document.getElementById("active7");
var ac44 = document.getElementById("active8");
var ac45 = document.getElementById("active9");
var ac46 = document.getElementById("active10");
var ac47 = document.getElementById("active11");
var ac48 = document.getElementById("active12");
var ac49 = document.getElementById("active13");
var ac410 = document.getElementById("active14");
var ac411 = document.getElementById("active15");
var ac412 = document.getElementById("active16");

  
  x.style.display = "none";
   z.style.display = "none";
  y.style.display = "none";
  q.style.display = "none";
    q1.style.display = "none";
  q2.style.display = "none";
  q3.style.display = "none";
  q4.style.display = "none";
  q5.style.display = "none";
  q6.style.display = "none";
  q7.style.display = "none";
  q8.style.display = "none";
  p.style.display = "none";
  q10.style.display = "none";
  q11.style.display = "none";
  q12.style.display = "none";
  
  if (q9.style.display == "block") {
    q9.style.display = "none";
    ac49.style.opacity = "2.0";
  } else {
    q9.style.display = "block";
    ac.style.opacity = "2.0";
     ac1.style.opacity = "2.0";
     ac2.style.opacity = "2.0";
     ac3.style.opacity = "2.0";
     ac4.style.opacity = "2.0";
      ac41.style.opacity = "2.0";
      ac42.style.opacity = "2.0";
      ac43.style.opacity = "2.0";
      ac44.style.opacity = "2.0";
      ac45.style.opacity = "2.0";
      ac46.style.opacity = "2.0";
      ac47.style.opacity = "2.0";
      ac48.style.opacity = "2.0";
      ac49.style.opacity = "0.5";
      ac410.style.opacity = "2.0";
      ac411.style.opacity = "2.0";
      ac412.style.opacity = "2.0";
  }
}


function myFunction15() {
    var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
    var z = document.getElementById("myDIV3");
  var p = document.getElementById("myDIV4");
  var q = document.getElementById("myDIV5");
  var q1 = document.getElementById("myDIV6");
  var q2 = document.getElementById("myDIV7");
  var q3 = document.getElementById("myDIV8");
  var q4 = document.getElementById("myDIV9");
  var q5 = document.getElementById("myDIV10");
  var q6 = document.getElementById("myDIV11");
  var q7 = document.getElementById("myDIV12");
  var q8 = document.getElementById("myDIV13");
  var q9 = document.getElementById("myDIV14");
  var q10 = document.getElementById("myDIV15");
  var q11 = document.getElementById("myDIV16");
  var q12 = document.getElementById("myDIV17");

var ac = document.getElementById("active");
var ac1 = document.getElementById("active1");
var ac2 = document.getElementById("active2");
var ac3 = document.getElementById("active3");
var ac4 = document.getElementById("active4");
var ac41 = document.getElementById("active5");
var ac42 = document.getElementById("active6");
var ac43 = document.getElementById("active7");
var ac44 = document.getElementById("active8");
var ac45 = document.getElementById("active9");
var ac46 = document.getElementById("active10");
var ac47 = document.getElementById("active11");
var ac48 = document.getElementById("active12");
var ac49 = document.getElementById("active13");
var ac410 = document.getElementById("active14");
var ac411 = document.getElementById("active15");
var ac412 = document.getElementById("active16");

  
  x.style.display = "none";
   z.style.display = "none";
  p.style.display = "none";
  y.style.display = "none";
    q1.style.display = "none";
  q2.style.display = "none";
  q3.style.display = "none";
  q4.style.display = "none";
  q5.style.display = "none";
  q6.style.display = "none";
  q7.style.display = "none";
  q8.style.display = "none";
  q9.style.display = "none";
  q.style.display = "none";
  q11.style.display = "none";
  q12.style.display = "none";
  
  if (q10.style.display == "block") {
    q10.style.display = "none";
    ac410.style.opacity = "2.0";
  } else {
    q10.style.display = "block";
     ac.style.opacity = "2.0";
     ac1.style.opacity = "2.0";
     ac2.style.opacity = "2.0";
     ac3.style.opacity = "2.0";
     ac4.style.opacity = "2.0";
      ac41.style.opacity = "2.0";
      ac42.style.opacity = "2.0";
      ac43.style.opacity = "2.0";
      ac44.style.opacity = "2.0";
      ac45.style.opacity = "2.0";
      ac46.style.opacity = "2.0";
      ac47.style.opacity = "2.0";
      ac48.style.opacity = "2.0";
      ac49.style.opacity = "2.0";
      ac410.style.opacity = "0.5";
      ac411.style.opacity = "2.0";
      ac412.style.opacity = "2.0";
    
  }
}
    

function myFunction16() {
   var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
    var z = document.getElementById("myDIV3");
  var p = document.getElementById("myDIV4");
  var q = document.getElementById("myDIV5");
  var q1 = document.getElementById("myDIV6");
  var q2 = document.getElementById("myDIV7");
  var q3 = document.getElementById("myDIV8");
  var q4 = document.getElementById("myDIV9");
  var q5 = document.getElementById("myDIV10");
  var q6 = document.getElementById("myDIV11");
  var q7 = document.getElementById("myDIV12");
  var q8 = document.getElementById("myDIV13");
  var q9 = document.getElementById("myDIV14");
  var q10 = document.getElementById("myDIV15");
  var q11 = document.getElementById("myDIV16");
  var q12 = document.getElementById("myDIV17");

var ac = document.getElementById("active");
var ac1 = document.getElementById("active1");
var ac2 = document.getElementById("active2");
var ac3 = document.getElementById("active3");
var ac4 = document.getElementById("active4");
var ac41 = document.getElementById("active5");
var ac42 = document.getElementById("active6");
var ac43 = document.getElementById("active7");
var ac44 = document.getElementById("active8");
var ac45 = document.getElementById("active9");
var ac46 = document.getElementById("active10");
var ac47 = document.getElementById("active11");
var ac48 = document.getElementById("active12");
var ac49 = document.getElementById("active13");
var ac410 = document.getElementById("active14");
var ac411 = document.getElementById("active15");
var ac412 = document.getElementById("active16");

  
  x.style.display = "none";
   z.style.display = "none";
  y.style.display = "none";
  q.style.display = "none";
    q1.style.display = "none";
  q2.style.display = "none";
  q3.style.display = "none";
  q4.style.display = "none";
  q5.style.display = "none";
  q6.style.display = "none";
  q7.style.display = "none";
  q8.style.display = "none";
  q9.style.display = "none";
  q10.style.display = "none";
  p.style.display = "none";
  q12.style.display = "none";
  
  if (q11.style.display == "block") {
    q11.style.display = "none";
    ac411.style.opacity = "2.0";
  } else {
    q11.style.display = "block";
    ac.style.opacity = "2.0";
     ac1.style.opacity = "2.0";
     ac2.style.opacity = "2.0";
     ac3.style.opacity = "2.0";
     ac4.style.opacity = "2.0";
      ac41.style.opacity = "2.0";
      ac42.style.opacity = "2.0";
      ac43.style.opacity = "2.0";
      ac44.style.opacity = "2.0";
      ac45.style.opacity = "2.0";
      ac46.style.opacity = "2.0";
      ac47.style.opacity = "2.0";
      ac48.style.opacity = "2.0";
      ac49.style.opacity = "2.0";
      ac410.style.opacity = "2.0";
      ac411.style.opacity = "0.5";
      ac412.style.opacity = "2.0";
  }
}


function myFunction17() {
    var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
    var z = document.getElementById("myDIV3");
  var p = document.getElementById("myDIV4");
  var q = document.getElementById("myDIV5");
  var q1 = document.getElementById("myDIV6");
  var q2 = document.getElementById("myDIV7");
  var q3 = document.getElementById("myDIV8");
  var q4 = document.getElementById("myDIV9");
  var q5 = document.getElementById("myDIV10");
  var q6 = document.getElementById("myDIV11");
  var q7 = document.getElementById("myDIV12");
  var q8 = document.getElementById("myDIV13");
  var q9 = document.getElementById("myDIV14");
  var q10 = document.getElementById("myDIV15");
  var q11 = document.getElementById("myDIV16");
  var q12 = document.getElementById("myDIV17");

var ac = document.getElementById("active");
var ac1 = document.getElementById("active1");
var ac2 = document.getElementById("active2");
var ac3 = document.getElementById("active3");
var ac4 = document.getElementById("active4");
var ac41 = document.getElementById("active5");
var ac42 = document.getElementById("active6");
var ac43 = document.getElementById("active7");
var ac44 = document.getElementById("active8");
var ac45 = document.getElementById("active9");
var ac46 = document.getElementById("active10");
var ac47 = document.getElementById("active11");
var ac48 = document.getElementById("active12");
var ac49 = document.getElementById("active13");
var ac410 = document.getElementById("active14");
var ac411 = document.getElementById("active15");
var ac412 = document.getElementById("active16");

  
  x.style.display = "none";
   z.style.display = "none";
  p.style.display = "none";
  y.style.display = "none";
    q1.style.display = "none";
  q2.style.display = "none";
  q3.style.display = "none";
  q4.style.display = "none";
  q5.style.display = "none";
  q6.style.display = "none";
  q7.style.display = "none";
  q8.style.display = "none";
  q9.style.display = "none";
  q10.style.display = "none";
  q11.style.display = "none";
  q.style.display = "none";
  
  if (q12.style.display == "block") {
    q12.style.display = "none";
    ac412.style.opacity = "2.0";
  } else {
    q12.style.display = "block";
     ac.style.opacity = "2.0";
     ac1.style.opacity = "2.0";
     ac2.style.opacity = "2.0";
     ac3.style.opacity = "2.0";
     ac4.style.opacity = "2.0";
      ac41.style.opacity = "2.0";
      ac42.style.opacity = "2.0";
      ac43.style.opacity = "2.0";
      ac44.style.opacity = "2.0";
      ac45.style.opacity = "2.0";
      ac46.style.opacity = "2.0";
      ac47.style.opacity = "2.0";
      ac48.style.opacity = "2.0";
      ac49.style.opacity = "2.0";
      ac410.style.opacity = "2.0";
      ac411.style.opacity = "2.0";
      ac412.style.opacity = "0.5";
      
  }
}
</script>
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
    
    window.location = "eventDeleteCM.php?value="+clicked_id;
    
   
}
 
function updatefun(){
    var e = window.event,
        btn = e.target || e.srcElement;
    var id = btn.id;
     window.location = "eventUpdateCM.php?value="+id;
}
</script>

  
</body>
</html> 