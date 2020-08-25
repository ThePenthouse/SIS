<?php
include "config.php";
 include "connection/connection.php";
 $var=$_GET["var"];
 echo $var;
 $str5 ="delete  from  student_details where student_id = $var ";
  $result5=mysql_query($str5);
  if($result5)
  {
  echo "<script>alert('Data deleted');
    location.replace('student_master.php?');
  </script>";
   }

?>
