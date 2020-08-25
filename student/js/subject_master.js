function get_sem(str)
{
	if(str > 0)
	{
		location.replace("subject_master.php?C="+str);
	}
}
function valid()
{ var empty1 = document.forms["form1"]["subject_name"].value;
var empty2 = document.forms["form1"]["subject_no"].value;
 var empty3 = document.forms["form1"]["course_name"].value;
 var empty4 = document.forms["form1"]["semester"].value;
  var empty5 = document.forms["form1"]["status"].value;
 
	if(empty3 == 0)
	{ alert("Please Select Course");
	   return false;
	   
	}
	else if(empty1 == "" || empty1 == null)
	{
	     alert("Please Enter Subject Name");
		 return false;
		 
	}
	else if(empty2 == "" || empty2 == null)
	{
	     alert("Please Enter Subject Code");
		 return false;
		 
	}
	else if(empty4 == 0)
	{
	     alert("Please Select Semester");
		 return false;
	  }
	else if(empty5 == 0)
	{
	     alert("Please Select Subject Status");
		 return false;
	  }
	
	return true;
	
}
