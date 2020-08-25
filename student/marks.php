<?php
include "config.php";
include "connection/connection.php";
if(isset($_POST['Submit2']))
{   
		$course_no=$_POST['cname'];
		$sem_id=$_POST['get_sem'];
		
			$j = $_POST['std_cnt'];
			for($xj = 1; $xj < $j; $xj++)
			{
				$student_id=$_POST['std_id'.$xj];
				
				$st="insert into mark_master(student_id,course_no,semester) values('$student_id','$course_no','$sem_id')";
				$result1=mysql_query($st);
				$mpk1=mysql_insert_id();
				$c=$_POST['sub_cnt'];
				for($xc = 1; $xc < $c; $xc++)
				{
					$sub_id=$_POST['sub_id'.$xc];
					$marks=$_POST['m'.$xj.$xc];
					$st1="insert into marks_details(marks_id,subject_no,marks) values('$mpk1','$sub_id','$marks')";
					$result2=mysql_query($st1);
					
				}
			
		    }
			if($xj == $j)
					{
						echo "<script>alert('Data Inserted');
						location.replace('marks.php?');
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
.style16 {color: #00FFCC; font-size: 18px;}
.style18 {font-size: 24px; color: #FF3300; font-weight: bold; font-family: "Times New Roman", Times, serif; }
.style23 {
	color: #000000;
	font-weight: bold;
}
.style17 {font-size: 18px; color: #FF3300;}
.style31 {color: #000000}
.style34 {font-weight: bold}
.style29 {font-size: 24px; color: #FFFFFF; font-weight: bold; font-family: "Times New Roman", Times, serif; text-shadow: 5px 5px 3px black;}
.style42 {color: #000000; font-size: 16px; }
-->
</style>
<script type="text/javascript" src="js/marks.js"></script>
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
           <td align="left"><p class="style18"><span class="style29">Marks Entry </span></p>
             <p class="style18">&nbsp;</p>
             <p class="style18">&nbsp;</p></td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
	<tr>
    <td height="138"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><form id="form1" name="form1" method="POST" action="" onSubmit="return valid()">
          <table width="99%" border="0" align="left" style="color:#003333">
            <tr>
              <td width="150" align="left"><span class="style42">Course Name </span></td>
              <td width="121" align="left"><span class="style42">
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
              <td width="112" align="left"><span class="style42">Semester</span></td>
              <td width="129" align="left"><span class="style42">
                <select name="semester" id="semester" >
                  <option value="0">... Semester ... </option>
                  <?php
		   if(isset($_GET['C']))
		   {
				
		 	$str3="select * from course where course_no='$_GET[C]'";
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
              </span> </td>
              <td width="233"><input name="Submit" type="submit" id="sbcl1" value="Submit"/></td>
            </tr>
          </table>
        </form></td>
      </tr>
     <tr>
        <td>&nbsp;</td>
      </tr> 
	  <tr>
        <td>&nbsp;</td>
      </tr> 
      <tr>
        <td>
		  <form name="form2" method="post" action="" onSubmit="return chk_val_sub()">
		    <table width="100%" height="145" border="0" align="left" >
              <tr>
                <td width="100%" height="37" align="left" style="color:#000000"><span class="style23">Student Name</span> </td>
				<?php
				if(isset($_POST['Submit']))
				{
					$semester = $_POST[semester];
					$course_no = $_POST[course_name];
				}
				 $str2="select * from subject where semester = $_POST[semester] and course_no = $_POST[course_name]";
				 $result2=@mysql_query($str2);
				 $l=1;
				while($row= @mysql_fetch_assoc($result2))
				{
				?>
                <td width="100%" height="37" align="center">
                  <span class="style4 style31 style34">
				  <?php  echo $row['subject_name']; ?>
				  <input name="sub_id<?php echo $l?>" type="hidden" value="<?php echo $row['subject_no']?>" >
                  </span>
			      <span class="style23">
			      <?php
			   $l++;
			   }
			   ?>
			      </span></td>
              </tr>
			   <?php
			   $std_sql = "select * from student_details where semester='$_POST[semester]' and course_no='$_POST[course_name]'";
			   $std_rec = mysql_query($std_sql);
			   $j = 1;
			   while($std_res = mysql_fetch_assoc($std_rec))
			   {
			   ?>
              <tr>
                <td width="100%" height="20%" align="left" class="style31"><?php echo $std_res['first_name']." ".$std_res['middle_name']." ".$std_res['last_name'];?>
                    <input name="std_id<?php echo $j?>" type="hidden" value="<?php echo $std_res['student_id']?>">
                </td>
				
               <?php
			   	$c=1;
				 $str21="select * from subject where semester = '$_POST[semester]' and course_no = '$_POST[course_name]'";
				 $result21=@mysql_query($str21);
				 
				while($row2= @mysql_fetch_assoc($result21))
				{ 
				 $stsql = "SELECT * FROM mark_master mm, marks_details md WHERE mm.course_no=  '$course_no' AND mm.semester=  '$semester' AND mm.marks_id = md.marks_id and subject_no='$row2[subject_no]' and student_id='$std_res[student_id]' ";
				 
			     $strec = mysql_query($stsql);
				 $stnum = mysql_num_rows($strec);
			 
				?>
                <td width="100%" height="20%" align="center"><span class="style31">
                  <?php if($stnum > 0) { while($stres = mysql_fetch_assoc($strec))
				 { { echo $stres['marks'];} } } else{ ?>
                  <input type="text" name="m<?php echo $j;?><?php echo $c;?>"  id="m<?php echo $j;?><?php echo $c;?>" onKeyUp="chk_val('<?php echo $j;?>','<?php echo $c;?>')"> 
				  
				</span></td>
			   <?php 
			     }
			   $c++;
			   }
			   ?>
              </tr>
              <?php
			  $j++;
			  
			  }
			  ?>
			  <tr>
                <td align="left" width="100%" height="20%" class="style31">
				<?php if($stnum <= 0) { ?>
                  <input type="submit" name="Submit2" value="Submit" id="sbcl">
				   <?php } ?>
                  <input name="sub_cnt" type="hidden" id="sub_cnt" value="<?php echo $c;?>">
				  <input name="std_cnt" type="hidden" id="std_cnt" value="<?php echo $j;?>">
                  <input name="cname" type="hidden" id="cname" value="<?php echo $_POST['course_name'];?>">
                  <input name="get_sem" type="hidden" id="get_sem" value="<?php echo $_POST['semester'];?>">
               </td>
                <td align="left" height="20%" width="100%"><span class="style31"></span></td>
              </tr>
            </table>
		  </form>		  </td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
</div>
</body>
</html>
