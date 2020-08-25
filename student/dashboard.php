<?php
include "config.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
.show{
color:rgba(0,0,0,0.5);
box-shadow:inset -2px -2px rgba(0,0,0,0.5);
border-radius:5px;
font-size:16px;
}
.show:hover{
background-color:rgba(0,0,255,0.1);
transition:linear all 0.40s;
font-size:18px;
}
.shows{
color:#FFFFFF;
font-size:14px;
font-weight:bold;

}
.shows:hover{
color:#000000;
font-size:18px;
font-weight:bold;
transition:linear all 0.40s;

}
.adname{
font-size:20px;
color:#9999CC;
font-weight:600;
font-family:Verdana, Arial, Helvetica, sans-serif;
}
</style>
<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
<style type="text/css">
<!--
.style17 {font-size: 18px; color: #FF3300;}
-->
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title;?></title>
</head>
<body>
<input type="checkbox" id="menuToggle"/>
<label for="menuToggle" class="menu-icon">&#9776;</label>
<nav class="left">
<ul>
	<li class="selected"><a href="dashboard.php">Home</a></li>
	<li><a href="course_master.php">Course Entry </a></li>
    <li><a href="subject_master.php">Subject Entry</a></li>
	<li><a href="sub_course_sem.php">Subject Record</a></li>
	<li><a href="student_master.php">Student Entry</a></li>
	<li><a href="attendance_master.php">Attendance</a></li>
	<li><a href="marks.php">Marks Entry</a></li>
	<li><a href="events.php">Events Entry</a></li>
	<li><a href="marksheet.php">Marksheet</a></li>
	<li><a href="search.php">Search Records</a></li>
	<li><a href="delete.php">Delete Records</a></li>
    <li><a href="Logout.php">Logout</a></li>   
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
<p align="right" class="style17">Welcome <?php echo $_SESSION['uname'];?></p>
</div>
<div id="banner">
<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr><td>&nbsp;</td></tr>
	  <tr><td>&nbsp;</td></tr>
      <tr>
        <td align="center">
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
         <tr>
            <td width="190" height="130" align="center" bgcolor="#00CCFF" class="show"><a href="dashboard.php" class="shows">Home</a></td>
			<td>&nbsp;</td>
            <td width="190" height="130" align="center" bgcolor="#FF9933" class="show"><a href="course_master.php" class="shows">Course Entry </a></td>
			<td>&nbsp;</td>
            <td width="190" height="130" align="center" bgcolor="#7632C0" class="show" id=""><a href="subject_master.php" class="shows">Subject Entry</a></td>
			<td>&nbsp;</td>
			<td width="190" height="130" align='center' bgcolor="#C0C0C0"class="show"><a href="sub_course_sem.php" class="shows">Subject Record</a></td>
		</tr>
		<tr><td colspan="8">&nbsp;</td></tr>
		
		<tr>
			<td width="190" height="130" align="center" bgcolor="#F78575" class="show"><a href="student_master.php" class="shows">Student Entry</a></td>
			<td>&nbsp;</td>
			<td width="190" height="130" align="center" bgcolor="#009999" class="show"><a href="attendance_master.php" class="shows">Attendance</a></td>
			<td>&nbsp;</td>
			<td width="190" height="130" align="center" bgcolor="#996666" class="show"><a href="marks.php" class="shows">Marks</a></td>
			<td>&nbsp;</td>
			<td width="190" height="130" align="center" bgcolor="#B8D87C" class="show"><a href="events.php" class="shows">Events Entry</a></td>
		</tr>
		<tr><td colspan="8">&nbsp;</td></tr>
		
		<tr>
			<td width="190" height="130" align="center" bgcolor="#996699"class="show"><a href="marksheet.php" class="shows">Marksheet</a></td>
			<td>&nbsp;</td>
			<td width="190" height="130"align="center" bgcolor="#CC9933" class="show"><a href="search.php" class="shows">Search Records</a></td>
			<td>&nbsp;</td>
		    <td width="190" height="130" align="center" bgcolor="#FF2020" class="show"><a href="delete.php" class="shows">Delete Records</a></td>
			<td>&nbsp;</td>
            <td width="190" height="130" align="center" bgcolor="#5E5EFF" class="show"><a href="Logout.php" class="shows">Logout</a></td>
        </tr>
         </table>	   </td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
</div>
</body>
</html>
