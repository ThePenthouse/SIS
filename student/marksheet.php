<?php
include "config.php";
include "connection/connection.php";
function get_sub($str)
{
	$gsql = mysql_query("select * from subject where subject_no='$str'");
	$gres = mysql_fetch_assoc($gsql);
	$sname = $gres['subject_name'];
	return $sname;
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title;?></title>
<style type="text/css">
<!--
.style2 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
<style type="text/css">
<!--
.style18 {font-size: 24px; color: #FF3300; font-weight: bold; font-family: "Times New Roman", Times, serif; }
.style16 {color: #00FFCC; font-size: 16px;}
.style29 {font-size: 24px; color: #FFFFFF; font-weight: bold; font-family: "Times New Roman", Times, serif; text-shadow: 5px 5px 3px black;}
.style17 {font-size: 18px; color: #FF3300;}
.style30 {color: #000000}
.style33 {color: #000000; font-weight: bold; }
-->
</style>
<script type="text/javascript" src="js/marksheet.js"></script>
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
           <td align="left"><p class="style18"><span class="style29">Marksheet</span></p>
             <p class="style18">&nbsp;</p>
            </td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
    </table>
	</td>
  </tr>
  <tr>
    <td height="138" align="left"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
        <td align="left"><form id="form1" name="form1" method="POST" onSubmit="return valid()">
          <table width="100%" height="20%" border="0" align="left">
            <tr>
              <td width="123" align="left"><span class="style30">Course Name</span> </td>
              <td width="113" align="left"><span class="style30">
                <select name="course_name" id="course_name" onChange="get_sem(this.value)">
                  <option value="0">... Course ... </option>
                  <?php
		 	$str2="select * from course";
			$result2=mysql_query($str2);
		    while($row= mysql_fetch_assoc($result2))
		 	 { 
			 	if(isset($_GET['C']))
				{
					$C = $_GET['C'];
				}elseif(isset($_GET['CC']))
				{
					$C = $_GET['CC'];
				}
		  	?>
                  <option value=<?php echo $row['course_no'];?> <?php if($C ==$row['course_no']){echo "selected";}?>>
                    <?php  echo $row['course_name'];?>
                    </option>
                  <?php
			 }
		 	 ?>
                </select>
              </span> </td>
              <td width="85"align="left"><span class="style30">Semester</span></td>
              <td width="113" align="left"><span class="style30">
                <select name="semester" id="semester" onChange="get_stud(this.value)">
                  <option value="0">... Semester ... </option>
                  <?php
		   if(isset($_GET['C']) || isset($_GET['CC']))
		   {
		 		if(isset($_GET['C']))
				{
					$C = $_GET['C'];
				}elseif(isset($_GET['CC']))
				{
					$C = $_GET['CC'];
				}
			$str3="select * from course where course_no='$C'";
			$result3=mysql_query($str3); 
			$row3=mysql_fetch_assoc($result3);
			for($i = 1; $i<= $row3['semester']; $i++)
			{
			?>
                  <option value=<?php echo $i;?> <?php if(isset($_GET['k'])){if($_GET['k'] == $i){echo "selected";}}?>><?php echo $i;?></option>
                  <?php 
				}
			 }
			 ?>
                </select>
              </span></td>
              <td width="123"align="left"><span class="style30">Student Name</span> </td>
				<td width="113"align="left"><span class="style30">
				  <select name="student_name" id="student_name" >
				    <option value="0">... Select Name ...</option>
				    <?php
				if(isset($_GET['CC']) && isset($_GET['k']))
		   		{
		 		$str21="select * from student_details where course_no='$_GET[CC]' and semester='$_GET[k]'";
				$result21=mysql_query($str21);
		    	while($row21= mysql_fetch_assoc($result21))
		 		 { 
		  		?>
				    <option value=<?php echo $row21['student_id'];?> <?php if($_POST['student_name'] == $row21['student_id']){echo "selected";}?>>
				      <?php  echo $row21['first_name']." ".$row21['middle_name']." ".$row21['last_name'];?>
				      </option>
				    <?php
				  }
			 }
		 	 ?>
				    </select>
				  </span> </td>
				<td width="70" align="left">
		      <input name="Submit" type="submit" id="sbcl" value="Submit" /></td>
            </tr>
			 <tr>
        		<td colspan="7" align="center"><span class="style30"></span></td>
      		</tr>
			<tr>
        		<td colspan="7" align="center"><span class="style30"></span></td>
      		</tr>
          </table>
        </form></td>
      </tr>
      </table>
	  </td>
    </tr>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	  
	  <tr>
	  <td>
	  <form name="form2" method="post" action="">
		      <table width="80%" height="45" border="1" align="center" cellpadding="0" cellspacing="0">
		        <tr height="45">
		          <td width="26%" height="45" align="center"><p class="style2 style30">Subject Code </p></td>
                  <td width="55%"  height="45" align="center"><p class="style2 style30">Subject Name </p></td>
				  <td width="19%"  height="45" align="center"><p class="style2 style30">Marks</p></td>
                </tr>
		        <?php
		     if(isset($_POST['Submit']))
               { 
			      $course_no=$_POST['course_name'];
				  $semester=$_POST['semester'];
				  $student_id=$_POST['student_name'];
				  
			  $str2="SELECT * FROM mark_master mm, marks_details md WHERE mm.student_id = '$student_id' AND mm.marks_id = md.marks_id";
			
			   $result2=@mysql_query($str2);
			   $result3=@mysql_query($str3);
		       while($row= @mysql_fetch_assoc($result2))
		 	   {   
			   		 
				 ?>
		        <tr>
		          <td  height="45" align="center"><span class="style30">
		          <?php  echo $row['subject_no']; ?>
                  </span></td>
  
                <td align="left"  height="45"><span class="style30">
                  <?php  echo get_sub($row['subject_no']); ?>
                </span></td>
				  
				<td align="center"  height="45"><span class="style30">
				  <?php  echo $row['marks']; ?>
				</span> </td>
				  <?php
				}
				?>
	            </tr>
		        <tr>
				<td  height="45" colspan="2" align="center"><span class="style33">Total</span></td>
				<?php 
				$str31="SELECT * FROM mark_master mm, marks_details md WHERE mm.student_id = '$student_id' AND mm.marks_id = md.marks_id";
			   $result31=@mysql_query($str31);
			   $row31= @mysql_fetch_assoc($result31);
				$str32="select SUM(marks) from marks_details where marks_id='$row31[marks_id]'";
			   $result32=@mysql_query($str32);
		       while($row32= @mysql_fetch_assoc($result32))
		 	   {  
			   	$total_marks=$row32['SUM(marks)'];
				?>
				<td align="center"  height="45">
				  <span class="style33"><?php echo $total_marks;?></span>				</td>
				</tr>
				<?php } 
				
				}?>
              </table>
	  </form>
	  </td>
	</tr>
	  </table>
  </div>
</div>
</body>
</html>

