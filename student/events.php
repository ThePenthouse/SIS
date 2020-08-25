<?php
include "config.php";
include "connection/connection.php";
if(isset($_POST['Submit']))
{   
		$event_name=$_POST['event_name'];
		$event_desc=$_POST['event_desc'];
		$event_date=$_POST['event_date'];
		$event_pic=$_POST['event_pic'];
			
		$st="insert into events(event_name,event_desc,event_date,event_pic) values('$event_name','$event_desc','$event_date','$event_pic')";
		$result=mysql_query($st);					
		if($result)
					{
						echo "<script>alert('Data Successfully Uploaded');
						location.replace('events.php?');
						</script>";
					}
}
		
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title;?></title>
<script type="text/javascript" src="js/events.js"></script>
<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
<style type="text/css">
<!--
.style29 {font-size: 24px; color: #FFFFFF; font-weight: bold; font-family: "Times New Roman", Times, serif; text-shadow: 5px 5px 3px black;}
.style17 {font-size: 18px; color: #FF3300;}
.style4 {color: #000000}
-->
</style>
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
<div id="header"><div class="img">
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
  <p align="right" class="style16 style22"><span class="style17">Welcome <?php echo $_SESSION['uname'];?></span></p>
  </div>
 <div id="banner">
<table width="71%" height="327" border="0" align="center">
  <tr>
    <td>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
           <td align="left"><p class="style18"><span class="style29">Events Entry</span></p>
             <p class="style18">&nbsp;</p>
             </td>
      </tr>
     
    </table></td>
  </tr>
     <tr>
  <td height="138" align="left"><form id="form1" name="form1" method="POST" action="" onSubmit="return valid()">
      <table width="86%" height="327" border="0" align="left" cellpadding="0" cellspacing="0">
 <tr>
      <td width="34%" height="39" align="left"><span class="style4">Event Name</span></td>
      <td width="11%" align="center"><span class="style4">:</span></td>
      <td width="55%" align="left"><input name="event_name" type="text" id="event_name"></td>
    </tr>
    <tr>
      <td width="34%" height="39" align="left"><span class="style4">Event Description</span></td>
      <td width="11%" align="center"><span class="style4">:</span></td>
      <td width="55%" align="left"><span class="style4">
        <textarea name="event_desc" id="event_desc"></textarea>
      </span></td>
    </tr>
    <tr>
      <td width="34%" height="39" align="left"><span class="style4">Event Date</span></td>
      <td width="11%" align="center"><span class="style4">:</span></td>
      <td width="55%" align="left"><input name="event_date" type="text" id="event_date"></td>
    </tr>
    <tr>
      <td width="34%" height="39" align="left"><span class="style4">Select Photos</span></td>
      <td width="11%" align="center"><span class="style4">:</span></td>
      <td width="55%" align="left"><input name="event_pic" type="file" id="event_pic"></td>
    </tr>
    <tr>
      <td width="34%" height="39" align="left"><input name="Submit" type="submit" id="sbcl" value="Submit"></td>
      <td align="left" colspan="2"><span class="style4"></span></td>
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
