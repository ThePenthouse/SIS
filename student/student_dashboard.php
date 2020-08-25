<?php
include "configstud.php";
?>
<html>
<style type="text/css">
.show{
color:rgba(0,0,0,0.5);
box-shadow:inset -2px -2px rgba(0,0,0,0.5);
border-radius:5px;
font-size:16px;
}
.show:hover{
background-color:rgba(255,0,255,0.1);
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
.style16 {color: #00FFCC; font-size: 18px;}
.style24 {color: #FF0000; font-size: 20px; }
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
<p align="right" class="style16"><span class="style24">Welcome <?php echo $_SESSION['sname'];?></span></p>
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
			<tr><td colspan="5">&nbsp;</td></tr>
		<tr>
			<td width="190" height="130" align="center" bgcolor="#64D9FF" class="show"><a href="student_dashboard.php" class="shows">Home</a></td>
			<td>&nbsp;</td>
			<td width="190" height="130"align="center" bgcolor="#FD9C5B" class="show"><a href="view_prof.php" class="shows">View Profile </a></td>
			<td>&nbsp;</td>
		    <td width="190" height="130" align="center" bgcolor="#F17089" class="show"><a href="view_sub.php" class="shows">View Subjects </a></td>
			<td>&nbsp;</td>
			</tr>
			<tr><td colspan="5">&nbsp;</td></tr>
			<tr><td colspan="5">&nbsp;</td></tr>
			<tr><td colspan="5">&nbsp;</td></tr>
			<tr>
            <td width="190" height="130" align="center" bgcolor="#CB63F8" class="show"><a href="view_marks.php" class="shows">View Marks</a></td>
       		<td>&nbsp;</td>
            <td width="190" height="130" align="center" bgcolor="#8CFBC4" class="show"><a href="view_events.php" class="shows">View Events</a></td>
			<td>&nbsp;</td>
            <td width="190" height="130" align="center" bgcolor="#4242FF" class="show"><a href="studlogout.php" class="shows">Logout</a></td>
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
