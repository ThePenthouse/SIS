<?php
  include('config.php');
  
   session_start();
   
   $user_check= $_SESSION['login_user'];
   $ses_sql= mysqli_query($db,"select userid from  logindetails where userid='$user_check'");
   $row=mysqli_fetch_array($ses_sql,MYSQL_ASSOC);
   $login_session=$row['userid'];
   if(!isset($_SESSION['login_user'])){
      header("location:Login.php");
	  }
	  ?>
	  
   