function get_sem(str)
{
	if(str > 0 )
	{  
	
		location.replace("marksheet.php?C="+str);
	}
}	
function get_stud(str1)
{
	if(str1 > 0)
	{  
		var cno = document.getElementById("course_name").value;
		location.replace("marksheet.php?CC="+cno+"&k="+str1);
		
	}
}	
function valid()
{ 
	var empty = document.forms["form1"]["course_name"].value;
   	var empty1 = document.forms["form1"]["semester"].value;
	var empty2 = document.forms["form1"]["student_name"].value;
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
	   else if(empty2 == 0)
      {
	 	alert("Please Select Student Name");
	    return false;
	  }
	   return true;
}