<?php
include "config.php";
include "connection/connection.php";
$today = date('Y-m-d');
if(isset($_POST['Submit2']))
{   
		$cnt = $_POST['cnt'];
		for($c = 1; $c < $cnt; $c++)
		{
			$student_id = $_POST['student_id'.$c];
		 	$attendance=$_POST['attendance'.$c];
			if($attendance == "p")
			{
				$str="insert into attendance(student_id,attendance_date,attendance_status)
				values('$student_id','$today','$attendance')";
				$result=mysql_query($str);
				if($result)
				{
					echo "<script>alert('Data Inserted');
					location.replace('attendance_master.php?');
					</script>";
				}
			}
		}
}
			


 ?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title;?></title>
<script type="text/javascript" src="js/attendance_master.js"></script>	
<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
<style type="text/css">
<!--
.style18 {font-size: 24px; color: #FF3300; font-weight: bold; font-family: "Times New Roman", Times, serif; }
.style16 {color: #00FFCC; font-size: 16px;}
.style30 {
	font-size: 20px;
	color: #FF3300;
}
.style33 {color: #000000; font-weight: bold; }
.style34 {color: #000000}
.style35 {font-size: 24px; color: #3333CC; font-weight: bold; font-family: "Times New Roman", Times, serif; text-shadow: 5px 5px 3px black;}
.style29 {font-size: 24px; color: #FFFFFF; font-weight: bold; font-family: "Times New Roman", Times, serif; }
.style36 {font-size: 18px; color: #FF3300;}
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
<p align="right" class="style16 style30"><span class="style36">Welcome <?php echo $_SESSION['uname'];?></span></p>
</div>
<div id="banner">
<table width="100%" border="0" align="left">
  <tr>
    <td>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left">
          <p class="style35"><span class="style29">Attendance Entry </span></p>
          <p class="style18">&nbsp;</p>
		  <p class="style18">&nbsp;</p></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="138"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center"><form id="form1" name="form1" method="POST" action="" onSubmit="return valid()">
          <table width="97%" border="0" align="left">
            <tr>
              <td width="130" align="left"><span class="style4 style34">Course Name </span></td>
              <td width="140" align="left"><span class="style4 style34">
                <select name="course_name" id="course_name" onChange="get_sem(this.value)">
                  <option value="0">... Course ... </option>
                  <?php
		 	$str2="select * from course";
			$result2=mysql_query($str2);
		    while($row= mysql_fetch_assoc($result2))
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
              <td width="91" align="left"><span class="style4 style34">Semester</span></td>
              <td width="134" align="left"><span class="style4 style34">
                <select name="semester" id="semester" >
                  <option value="0">... Semester ... </option>
                  <?php
		   if(isset($_GET['C']) && $_GET['C'] > 0)
		   {
		 	$str3="select * from course where course_no='$_GET[C]'";
			echo $str3;
			$result3=mysql_query($str3); 
			$row3=mysql_fetch_assoc($result3);
			for($i = 1; $i<= $row3['semester']; $i++)
			{
			?>
                  <option value=<?php echo $i;?> <?php if(isset($_POST['semester'])){if($_POST['semester'] == $i){echo "selected";}}?>><?php echo $i;?></option>
                  <?php 
				}
			 }
			 ?>
                  </select></span></td>
                <td width="235">
                <input name="Submit" type="submit" id="sbcl" value="Submit"/>            </td>
            </tr>
          </table>
        </form></td>
      </tr>
      <tr>
        <td align="left"></td>
      </tr>
      <tr>
        <td>
		  <form name="form2" method="post" action="">
		    <p align="center">&nbsp;</p>
		    <p align="center">&nbsp;</p>
		    <p align="center">&nbsp;</p>
		    
		      <div align="center">
		        <table width="85%" border="0" align="left" cellpadding="0" cellspacing="0">
		          <tr>
		            <td width="31%" height="40"><p class="style33">Student Name </p>
		              <p class="style33">&nbsp;</p></td>
                        <td width="23%" align="center"><p class="style33">Semester</p>
                        <p class="style33">&nbsp;</p></td>
                        <td width="23%" align="center"><p class="style33">Date</p>
                        <p class="style33">&nbsp;</p></td>
                        <td width="23%" align="center"><p class="style33">Attendance</p>
                        <p class="style33">&nbsp;</p></td>
                      </tr>
		          <?php
		     if(isset($_POST['Submit']))
               {  $semester=$_POST['semester'];
			      $course_no=$_POST['course_name'];
				  
				  
			   }
			  $str2="select * from student_details where semester = $semester and course_no = $course_no";
			   $result2=@mysql_query($str2);
			   $c = 1;
		    while($row= @mysql_fetch_assoc($result2))
		 	 {    
				 $stsql = "select * from attendance where student_id='$row[student_id]' and attendance_date='$today'";
				 $strec = mysql_query($stsql);
				 $stnum = mysql_num_rows(@$strec);
				 $stres = mysql_fetch_assoc(@$strec);
				 ?>
		          <tr>
		            <td height="40">
		              <span class="style34">
		              <input type="hidden" name="student_id<?php echo $c;?>" value="<?php echo $row['student_id']?>">
		              <?php  echo $row['first_name']." ".$row['middle_name']." ".$row['last_name']; ?>				  
		              </span></td>
        
                <td align="center" height="40"><span class="style34"><?php echo $row['semester']; ?></span> </td>
                        <td align="center"><span class="style34"><?php echo $today ;?></span> </td>
                        <td align="center"><span class="style34">
                          <?php if(@$stnum > 0){echo strtoupper($stres['attendance_status']);}else{?>
                          <input name="attendance<?php echo $c;?>"  type="checkbox"  id="attendance<?php echo $c;?>" value="p"  >
                          <?php }?>
                        </span></td>
                      </tr>
		          <?php
			  $c++;
		  }
		  ?>
		          <td align="left" height="45"><p>&nbsp;
		            </p>
		              <p>
		                <input type="submit" name="Submit2" value="Submit" id="sbcl1">
		                <input name="cnt" type="hidden" id="cnt" value="<?php echo $c;?>">
		                  </p></td>
                      <tr align="left"></tr>
		          </table>
		        </div>
		      <p align="center">&nbsp;</p>
		  </form>		  </td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
</div>
</body>
</html>
