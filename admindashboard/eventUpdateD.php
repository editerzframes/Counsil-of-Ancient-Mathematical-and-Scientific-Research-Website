<?php

$var1 = $_GET['value'];
 echo '<script language="javascript">';
  echo 'alert(' .$var1. ')';  //not showing an alert box.
      echo '</script>';
     include ('dbConfig.php');
    
$sql = "SELECT title, description, dfile_name FROM d WHERE dID='".$var1."'";
$result = $db->query($sql);

$row = $result->fetch_assoc();
$affliation = $row["title"];
$biography = $row["description"];
$fileName = $row['dfile_name'];
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
  <form action="updateD.php" method="post" enctype="multipart/form-data">
    
   
      
    <input type="text" id="fisrtname" name="firstname" value= "<?php echo $affliation ?>" placeholder="Title"  required/>
    
  <input type="hidden" id="var1" name="var1" value="<?php echo $var1 ?>" />

    
          <textarea placeholder="Description" id="biography"  name="biography" onkeyup="adjust_textarea(this)" required><?php echo $biography ?></textarea>
      
       <input type="file" name="file">
    <input name="submit" type="submit" value="Login" onClick="updatefun()"/>
      

<br><br>
      <h5><b>Note:</b> &nbsp; Please choose the .jpg or .png images</h5>
  </form>
</div>
    



</body>
</html> 