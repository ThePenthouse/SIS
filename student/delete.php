<?php
include "config.php";
include "connection/connection.php";
$student_id=$_POST['student_id'];
if(isset($_POST['submit']))
 {
 $del="delete from student_details where student_id='$student_id'";
 $result=mysql_query($del);
 if($result)
 {
  echo "<script>alert('Record Successfully Deleted');
		location.replace('delete.php?');
		</script>";
  }
else
{
echo "<script>alert('Record is not deleted');
		location.replace('delete.php?');
		</script>";
}
 }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title;?></title>
<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
<style type="text/css">
<!--
.style18 {font-size: 24px; color: #FF3300; font-weight: bold; font-family: "Times New Roman", Times, serif;}
.style19 {font-size: 18px; color: #FF3300;}
.style29 {font-size: 24px; color: #FFFFFF; font-weight: bold; font-family: "Times New Roman", Times, serif; text-shadow: 5px 5px 3px black;}
.style20 {color: #000000}
.style30 {color: #FFFFFF}
-->
</style>
<script type="text/javascript" src="js/delete.js"></script>
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
  <p align="right" class="style16 style22"><span class="style19">Welcome <?php echo $_SESSION['uname'];?></span></p>
  </div>
 <div id="banner">
<table width="100%" border="0" align="center">
  <tr>
    <td>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
           <td align="center"><p class="style18 style30">&nbsp;</p>
             <p class="style18"><span class="style29">Delete Records</span></p>
             <p class="style18">&nbsp;</p>             </td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="138" align="center">
	<form action="" method="POST" name="form1" id="form1" onSubmit="return valid()">
 		<table width="331" border="2" > 
			<tr>
				<td width="188"><span class="style20">ENTER STUDENT ID:</span></td>
				<td width="142"><input name="student_id" type="text" id="student_id" /></td>
			</tr>
			<tr>
				<td><span class="style20"></span></td>
				<td><input name="submit" type="submit" id="sbcl" value="DELETE"/></td>
			</tr>
 		</table>
	</form>
</td>
</tr>
</table>
</div>
</div>
</body>
</html>