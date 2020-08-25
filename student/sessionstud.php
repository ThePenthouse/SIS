<?php
  include('config.php');
  
   session_start();
   
   $user_check= $_SESSION['studentlogin_user'];
   $ses_sql= mysqli_query($db,"select student_id from student_details where student_id='$user_check'");
   $row=mysqli_fetch_array($ses_sql,MYSQL_ASSOC);
   $login_session=$row['student_id'];
   if(!isset($_SESSION['studentlogin_user'])){
      header("location:studentlogin.php");
	  }
	  ?>
	  
   