<?php
include "config.php";
include "connection/connection.php";
if(isset($_POST['Submit']))
{
	$subject_no=$_POST['subject_no'];
	$subject_name=$_POST['subject_name'];
	$semester=$_POST['semester'];
	$subject_status=$_POST['status'];
	$course_no=$_POST['course_name'];
	$str="insert into subject(subject_no,subject_name,course_no,subject_status,semester)
	values('$subject_no','$subject_name','$course_no','$subject_status','$semester')";
	$result=mysql_query($str);
	if($result)
	{
		echo "<script>alert('Record Successfully Inserted');
		location.replace('subject_master.php?');
		</script>";
	}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title;?></title>
<script type="text/javascript" src="js/subject_master.js"></script>
<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
<style type="text/css">
<!--
.style18 {font-size: 24px; color: #FF3300; font-weight: bold; font-family: "Times New Roman", Times, serif; }
.style16 {color: #00FFCC; font-size: 16px;}
.style22 {font-size: 18px}
.style27 {color: #000000}
.style29 {font-size: 24px; color: #FFFFFF; font-weight: bold; font-family: "Times New Roman", Times, serif; text-shadow: 5px 5px 3px black;}
.style17 {font-size: 18px; color: #FF3300;}
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
<table width="100%" border="0" align="center">
  <tr>
    <td>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
           <td align="left"><p class="style18"><span class="style29">Subject Entry</span></p>
             <p class="style18">&nbsp;</p>
      </tr>
    
    </table></td>
  </tr>
  <tr>
    <td height="138" align="left"><form id="form1" name="form1" method="POST" action="" onSubmit="return valid()">
      <table width="61%" height="327" border="0" align="left" cellpadding="0" cellspacing="0">
        <tr>
          <td width="148" height="39" align="left"><span class="style4 style27">Course Name </span></td>
          <td width="40" align="center"><span class="style4 style27">:</span></td>
          <td width="285"><span class="style4 style27">
            <select name="course_name" id="course_name" onChange="get_sem(this.value)">
              <option value="0">... Course ... </option>
              <?php
		 	$str2="select * from course";
			$result2=mysql_query($str2);
		    while($row= mysql_fetch_array($result2))
		 	 { 
		  	?>
              <option value=<?php echo $row['course_no'];?> <?php if(isset($_GET['C'])){if($_GET['C'] ==$row['course_no']){echo "selected";}}?>>
                <?php  echo $row['course_name'];?>
                </option>
              <?php
			 }
		 	 ?>
            </select>
          </span> </td>
        </tr>
        <tr>
          <td width="148" height="39" align="left"><span class="style4 style27">Subject Name </span></td>
          <td width="40" align="center"><span class="style4 style27">:</span></td>
          <td width="285" align="left"><span class="style4 style27"><input name="subject_name" type="text" id="subject_name" /></span></td>
        </tr>
        <tr>
          <td width="148" height="39" align="left"><span class="style4 style27">Subject Code </span></td>
          <td width="40" align="center"><span class="style4 style27">:</span></td>
          <td width="285" align="left"><span class="style4 style27"><input name="subject_no" type="text" id="subject_no" /></span></td>
        </tr>
        <tr>
          <td height="39" align="left"><span class="style4 style27">Semester</span></td>
          <td align="center"><span class="style4 style27">:</span></td>
          <td align="left"><span class="style4 style27">
            <select name="semester" id="semester">
              <option value="0">... Semester ... </option>
              <?php
		   if(isset($_GET['C']) && $_GET['C'] > 0)
		   {
		 	$str3="select * from course where course_no='$_GET[C]'";
			echo $str3;
			$result3=mysql_query($str3); 
			$row3=mysql_fetch_array($result3);
			for($i = 1; $i <= $row3['semester']; $i++)
			{
			?>
              <option value=<?php echo $i;?>><?php echo $i;?></option>
              <?php 
				}
			 }
			 ?>
              </select>
          </span></td>
        </tr>
        <tr>
          <td height="39" align="left"><span class="style4 style27">Subject Status </span></td>
          <td align="center"><span class="style4 style27">:</span></td>
          <td align="left"><span class="style4 style27">
            <select name="status" id="status">
			 <option value="0">...Status... </option>
              <option value="1">Active</option>
              <option value="2">Inactive</option>
              </select>
          </span></td>
        </tr>
        <tr>
          <td height="39" colspan="3"><span class="style4"><span class="style4 style27">
            <input type="submit" name="Submit" value="Submit" id="sbcl" />
            <input name="Reset" type="reset" id="sbcl1" value="Reset" />
          </span></span></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</div>
</div>
</body>
</html>
