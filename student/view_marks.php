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
<!--
.style1 {color: #00CCCC}
.style2 {color: #CC3399}
.style4 {color: #00CCCC; font-size: 18; }
.style5 {
	color: #330033;
	font-weight: bold;
}
.style7 {color: #00CCCC; font-size: 24px; }
.style9 {color: #000000}
.style16 {color: #00FFCC; font-size: 18px;}
.style18 {color: #000000; font-weight: bold; }
.style17 {font-size: 18px; color: #FF3300;}
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
<p align="right" class="style16 style2"><span class="style17">Welcome <?php echo $_SESSION['sname'];?></span></p>
</div>
<div id="banner">
<form id="form1" name="form1" method="POST" action="">
<table width="100%" border="0" align="center" >
				<tr>
				  <td colspan="3" align="left"><span class="style1"> </span>
				    <h2 align="left" class="style7"><span class="style29">Your Marks </span></h2>
				    <span class="style4">
				   </span><span class="style4">
				     <p class="style1">&nbsp;</p>
			      </span></p></td></tr>
				<?php 
					$str="select * from student_details where student_id='$_SESSION[sid]'";
					$result=mysql_query($str);
					$row= mysql_fetch_array($result);
				
				?>
				 <tr>
                  <td width="182" height="32" align="left"><span class="style18">Name </span></td>
				  <td width="35"><span class="style9">:</span></td>
                  <td width="593" colspan="2" align="left"><span class="style9"><?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name'];?></span></td>
                </tr>
				 <tr>
                  <td width="182" height="32" align="left"><span class="style18">Father's Name </span></td>
				  <td><span class="style9">:</span></td>
                  <td colspan="2" align="left"><span class="style9"><?php echo $row['father_name']?></span></td>
                </tr>
				 <tr>
				 <td width="182" height="32" align="left"><span class="style18">Course </span></td>
				 <td><span class="style9">:</span></td>
				 <td colspan="2">
				   <span class="style9">
				   <?php
	       		 	$c=$row['course_no'];
					$str2="select course_name from course where course_no = $c";
					$result2=mysql_query($str2);
					while($row2= mysql_fetch_array($result2))
		 	 		{ 
			     		echo $row2['course_name'];
					}?>
				   </span> </td>
                </tr>
				  <tr>
                  <td width="182" height="32" align="left"><span class="style18">Semester </span></td>
				  <td><span class="style9">:</span></td>
                  <td colspan="2" align="left"><span class="style9"><?php echo $row['semester'];?></span></td>
                </tr>
	  </table>
				<br/>
				<br/>
				<br/>
			<table align="center" border="1" width="90%" cellpadding="0" cellspacing="0">
				 <tr>
				 <td width="173" height="34" align="center"><span class="style5 style9">Subject Code</span></td>
				 <td align="center"><span class="style5 style9">Subject Name</span></td>
				 <td align="center"><span class="style5 style9">Marks</span></td>
				 </tr>
				 <?php 
				 $strs="SELECT * FROM mark_master mm, marks_details md, subject sd WHERE mm.student_id ='$_SESSION[sid]' AND mm.marks_id = md.marks_id AND sd.subject_no=md.subject_no" ;
				$results=mysql_query($strs);
				while($rows= mysql_fetch_array($results))
				{
				?>	
				 <tr>
                  <td height="35" align="center"><span class="style9">
                  <?php  echo $rows['subject_no']; ?>
                  </span>
                  <td width="376" align="left"><span class="style9">
                  <?php  echo $rows['subject_name']; ?>
                  </span></td>
                  <td width="136"  align="center"><span class="style9"><?php echo $rows['marks']; ?></span></td>
              </tr>
			 <?php } ?>
			   <tr>
				<td height="32" colspan="2" align="center"><span class="style18">Total</span></td>
				<?php 
				$str31="SELECT * FROM mark_master mm, marks_details md WHERE mm.student_id = '$_SESSION[sid]' AND mm.marks_id = md.marks_id";
			   $result31=@mysql_query($str31);
			   $row31= @mysql_fetch_assoc($result31);
				$str32="select SUM(marks) from marks_details where marks_id='$row31[marks_id]'";
			   $result32=@mysql_query($str32);
		       while($row32= @mysql_fetch_assoc($result32))
		 	   {  
			   	$total_marks=$row32['SUM(marks)'];
				?>
				<td align="center" >
				  <span class="style18"><?php echo $total_marks;?></span></td>
			  </tr>
				<?php
				 } 
				 ?>
      </table>
</form>
</div>
</div>
</body>
</html>