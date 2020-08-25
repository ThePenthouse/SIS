<?php
include "configstud.php";
include "connection/connection.php";

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title;?></title>
<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
<style type="text/css">
<!--.style1 {color: #0066CC}
.style2 {color: #003399}
.style3 {color: #000000}
.style16 {color: #00FFCC; font-size: 18px;}
.style18 {color: #71BA00}
.style19 {font-size: 18px; color: #FF3300;}
.style29 {font-size: 24px; color: #FFFFFF; font-weight: bold; font-family: "Times New Roman", Times, serif; text-shadow: 5px 5px 3px black;}
-->
</style>
</head>
<body>
<input type="checkbox" id="menuToggle"/>
<label for="menuToggle" class="menu-icon">&#9776;</label>
<nav class="left">
<ul>
	<li class="selected"><a href="student_dashboard.php">Home</a></li>
	<li><a href="view_prof.php">View Profile</a></li>
	<li><a href="view_sub.php">View Subjects</a></li>
	<li><a href="view_marks.php">View Marks</a></li>
    <li><a href="view_events.php">View Events</a></li>
	<li><a href="studlogout.php">Logout</a></li>   
</ul>
</nav>
<div id="header">
<div class="img">
<img src="logosis.PNG" class="imglogo"/>
<p class="write">STUDENT INFORMATION SYSTEM</p>
</div>
<div class="sis">
<h1>Student Information System</h1>
</div>
</div>
<div id="container">
<div id="cc">
<p>&nbsp;</p>
<p align="right" class="style16 style2"><span class="style19">Welcome <?php echo $_SESSION['sname'];?></span></p>
</div>
<div id="banner">
<form id="form1" name="form1" method="POST" action="">
<table width="100%" border="0" align="center" >
				<tr>
				  <td colspan="3" align="left"><span class="style1"> </span>
				    <h2 align="left" class="style7  style18"><span class="style29">Event Gallery </span></h2>
				    <p align="left" class="style7  style18">&nbsp;</p>
				    <p align="left" class="style7  style18">&nbsp;</p>
			      <span class="style4"></span></p></td></tr>
				   <?php 
					$str="select * from events";
					$result=mysql_query($str);
					while($row= mysql_fetch_array($result))
					{
				?>
				   <tr>
				   <td width="19%" height="28" align="left"><span class="style3">Event Name</span></td>
				   <td width="2%"><span class="style3">:</span></td>
				   <td width="79%"><span class="style3"><?php echo $row['event_name']; ?></span></td>
				 </tr>
				 <tr>
				   <td height="28" align="left"><span class="style3">Event Description</span></td>
				   <td><span class="style3">:</span></td>
				   <td><span class="style3"><?php echo $row['event_desc']; ?></span></td>
				 </tr>
				 <tr>
				   <td height="28" align="left"><span class="style3">Event Date</span></td>
				   <td><span class="style3">:</span></td>
				   <td><span class="style3"><?php echo $row['event_date']; ?></span></td>
				 </tr>
				 <tr>
				   <td colspan="3" align="left"><p class="style3"><img src="images/<?php echo $row['event_pic'];?>" width="220" height="190" /></p>
			       <p class="style3">&nbsp;</p>
				   <p class="style3">&nbsp;</p></td>
				 </tr>
				 <?php } ?>
</table>
</form>
</div>
</body>
</html>