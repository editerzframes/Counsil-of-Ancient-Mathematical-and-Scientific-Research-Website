<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>DISTRICT TALENT SEARCH EXAM 2019</title>
<link href="http://localhost/gulbir/style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div id="top-text">
    <img class="logo floatLeft" alt="Logo"  />
    <img class="logo1 floatRight" alt="Logo" />
          
    <h1 style="text-align:center">DISTRICT TALENT SEARCH EXAM 2019</h1>
    <h2 style="text-align:center">PRIVATE SCHOOL ASSOCIATION, SITAMARHI</h2>
    </div>
    <br>
<div id="profile">
    <b id="logout"><a href="http://localhost/gulbir/logout.php/">Log Out</a></b>
<h3><b id="welcome">Welcome : <i><?php echo $name; ?></i></b></h3>
<p><b id="welcome">Registration Number : <i><?php echo $login_session; ?></i></b></p>
<p><b id="welcome">Class: <i><?php echo $class; ?></i></b></p>
<p><b id="welcome">RANK: <i><?php echo $rank; ?></i></b></p> <br>
    <hr>

    
<table id="t01">
  <tr>
    <th style="background-color:#afd1de">Subjects</th>
    <th>Maths</th> 
    <th>Science</th>
    <th>English</th> 
    <th>SSc</th>
    <th>GK</th> 
    <th>Total Marks</th>
  </tr>
  <tr>
      <td style="background-color:#afd1de"><b>Marks</b></td>
    <td><?php echo $math; ?></td>
    <td><?php echo $sci; ?></td>
    <td><?php echo $eng; ?></td>
    <td><?php echo $ssc; ?></td>
    <td><?php echo $gk; ?></td>
    <td><?php echo $markst; ?></td>
  </tr>
  
</table>

  
</div>
    <br>
      <div class="footer">
  <h3> Solution by: Cybaware</h3>
</div>
    
</body>
</html> 