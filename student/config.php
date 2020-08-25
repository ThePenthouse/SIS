<?php
   session_start();
   $title = ":: Student Information System ::";
   if($_SESSION['uid'] == "")
   {
   		echo "<script>
			alert('Please Login');
			location.replace('Login.php')
			</script>";
   }
   ?>
   
   