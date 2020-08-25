function get_sem(str)
{
	if(str > 0)
	{
		location.replace("student_master.php?C="+str);
	}
}


 function valid()
{ 
   var empty = document.forms["form1"]["course_name"].value;
   var empty1= document.forms["form1"]["semester"].value;
   var empty2 = document.forms["form1"]["first_name"].value;
   var empty3 = document.forms["form1"]["last_name"].value;
   var empty4 = document.forms["form1"]["father_name"].value;
   var empty5 = document.forms["form1"]["mother_name"].value;
   var gender = document.forms["form1"]["gender"].value;
   var empty6 = document.forms["form1"]["dob"].value;
   var empty7 = document.forms["form1"]["address"].value;
   var empty8 = document.forms["form1"]["postal_code"].value;
   var empty9 = document.forms["form1"]["contact_no"].value;
    var empty10 = document.forms["form1"]["email_id"].value;
    var empty11 = document.forms["form1"]["profile_pic"].value;
	
	if(empty == 0)
      {
	 	alert("Please Select Course");
	    return false;
	  }
	
    else if(empty1 == 0)
      {
	 	alert("Please Select Semester");
	    return false;
	  }
	 else if(empty2 == "" )
      {
		alert("Please Enter First Name");
		return false;
	  }
	  else if(empty3 == "" )
      {
	 	alert("Please Enter Last Name");
	    return false;
	  }
	  else if(empty4 == "" )
      {
	 	alert("Please Enter Father's Name");
	    return false;
	  }
	  else if(empty5 == "" )
      {
	 	alert("Please Enter Mother's Name");
	    return false;
	  }
	  else if(gender == "" )
      {
	 	alert("Please Select Gender");
	    return false;
	   }
	   else if(empty6 == "" )
      {
	 	alert("Please Enter Date Of Birth");
	    return false;
	   }
	   else if(empty7 == "" )
      {
	 	alert("Please Enter Address");
	    return false;
	   }
	   else if(empty8 == "" || isNaN(empty8))
      {
	 	alert("Please Enter Postal Code");
	    return false;
	   }
	   else if(empty9 == "" || isNaN(empty9))
      {
	 	alert("Please Enter Contact No");
	    return false;
	   }
	    else if(empty10 == "" )
      {
	 	alert("Please Enter Email Id");
	    return false;
	   }
	  else if(empty11 == "" )
      {
	 	alert("Please Choose Photo");
	    return false;
	  }
	 return true;
}
	