<?php
include "config.php";
include "connection/connection.php";
if(isset($_POST['Submit']))
{
	$course_name=$_POST['course_name'];
	$course_duration=$_POST['duration'];
	$course_status=$_POST['status'];
	$semester=$_POST['semester'];
	$str="insert into course(course_name,course_duration,course_status,semester)values('$course_name','$course_duration','$course_status','$semester')";
	$result=mysql_query($str);
	if($result)
	{
		echo "<script>alert('Record Successfully Inserted');
		location.replace('course_master.php?');
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
.style16 {color: #00FFCC; font-size: 16px;}
.style28 {font-size: 14; color: #000000; }
.style29 {font-size: 24px; color: #FFFFFF; font-weight: bold; font-family: "Times New Roman", Times, serif; text-shadow: 5px 5px 3px black;}
.style37 {color: #000000}
.style17 {font-size: 18px; color: #FF3300;}
-->
</style>
<script type="text/javascript" src="js/course_master.js"></script>
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
  <p align="right" class="style16 style22"><span class="style17">Welcome <?php echo $_SESSION['uname'];?></span></p>

  </div>
 <div id="banner">
<table width="100%" border="0" align="left">
  <tr>
    <td>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
           <td align="left"><p class="style18"><span class="style29">Course Entry</span></p>
             <p class="style18">&nbsp;</p>
            </td>
      </tr>
    </table></td>
  </tr>
  <tr>
  <td height="138" align="left">
  <form id="form1" name="form1" method="POST" action="" onSubmit="return valid()">
      <table width="72%" height="327" border="0" align="left" cellpadding="0" cellspacing="0">
 <tr>
            <td width="170" height="39" align="left"><span class="style4 style37">Course Name </span></td>
              <td width="60" align="center"><span class="style28">:</span></td>
              <td width="328" align="left"><input name="course_name" type="text"/></td>
            </tr>
          <tr>
            <td height="39" align="left"><span class="style4 style37">Course Duration </span></td>
              <td align="center"><span class="style28">:</span></td>
              <td align="left"><span class="style28">
                <select name="duration" id="duration">
				 <option value="0">...Course Duration...</option>
                  <?php		  		
					for($i=1;$i<=6;$i++)
		 		 {?>
                  <option value=<?php echo $i?>><?php echo $i?></option>
                  <?php }?>
                </select>
              </span> </td>
            </tr>
          <tr>
            <td height="39" align="left"><span class="style4 style37">Semester </span></td>
              <td align="center"><span class="style28">:</span></td>
              <td align="left"><span class="style28">
                <select name="semester" id="semester">
				 <option value="0">...Semester...</option>
                  <?php		  		
					for($i=1;$i<=8;$i++)
		 		 {?>
                  <option value=<?php echo $i?>><?php echo $i?></option>
                  <?php }?>
                </select>
              </span></td>
            </tr>
          <tr>
            <td height="39" align="left"><span class="style4 style37">Course Status </span></td>
              <td align="center"><span class="style28">:</span></td>
              <td align="left"><span class="style28">
                <select name="status" id="status">
				 <option value="0">...Status...</option>
                  <option value="1">Active</option>
                  <option value="2">Inactive</option>
                </select>
              </span></td>
            </tr>
          <tr>
            <td height="39" colspan="3"><span class="style4 style37">
              <input type="submit" name="Submit" value="Submit" id="sbcl"/>
              <input name="Reset" type="reset" value="Reset" id="sbcl1"/>
            </span></td>
            </tr>
        </table>
	</form>	</td>
  </tr>
</table>
</div>
</div>
</body>
</html>
