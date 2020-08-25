<?php include "config.php";
include "connection/connection.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <option value="<?php echo $row['course_no'];?>"></option>
        </select><?php $var2=$_GET["var2"]; $str="select * from student_details where student_id= $var2";
		                   $result=mysql_query($str);
				?>	
		
        <table width="100%" border="1">
          <tr>
            <td width="619" align="right">Student Id </td>
            <td width="56" align="center">:</td>
            <td width="545"><label>
              <input name="student_id" type="text" id="student_id" />
            </label></td>
          </tr>
          <tr>
            <td width="606" align="right">First Name</td>
            <td width="49" align="center">:</td>
            <td width="593" align="left"><input name="first_name" type="text" id="first_name" /></td>
          </tr>
          <tr>
            <td width="619" align="right">Middle Name</td>
            <td width="56" align="center">:</td>
            <td width="545"><label>
              <input name="middle_name" type="text" id="middle_name" />
            </label></td>
          </tr>
          <tr>
            <td width="606" align="right">Last Name </td>
            <td width="49" align="center">:</td>
            <td width="593" align="left"><input name="last_name" type="text" id="last_name" /></td>
          </tr>
          <tr>
            <td width="606" align="right">Father's Name </td>
            <td width="49" align="center">:</td>
            <td width="593" align="left"><input name="father_name" type="text" id="father_name" /></td>
          </tr>
          <tr>
            <td width="606" align="right">Mother's Name </td>
            <td width="49" align="center">:</td>
            <td width="593" align="left"><input name="mother_name" type="text" id="mother_name" /></td>
          </tr>
          <tr>
            <td align="right">Gender</td>
            <td align="center">:</td>
            <td align="left"><input name="gender" type="radio" value="M" />
              Male
              <input name="gender" type="radio" value="F" />
              Female</td>
          </tr>
          <tr>
            <td width="619" align="right">D.O.B</td>
            <td width="56" align="center">:</td>
            <td width="545"><label>
              <input name="dob" type="text" id="dob" />
            </label></td>
          </tr>
          <tr>
            <td width="619" align="right">Address</td>
            <td width="56" align="center">:</td>
            <td width="545"><label>
              <input name="address" type="text" id="address" />
            </label></td>
          </tr>
          <tr>
            <td width="619" align="right">Postal Code </td>
            <td width="56" align="center">:</td>
            <td width="545"><label>
              <input name="postal_code" type="text" id="postal_code" />
            </label></td>
          </tr>
          <tr>
            <td width="619" align="right">Contact No </td>
            <td width="56" align="center">:</td>
            <td width="545"><label>
              <input name="contact_no" type="text" id="contact_no" />
            </label></td>
          </tr>
          <tr>
            <td width="619" align="right">Alt Contact No </td>
            <td width="56" align="center">:</td>
            <td width="545"><label>
              <input name="alt_contact_no" type="text" id="alt_contact_no" />
            </label></td>
          </tr>
          <tr>
            <td width="619" align="right">Email Id </td>
            <td width="56" align="center">:</td>
            <td width="545"><label>
              <input name="email_id" type="text" id="email_id" />
            </label></td>
          </tr>
		   <tr>
            <td width="619" align="right">Profile Picture</td>
            <td width="56" align="center">:</td>
            <td width="545"><label>
              <input name="profile_pic" type="file" id="profile_pic" />
            </label></td>
          </tr>
          <tr>
            <td width="619" align="right">Course Name </td>
            <td width="56" align="center">:</td>
            <td width="545"><select name="course_name" id="course_name" onchange="get_sem(this.value)">
                <option value="0">... Course ... </option>
                <?php
		 	$str2="select * from course";
			$result2=mysql_query($str2);
		    while($row= mysql_fetch_array($result2))
		 	 { 
		  	?>
                <option value="<?php echo $row['course_no'];?>">
                <?php  echo $row['course_name'];?>
                </option>
                <?php
			 }
		 	 ?>
              </select>
            </td>
          </tr>
          <tr>
            <td height="50">&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" value="Submit" />
                <input name="Reset" type="reset" id="Reset" value="Reset" />
            </td>
          </tr>
        </table>
</form>
</body>
</html>
