<?php
include "connection/connection.php";
if(isset($_POST['Submit']))
{
    $username=$_POST['student_name'];
    $userid=$_POST['student_id'];
   
 
 $sql="select * from student_details where student_id='$userid'";
 $result=mysql_query($sql);
 $num = mysql_num_rows($result);
 if($num > 0)
 {
 	$row=mysql_fetch_assoc($result);
	if($row['student_id'] == $userid)
	{
		session_start();
		$_SESSION['sid'] = $row['student_id'];
		$_SESSION['sname'] = $row['first_name'];
		echo "<script>
			alert('Successfully Logged In');
			location.replace('student_dashboard.php?')
			</script>";
	}else
	{
		echo "<script>
			alert('Wrong UserId');
			location.replace('studentlogin.php?')
			</script>";
	}
 }else
 {
 	echo "<script>
			alert('User Does Not Exists');
			location.replace('studentlogin.php?')
			</script>";
 }


$active=$row['active'];
 $count=mysqli_num_rows($result);
  if($count == 1)
 { session_register("username");
    $_SESSION['studentlogin_user']=$username;
	header("location:student_dashboard.php");
	}
	else
	{
	$error="you enter invalid";
	}
	}
	
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {font-size: 24px}
-->
</style>
<link rel="stylesheet" type="text/css" href="studlogin.css"/>
<script type="text/javascript" src="js/studlogin.js"></script>
</head>
<body>
<div class="stylelogin">
<h1>Login</h1>
<br/>
<form id="form1" name="form1" method="POST" action="" onSubmit="return valid()">
        <input name="student_name" type="text" id="student_name" placeholder="Please Enter Your Name...">
        <br/><br/>
        <input name="student_id" type="text" id="student_id" placeholder="Please Enter Your Id...">
        <br/><br/>
        <input name="Submit" type="submit" value="Login"/>
</form>
</div>
</body>
</html>

