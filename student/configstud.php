<?php
   session_start();
   $title = ":: Student Information System ::";
   if($_SESSION['sid'] == "")
   {
   		echo "<script>
			alert('Please Login');
			location.replace('studentlogin.php')
			</script>";
   }
   ?>
   
   