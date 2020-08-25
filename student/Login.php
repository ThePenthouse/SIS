<?php
include "connection/connection.php";

if(isset($_POST['Submit']))
{
   $myusername=$_POST['userid'];
   $mypassword=$_POST['password'];
   
 
 $sql="select * from logindetails where userid = '$myusername'";
 $result=mysql_query($sql);
 $num = mysql_num_rows($result);
 if($num > 0)
 {
 	$row=mysql_fetch_assoc($result);
	if($row['password'] == $mypassword)
	{
		session_start();
		$_SESSION['uid'] = $row['id'];
		$_SESSION['uname'] = $row['name'];
		echo "<script>
			alert('Successfully Logged In');
			location.replace('dashboard.php?')
			</script>";
	}else
	{
		echo "<script>
			alert('Wrong Password');
			location.replace('Login.php?')
			</script>";
	}
 }else
 {
 	echo "<script>
			alert('User Does Not Exists');
			location.replace('Login.php?')
			</script>";
 }


 $active=$row['active'];
 $count=mysqli_num_rows($result);
  if($count == 1)
 { session_register("myusername");
    $_SESSION['login_user']=$myusername;
	header("location:dashboard.php");
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
<link rel="stylesheet" type="text/css" href="stylelogin.css"/>
<script type="text/javascript" src="js/login.js"></script>
</head>
<body>
<div class="stylelogin">
<h1>Login</h1>
<br/>
<form id="form1" name="form1" method="POST" action="" onSubmit="return valid()">
        <input name="userid" type="text" placeholder="Please Enter Username..."><br/><br/>
        <input name="password" type="password" placeholder="Please Enter Password..."><br/><br/>
        <input name="Submit" type="submit" value="Login"/>
</form>
</div>
</body>
</html>
