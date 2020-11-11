<?php


$var1 = $_GET['value'];
echo doSomething($var1);
function doSomething($var) {
          include ('dbConfig.php');

   
    echo '<script language="javascript">';
  echo 'alert(' .$var. ')';  //not showing an alert box.
      echo '</script>';

    
$sql1 = "DELETE FROM cm WHERE cmID='".$var."' ";
$result1 = $db->query($sql1);
      if($result1){
               echo "<script> location.href='http://localhost/gulbir/admindashboard/profile.php/'; </script>";
            }
}

  ?>