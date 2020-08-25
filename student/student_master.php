<?php
include "config.php";
include "connection/connection.php";    
if(isset($_POST['Submit']))
{
		$first_name=$_POST['first_name'];
		$middle_name=$_POST['middle_name'];
		$last_name=$_POST['last_name'];
		$father_name=$_POST['father_name'];
		$mother_name=$_POST['mother_name'];
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		$address=$_POST['address'];
		$postal_code=$_POST['postal_code'];
		$contact_no=$_POST['contact_no'];
		$alt_contact_no=$_POST['alt_contact_no'];
		$email_id=$_POST['email_id'];
		$course_no=$_POST['course_name'];
		$semester=$_POST['semester'];
		$profile_pic=$_POST['profile_pic'];
	if($_POST['Submit'] == "Insert")
	{
		$str="insert into student_details(student_id,first_name,middle_name,last_name,father_name,mother_name,gender,dob,address,postal_code,contact_no,
		alt_contact_no,email_id,course_no,semester,profile_pic)
		values('$student_id','$first_name','$middle_name','$last_name','$father_name','$mother_name','$gender','$dob','$address','$postal_code','$contact_no',
		'$alt_contact_no','$email_id','$course_no','$semester' ,'$profile_pic')";
		$result=mysql_query($str);
		if($result)
		{
			echo "<script>alert('Data Inserted');
			location.replace('student_master.php?');
			</script>";
		}
	}elseif($_POST['Submit'] == "Edit")
	{
		$pk = $_POST['pk'];
		$usql = "update student_details set first_name='$first_name', middle_name='$middle_name', last_name='$last_name', father_name='$father_name', mother_name='$mother_name',gender='$gender',dob='$dob',address='$address',postal_code='$postal_code',contact_no='$contact_no',alt_contact_no='$alt_contact_no',email_id='$email_id',semester='$semester',course_no='$course_no',profile_pic='$profile_pic'  where student_id='$pk'";
		
		$result1=mysql_query($usql);
		if($result1)
		{
			echo "<script>alert('Data Updated');
			location.replace('student_master.php?');
			</script>";
		}
		}
		}
if(isset($_GET['var2']))
{
	$gsql = "select * from student_details where student_id='$_GET[var2]'";
	$grec = mysql_query($gsql);
	$gres = mysql_fetch_assoc($grec);
}


?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title;?></title>
<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
<style type="text/css">
<!--
.style16 {color: #00FFCC; font-size: 16px;}
.style18 {font-size: 24px; color: #FF3300; font-weight: bold; font-family: "Times New Roman", Times, serif; }
.style25 {font-size: 10; color: #00FFFF; }
.style33 {font-size: 10; color: #0099FF; }
.style34 {color: #0099FF}
.style60 {font-size: 10px; font-weight: bold; color: #006600; }
.style62 {font-size: 10px; font-weight: bold; color: #00FF99; }
.style29 {font-size: 24px; color: #FFFFFF; font-weight: bold; font-family: "Times New Roman", Times, serif; text-shadow: 5px 5px 3px black;}
.style85 {color: #000000}
.style17 {font-size: 18px; color: #FF3300;}
.style92 {font-size: 10px}
.style96 {font-size: 10; color: #000000; }
.style98 {font-size: 10; color: #CC0000; }
.style99 {font-size: 10}
-->
</style>
<script type="text/javascript" src="js/student_master.js"></script>
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
           <td align="left"><p class="style18"><span class="style29">Student Entry</span></p>
             <p class="style18">&nbsp;</p>
            </td>
      </tr>
     
    </table></td>
  </tr>  <tr height="30%">
    <td valign="top" align="left">
	<form id="form1" name="form1" method="POST" action="" onSubmit="return valid()">
              <table width="69%" height="30%" border="0" align="left">
                <tr>
                  <td width="160" align="left"><span class="style4 style85 style85">Course</span></td>
                  <td width="54" align="center"><span class="style4 style85">:</span></td>
                  <td width="307"><span class="style4 style85">
                    <select name="course_name" id="course_name" onChange="get_sem(this.value)">
                      <option value="0">... Course ... </option>
                      <?php
		 	$str2="select * from course";
			$result2=mysql_query($str2);
		    while($row= mysql_fetch_array($result2))
		 	 { 
		  	?>
                      <option value=<?php echo $row['course_no'];?> <?php if(isset($_GET['C']) || isset($_GET['var2'])){if($_GET['C'] == $row['course_no'] || $gres['course_no'] == $row['course_no']){echo "selected";}}?>>
                          
                      <?php  echo $row['course_name'];?>
                      </option>
                      <?php
			 }
		 	 ?>
                    </select>
                  </span></td>
                </tr>
                <tr>
                  <td width="160" height="26" align="left"><span class="style4 style85 style85">Semester</span></td>
                  <td width="54" align="center"><span class="style4 style85">:</span></td>
                  <td width="307"><span class="style4 style85">
                    <select name="semester" id="semester">
                      <option value="0">... Semester ... </option>
                      <?php
		   if(isset($_GET['C']) || isset($_GET['var2']))
		   {
		   		if(isset($_GET['C']))
				{
					$cr = $_GET['C'];
				}elseif(isset($_GET['var2']))
				{
					$cr = $gres['course_no'];
				}
		 	$str3="select * from course where course_no='$cr'";
			echo $str3;
			$result3=mysql_query($str3); 
			$row3=mysql_fetch_array($result3);
			for($i = 1; $i <= $row3['semester']; $i++)
			{
			?>
                      <option value=<?php echo $i;?> <?php if($gres['semester'] == $i){echo "selected";}?>><?php echo $i;?></option>
                      <?php 
				}
			 }
			 ?>
                    </select>
                  </span> </td>
                </tr>
                <tr>
                  <td width="160" align="left"><span class="style4 style85 style85">First Name</span></td>
                  <td width="54" align="center"><span class="style4 style85">:</span></td>
                  <td width="307" align="left"><span class="style4 style85"><input name="first_name" type="text" id="first_name" <?php if(isset($_GET['var2'])){echo "value='$gres[first_name]'";}?> /></span></td>
                </tr>
                <tr>
                  <td width="160" align="left"><span class="style4 style85 style85">Middle Name</span></td>
                  <td width="54" align="center"><span class="style4 style85">:</span></td>
                  <td width="307"><span class="style4 style85">
                    <label>
                    <input name="middle_name" type="text" id="middle_name" <?php if(isset($_GET['var2'])){echo "value='$gres[middle_name]'";}?>>
                    </label>
                  </span></td>
                </tr>
                <tr>
                  <td width="160" align="left"><span class="style4 style85 style85">Last Name </span></td>
                  <td width="54" align="center"><span class="style4 style85">:</span></td>
                  <td width="307" align="left"><span class="style4 style85"><input name="last_name" type="text" id="last_name" <?php if(isset($_GET['var2'])){echo "value='$gres[last_name]'";}?> /></span></td>
                </tr>
                <tr>
                  <td width="160" align="left"><span class="style4 style85 style85">Father's Name </span></td>
                  <td width="54" align="center"><span class="style4 style85">:</span></td>
                  <td width="307" align="left"><span class="style4 style85"><input name="father_name" type="text" id="father_name" <?php if(isset($_GET['var2'])){echo "value='$gres[father_name]'";}?> /></span></td>
                </tr>
                <tr>
                  <td width="160" align="left"><span class="style4 style85 style85">Mother's Name </span></td>
                  <td width="54" align="center"><span class="style4 style85">:</span></td>
                  <td width="307" align="left"><span class="style4 style85"><input name="mother_name" type="text" id="mother_name" <?php if(isset($_GET['var2'])){echo "value='$gres[mother_name]'";}?>/></span></td>
                </tr>
                <tr>
                  <td align="left"><span class="style4 style85 style85">Gender</span></td>
                  <td align="center"><span class="style4 style85">:</span></td>
                  <td align="left"><span class="style4 style85">
                    <input name="gender" type="radio" value="M" <?php if(isset($_GET['var2'])){if($gres['gender'] == "M"){echo "checked";}}?>>
                    Male 
                    <input name="gender" type="radio" value="F" <?php if(isset($_GET['var2'])){if($gres['gender'] == "F"){echo "checked";}}?>>
                  Female</span></td>
                </tr>
                <tr>
                  <td width="160" align="left"><span class="style4 style85 style85">D.O.B</span></td>
                  <td width="54" align="center"><span class="style4 style85">:</span></td>
                  <td width="307"><span class="style4 style85">
                    <label>
                    <input name="dob" type="text" id="dob" <?php if(isset($_GET['var2'])){echo "value='$gres[dob]'";}?>>
                    </label>
                  </span></td>
                </tr>
                <tr>
                  
                  
                  <td width="160" align="left"><span class="style4 style85 style85">Address</span></td>
                  <td width="54" align="center"><span class="style4 style85">:</span></td>
                  <td width="307"><span class="style4 style85">
                    <label>
                    <input name="address" type="text" id="address" <?php if(isset($_GET['var2'])){echo "value='$gres[address]'";}?>>
                    </label>
                  </span></td>
                </tr>
                <tr>
                  <td width="160" align="left"><span class="style4 style85 style85">Postal Code </span></td>
                  <td width="54" align="center"><span class="style4 style85">:</span></td>
                  <td width="307"><span class="style4 style85">
                    <label>
                    <input name="postal_code" type="text" id="postal_code" <?php if(isset($_GET['var2'])){echo "value='$gres[postal_code]'";}?>>
                    </label>
                  </span></td>
                </tr>
                <tr>
                  <td width="160" align="left"><span class="style4 style85 style85">Contact No </span></td>
                  <td width="54" align="center"><span class="style4 style85">:</span></td>
                  <td width="307"><span class="style4 style85">
                    <label>
                    <input name="contact_no" type="text" id="contact_no" <?php if(isset($_GET['var2'])){echo "value='$gres[contact_no]'";}?>>
                    </label>
                  </span></td>
                </tr>
                <tr>
                  <td width="160" align="left"><span class="style4 style85 style85">Alt Contact No </span></td>
                  <td width="54" align="center"><span class="style4 style85">:</span></td>
                  <td width="307"><span class="style4 style85">
                    <label>
                    <input name="alt_contact_no" type="text" id="alt_contact_no" <?php if(isset($_GET['var2'])){echo "value='$gres[alt_contact_no]'";}?>>
                    </label>
                  </span></td>
                </tr>
                <tr>
                  <td width="160" align="left"><span class="style4 style85 style85">Email Id </span></td>
                  <td width="54" align="center"><span class="style4 style85">:</span></td>
                  <td width="307"><span class="style4 style85">
                    <label>
                    <input name="email_id" type="text" id="email_id" <?php if(isset($_GET['var2'])){echo "value='$gres[email_id]'";}?>>
                    </label>
                  </span></td>
                </tr>
				<tr>
                  <td width="160" align="left"><span class="style4 style85 style85">Profile Picture </span></td>
                  <td width="54" align="center"><span class="style4 style85">:</span></td>
                  <td width="307"><span class="style4 style85">
                    <label>
                    <input name="profile_pic" type="file" id="profile_pic" <?php if(isset($_GET['var2'])){echo "value='$gres[profile_pic]'";}?>>
                    </label>
                  </span></td>
                </tr>
                <tr>
                  <td height="50"><span class="style4 style85">&nbsp;
                    <input name="pk" type="hidden" id="pk" value="<?php echo $gres['student_id'];?>">
                  </span></td>
                  <td><span class="style85"></span></td>
                  <td><span class="style4 style85">
                    <input type="submit" id="sbcl" name="Submit" <?php if(isset($_GET['var2'])){echo "value='Edit'";}else{?>value="Insert"<?php }?> />
                    <input name="Reset" type="reset" id="sbcl1" value="Reset" />           
                  </span></td>
                </tr>
            </table>
    </form>	  </td>
    </tr>
      <tr height="10%">
        <td>&nbsp;</td>
      </tr>
      <tr height="20%">
        <td align="center">
          <table width="79%" height="20%" border="1" align="left" cellpadding="0" cellspacing="0" >
            <tr>
              <td width="8%" height="42" align="center" bgcolor="#D9FFD9"><span class="style60 style92">Student Id </span></td>
	            <td width="9%" align="center" bgcolor="#00001C"><span class="style62 style92">Student Name</span></td>
	            <td width="10%" align="center" bgcolor="#D9FFD9"><span class="style60 style92">Father's Name </span></td>
	            <td width="10%" align="center" bgcolor="#00001C"><span class="style62 style92">Mother's Name</span></td>
	            <td width="8%" align="center" bgcolor="#D9FFD9"><span class="style60 style92">Gender</span></td>
	            <td width="9%" align="center" bgcolor="#00001C"><span class="style62 style92">D.O.B</span></td>
	            <td width="6%" align="center" bgcolor="#D9FFD9"><span class="style60 style92">Address</span></td>
	            <td width="8%" align="center" bgcolor="#00001C"><span class="style62 style92">Contact No</span></td>
	            <td width="8%" align="center" bgcolor="#D9FFD9"><span class="style60 style92">Email Id </span></td>
	            <td width="7%" align="center" bgcolor="#00001C"><span class="style62 style92">Course</span></td>
	            <td colspan="2" align="center" bgcolor="#D9FFD9"><span class="style60 style92">Action</span></td>
            </tr>
            
            
            <?php
	$str3="select * from student_details";
	$str4="select * from student_details";
	$result3=mysql_query($str3);
		while($row= mysql_fetch_array($result3))
		 	 { 
	 ?>
            <tr>
              <td align="center" bgcolor="#99CCCC">
                <span class="style96"><?php echo $row['student_id'];
		    
		 ?></span> </td>
	        <td align="center" bgcolor="#D9FFD9">
	          <span class="style98"><?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name'];
		    
		 ?></span> </td>
	       <td align="center" bgcolor="#99CCCC">
	         <span class="style96"><?php echo $row['father_name'];
	  
		    
		 ?></span> </td>
	         <td align="center" bgcolor="#D9FFD9">
	           <span class="style98"><?php echo $row['mother_name'];
	  
		    
		 ?></span> </td>
	        <td align="center" bgcolor="#99CCCC">
	          <span class="style96"><?php echo $row['gender'];
	  
		    
		 ?></span> </td>
	        <td align="center" bgcolor="#D9FFD9">
	          <span class="style98"><?php echo $row['dob'];
	  
		    
		 ?></span> </td>
	          <td align="center" bgcolor="#99CCCC">
	            <span class="style96"><?php echo $row['address'].", Pin -".$row['postal_code'];
	  
	  
		    
		 ?></span> </td>
	        <td align="center" bgcolor="#D9FFD9">
	          <span class="style98"><?php echo $row['contact_no'].",".$row['alt_contact_no'];
	   ?></span> </td>
	        <td align="center" bgcolor="#99CCCC">
	          <span class="style96"><?php echo $row['email_id'];
	   ?></span> </td>
	         <td align="center" bgcolor="#D9FFD9"><span class="style98">
	           <?php
	        $c=$row['course_no'];
			$str4="select course_name from course where course_no = $c";
	$result4=mysql_query($str4);
		while($row2= mysql_fetch_array($result4))
		 	 { 
			     echo $row2['course_name'].", Sem- ".$row['semester'];
				 
				
				 }
				 
	   ?>
	           </span></td>
	         <td width="8%" align="center" bgcolor="#99CCCC">
	           <span class="style25">
	             <?php $k=$row['student_id']; ?>
                </span><span class="style99"><span class="style34"><a href="delete_student_master.php?var=<?php echo $k?>" >
                Delete	   </a></span></span> </td>
	         <td width="9%" align="center" bgcolor="#99CCCC">
	           <a href="student_master.php?var2=<?php echo $k?>" class="style33">Update </a></td>
	        </tr>
            <?php 
	  }
	  ?>
          </table>
        </td>
</tr>
</table>
</div>
</div>
</body>
</html>
