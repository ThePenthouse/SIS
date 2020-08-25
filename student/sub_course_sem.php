<?php
include "config.php";
include "connection/connection.php";
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title;?></title>
<script type="text/javascript" src="js/sub_course_sem.js"></script>
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
.style16 {color: #00FFCC; font-size: 16px;}
.style18 {font-size: 24px; color: #FF3300; font-weight: bold; font-family: "Times New Roman", Times, serif; }
.style22 {font-size: 18px}
.style29 {font-size: 24px; color: #FFFFFF; font-weight: bold; font-family: "Times New Roman", Times, serif; text-shadow: 5px 5px 3px black;}
.style30 {color: #000000}
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
           <td align="left"><p class="style18"><span class="style29">Subject Records</span></p>
             </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="138">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center">
		<form id="form1" name="form1" method="POST" action="" onSubmit="return valid()">
          <table width="100%" border="0" align="center">
            <tr>
              <td width="125" align="left"><span class="style30">Course Name</span> </td>
              <td width="190" align="left"><span class="style30">
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
              <td width="98"align="left"><span class="style30">Semester</span></td>
              <td width="344"><span class="style30">
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
                  </select>
                
                <input type="submit" name="Submit" value="Submit" id="sbcl"/>
              </span></td>
            </tr>
          </table>
        </form>		</td>
      </tr>
	  </table>	  </td>
	  </tr>
    </table>
      <tr>
       
    </tr>
      <tr>
     	<td align="center">
		  <form name="form2" method="post" action="">
		    <div align="center">
		      <table width="85%" height="51" align="left">
		        <tr align="left">
		          <td width="59%" align="left"><p class="style2 style30">Subject Name </p>
	              <p class="style2 style30">&nbsp;</p></td>
                  <td width="41%" align="left"><p class="style2 style30">Subject Code </p>
                  <p class="style2 style30">&nbsp;</p></td>
                </tr>
		        <?php
		     if(isset($_POST['Submit']))
               {  $semester=$_POST['semester'];
			      $course_no=$_POST['course_name'];
				  
				  
			   }
			  $str2="select * from subject where semester = $semester and course_no = $course_no";
			   $result2=@mysql_query($str2);
			   $c = 1;
		    while($row= @mysql_fetch_assoc($result2))
		 	 {    
				 ?>
		        <tr>
		          <td align="left">
		            <span class="style30">
		            <input type="hidden" name="student_id<?php echo $c;?>" value="<?php echo $row['subject_no']?>">
		            <?php  echo $row['subject_name']; ?>				
	              </span></td>
  
                <td align="left">
                  <span class="style30">
                  <input type="hidden" name="student_id<?php echo $c;?>" value="<?php echo $row['subject_no']?>">
                  <?php  echo $row['subject_no']; ?>				
                  </span></td>
                </tr>
		        <?php
			  $c++;
		  }
		  ?>
              </table>  
	        </div>
		    <p align="center">&nbsp;</p>
		  </form></td>
  </tr>
</table>
</div>
</div>
</body>
</html>
