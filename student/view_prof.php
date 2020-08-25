<?php
include "configstud.php";
include "connection/connection.php";
$str="select * from student_details where student_id='$_SESSION[sid]'";
$result=mysql_query($str);
$row= mysql_fetch_array($result);

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title;?></title>
<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
<style type="text/css">
<!--
.style2 {color: #CC3399}
.style4 {color: #00CCCC; font-size: 18; }
.style8 {color: #000000}
.style16 {color: #00FFCC; font-size: 18px;}
.style20 {color: #00CCCC}
.style22 {color: #330033; }
.style24 {color: #FF0000; font-size: 20px; }
.style30 {color: #FFFFFF}
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
<p align="right" class="style16 style2"><span class="style24">Welcome <?php echo $_SESSION['sname'];?></span></p>
</div>
<div id="banner">
 
<form id="form1" name="form1" method="POST" action="">
<table width="100%" height="20%" border="0" align="center">
				<tr>
				<td height="50" colspan="3" align="left">
				  <h2 align="left" class="style22"><span class="style29">Your Profile </span></h2>
				  <span class="style1">
				  <p align="left" class="style20">&nbsp;</p>
				  </span><span class="style4">
				 </span><span class="style4">
				 </span></p></td>
	    </tr>
				 <tr>
                  <td width="186" height="140" colspan="3" align="left"><p><img src="images/<?php echo $row['profile_pic'];?>" width="140" height="120" /></p>
                   <p>&nbsp;</p></td>
                </tr>
				<tr>
                  <td width="186" align="left"><span class="style8">Student Name </span></td>
				  <td width="43"><span class="style8">:</span></td>
                  <td width="474"><span class="style8"><?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name'];?></span></td>
                </tr>
                <tr>
                  <td width="186" height="26" align="left"><span class="style8">Course</span></td>
				  <td><span class="style8">:</span></td>
                  <td width="474">
				    <span class="style8">
				    <?php
	       		 	$c=$row['course_no'];
					$str4="select course_name from course where course_no = $c";
					$result4=mysql_query($str4);
					while($row2= mysql_fetch_array($result4))
		 	 		{ 
			     		echo $row2['course_name'];
					}?>
			      </span> </td>
                </tr>
                <tr>
                  <td width="186" align="left"><span class="style8">Semester</span></td>
				  <td><span class="style8">:</span></td>
                  <td width="474" align="left"><span class="style8"><?php echo $row['semester'];?></span></td>
                </tr>
                <tr>
                  <td width="186" align="left"><span class="style9 style8">Father's Name </span></td>
				  <td><span class="style8">:</span></td>
                  <td width="474" align="left"><span class="style8"><?php echo $row['father_name'];?></span></td>
                </tr>
                <tr>
                  <td width="186" align="left"><span class="style9 style8">Mother's Name </span></td>
				  <td><span class="style8">:</span></td>
                  <td width="474" align="left"><span class="style8"><?php echo $row['mother_name'];?></span></td>
                </tr>
                <tr>
                  <td align="left"><span class="style9 style8">Gender</span></td>
				  <td><span class="style8">:</span></td>
                  <td align="left"><span class="style8"><?php echo $row['gender'];?></span></td>
                </tr>
                <tr>
                  <td width="186" align="left"><span class="style9 style8">Date Of Birth</span></td>
				  <td><span class="style8">:</span></td>
                  <td width="474"><span class="style8"><?php echo $row['dob'];?></span></td>
                </tr>
                <tr>
                  <td width="186" align="left"><span class="style9 style8">Address</span></td>
				  <td><span class="style8">:</span></td>
                  <td width="474"><span class="style8"><?php echo $row['address'].", Pin -".$row['postal_code'];?></span></td>
                </tr>
                <tr>
                  <td width="186" align="left"><span class="style9 style8">Contact No </span></td>
				  <td><span class="style8">:</span></td>
                  <td width="474"><span class="style8"><?php echo $row['contact_no']?></span></td>
                </tr>
                <tr>
                  <td width="186" align="left"><span class="style9 style8">Alt Contact No </span></td>
				  <td><span class="style8">:</span></td>
                  <td width="474"><span class="style8"><?php echo $row['alt_contact_no'];?></span></td>
                </tr>
                <tr>
                  <td width="186" align="left"><span class="style9 style8">Email Id </span></td>
				  <td><span class="style8">:</span></td>
                  <td width="474"><span class="style8"><?php echo $row['email_id'];?></span></td>
                </tr>
      </table>
</form>
</div>
</div>
</body>
</html>