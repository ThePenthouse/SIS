<?php
include "config.php";
include "connection/connection.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title;?></title>
<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
<style type="text/css">
<!--
.style16 {color: #000000; font-size: 14px;}
.style18 {font-size: 24px; color: #000000; font-weight: bold; font-family: "Times New Roman", Times, serif; }
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
<table width="80%" border="0" align="left">
  <tr>
    <td>
	<table align="left" width="80%" border="0" cellspacing="0" cellpadding="0">
      <tr>
           <td align="left"><p class="style18"><span class="style29">Search Records</span></p>
             <p class="style18" align="left">&nbsp;</p>
             <p class="style18" align="left">&nbsp;</p></td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<?php 

 echo"<form method='POST' action='' name='reg' onSubmit='return validate()'>";
 echo"<center><table width='80%' border='0' cellspacing='0' cellpadding='0' bordercolor='#000033' style='color:#000000; font-family:Verdana; font-size:14px;'  align='left'>
 <tr><td width='250' align='left'><b>Select Any One: <select name='sel'>
<option>Select Categary </option>";
 echo"<option value='student_id'>STUDENT ID</option>";
 echo"<option value='first_name'>FIRST NAME</option>";
 echo"<option value='course_no'>COURSE CODE</option>";
 echo"<option value='address'>ADDRESS</option>
<td><input type='text' name='ty'><input type='submit' name='se' value='search'> <input type='submit' name='se1' value='AllSearch'>";
echo"</td></tr></table></center></form>
</body></html>";

   $sel=$_POST['sel'];
   $ty=$_POST['ty'];

  if(isset($_POST['se']))
  {
   if($sel=="first_name")
   {
   $q1=mysql_query("select * from student_details where first_name='$ty'");
   echo"<center><table width='80%' border='1' cellspacing='0' cellpadding='0' bordercolor='#000033' style='color:#000000; font-family:Verdana; font-size:10px;'  align='left'>";
   echo"<tr style='font-weight:bold; background-color:gray; color:white;'>
           <td><center>STUDENT ID</center>
		   <td ><center>FIRST NAME</center>
		   <td><center>MIDDLE NAME</center>
		   <td><center>LAST NAME</center>
		   <td><center>COURSE</center>
		   <td><center>FATHER'S NAME</center>
		   <td><center>MOTHER'S NAME</center>
		   <td><center>DOB</center>
		   <td><center>ADDRESS</center>
		   <td><center>CONTACT NO</center>
		   <td><center>EMAIL</center></td>
	</tr>";

  while($rows=mysql_fetch_array($q1,MYSQL_ASSOC))
{
    $student_id=$rows['student_id'];
    $first_name=$rows['first_name'];
	$middle_name=$rows['middle_name'];
    $last_name=$rows['last_name'];
    $course_no=$rows['course_no'];
	$father_name=$rows['father_name'];
	$mother_name=$rows['mother_name'];
	$dob=$rows['dob'];
    $address=$rows['address'];
	$contact_no=$rows['contact_no'];
	$email_id=$rows['email_id'];
    echo"<tr style='background-color:#ebebeb'>
 		  <td><center>$student_id</center>
		  <td><center>$first_name</center>
		  <td><center>$middle_name</center>
		  <td><center>$last_name</center>
		  <td><center>$course_no</center>
		  <td><center>$father_name</center>
		  <td><center>$mother_name</center>
		  <td><center>$dob</center>
		  <td><center>$address</center>
		  <td><center>$contact_no</center>
		  <td><center>$email_id</center>
		  </td>
	</tr>";
}
 echo"</center>";
}
 if($sel=="student_id")
  {
$q2=mysql_query("select* from student_details where student_id='$ty'");
echo"<center><table width='80%' border='1' cellspacing='0' cellpadding='0' bordercolor='#000033' style='color:#000000; font-family:Verdana; font-size:10px;'  align='left'>";
   echo"<tr style='font-weight:bold; background-color:gray; color:white;'>
           <td><center>STUDENT ID</center>
		   <td><center>FIRST NAME</center>
		   <td><center>MIDDLE NAME</center>
		   <td><center>LAST NAME</center>
		   <td><center>COURSE</center>
		   <td><center>FATHER'S NAME</center>
		   <td><center>MOTHER'S NAME</center>
		   <td><center>DOB</center>
		   <td><center>ADDRESS</center>
		   <td><center>CONTACT NO</center>
		   <td><center>EMAIL</center></td>
	</tr>";
 
  while($rows=mysql_fetch_array($q2,MYSQL_ASSOC))
{
    $student_id=$rows['student_id'];
    $first_name=$rows['first_name'];
	$middle_name=$rows['middle_name'];
    $last_name=$rows['last_name'];
    $course_no=$rows['course_no'];
	$father_name=$rows['father_name'];
	$mother_name=$rows['mother_name'];
	$dob=$rows['dob'];
    $address=$rows['address'];
	$contact_no=$rows['contact_no'];
	$email_id=$rows['email_id'];
    echo"<tr style='background-color:#ebebeb'>
 		  <td><center>$student_id</center>
		  <td><center>$first_name</center>
		  <td><center>$middle_name</center>
		  <td><center>$last_name</center>
		  <td><center>$course_no</center>
		  <td><center>$father_name</center>
		  <td><center>$mother_name</center>
		  <td><center>$dob</center>
		  <td><center>$address</center>
		  <td><center>$contact_no</center>
		  <td><center>$email_id</center>
		  </td>
	</tr>";
}
 echo"</center>";
}
if($sel=="course_no")
  {
$q3=mysql_query("select* from student_details where course_no='$ty'");
echo"<center><table width='80%' border='1' cellspacing='0' cellpadding='0' bordercolor='#000033' style='color:#000000; font-family:Verdana; font-size:10px;'  align='left'>";
   echo"<tr style='font-weight:bold; background-color:gray; color:white;'>
           <td><center>STUDENT ID</center>
		   <td><center>FIRST NAME</center>
		   <td><center>MIDDLE NAME</center>
		   <td><center>LAST NAME</center>
		   <td><center>COURSE</center>
		   <td><center>FATHER'S NAME</center>
		   <td><center>MOTHER'S NAME</center>
		   <td><center>DOB</center>
		   <td><center>ADDRESS</center>
		   <td><center>CONTACT NO</center>
		   <td><center>EMAIL</center></td>
	</tr>";

  while($rows=mysql_fetch_array($q3,MYSQL_ASSOC))
{
    $student_id=$rows['student_id'];
    $first_name=$rows['first_name'];
	$middle_name=$rows['middle_name'];
    $last_name=$rows['last_name'];
    $course_no=$rows['course_no'];
	$father_name=$rows['father_name'];
	$mother_name=$rows['mother_name'];
	$dob=$rows['dob'];
    $address=$rows['address'];
	$contact_no=$rows['contact_no'];
	$email_id=$rows['email_id'];
    echo"<tr style='background-color:#ebebeb'>
 		  <td><center>$student_id</center>
		  <td><center>$first_name</center>
		  <td><center>$middle_name</center>
		  <td><center>$last_name</center>
		  <td><center>$course_no</center>
		  <td><center>$father_name</center>
		  <td><center>$mother_name</center>
		  <td><center>$dob</center>
		  <td><center>$address</center>
		  <td><center>$contact_no</center>
		  <td><center>$email_id</center>
		  </td>
	</tr>";
}
 echo"</center>";
}
if($sel=="address")
  {
$q4=mysql_query("select* from student_details where address='$ty'");
echo"<center><table width='80%' border='1' cellspacing='0' cellpadding='0' bordercolor='#000033' style='color:#000000; font-family:Verdana; font-size:10px;'  align='left'>";
   echo"<tr style='font-weight:bold; background-color:gray; color:white;'>
           <td><center>STUDENT ID</center>
		   <td><center>FIRST NAME</center>
		   <td><center>MIDDLE NAME</center>
		   <td><center>LAST NAME</center>
		   <td><center>COURSE</center>
		   <td><center>FATHER'S NAME</center>
		   <td><center>MOTHER'S NAME</center>
		   <td><center>DOB</center>
		   <td><center>ADDRESS</center>
		   <td><center>CONTACT NO</center>
		   <td><center>EMAIL</center></td>
	</tr>";

  while($rows=mysql_fetch_array($q4,MYSQL_ASSOC))
{
    $student_id=$rows['student_id'];
    $first_name=$rows['first_name'];
	$middle_name=$rows['middle_name'];
    $last_name=$rows['last_name'];
    $course_no=$rows['course_no'];
	$father_name=$rows['father_name'];
	$mother_name=$rows['mother_name'];
	$dob=$rows['dob'];
    $address=$rows['address'];
	$contact_no=$rows['contact_no'];
	$email_id=$rows['email_id'];
    echo"<tr style='background-color:#ebebeb'>
 		  <td><center>$student_id</center>
		  <td><center>$first_name</center>
		  <td><center>$middle_name</center>
		  <td><center>$last_name</center>
		  <td><center>$course_no</center>
		  <td><center>$father_name</center>
		  <td><center>$mother_name</center>
		  <td><center>$dob</center>
		  <td><center>$address</center>
		  <td><center>$contact_no</center>
		  <td><center>$email_id</center>
		  </td>
	</tr>";
}
 echo"</center>";
}

}
if(isset($_POST['se1']))
 {
$q5=mysql_query("select * from student_details");
echo"<center><table width='80%' border='1' cellspacing='0' cellpadding='0' bordercolor='#000033' style='color:#000000; font-family:Verdana; font-size:10px;'  align='left'>";
   echo"<tr style='font-weight:bold; background-color:gray; color:white;'>
           <td><center>STUDENT ID</center>
		   <td><center>FIRST NAME</center>
		   <td><center>MIDDLE NAME</center>
		   <td><center>LAST NAME</center>
		   <td><center>COURSE</center>
		   <td><center>FATHER'S NAME</center>
		   <td><center>MOTHER'S NAME</center>
		   <td><center>DOB</center>
		   <td><center>ADDRESS</center>
		   <td><center>CONTACT NO</center>
		   <td><center>EMAIL</center></td>
	</tr>";

  while($rows=mysql_fetch_array($q5,MYSQL_ASSOC))
{
    $student_id=$rows['student_id'];
    $first_name=$rows['first_name'];
	$middle_name=$rows['middle_name'];
    $last_name=$rows['last_name'];
    $course_no=$rows['course_no'];
	$father_name=$rows['father_name'];
	$mother_name=$rows['mother_name'];
	$dob=$rows['dob'];
    $address=$rows['address'];
	$contact_no=$rows['contact_no'];
	$email_id=$rows['email_id'];
    echo"<tr style='background-color:#ebebeb'>
 		  <td><center>$student_id</center>
		  <td><center>$first_name</center>
		  <td><center>$middle_name</center>
		  <td><center>$last_name</center>
		  <td><center>$course_no</center>
		  <td><center>$father_name</center>
		  <td><center>$mother_name</center>
		  <td><center>$dob</center>
		  <td><center>$address</center>
		  <td><center>$contact_no</center>
		  <td><center>$email_id</center>
		  </td>
	</tr>";
}
 echo"</center>";
}
?>
</div>
</div>
</body>
</html>