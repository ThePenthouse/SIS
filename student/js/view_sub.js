function get_sem(str)
{
	if(str > 0 )
	{  
	
		location.replace("view_sub.php?C="+str);
	}
}

function valid()
{ 
	var empty = document.forms["form1"]["course_name"].value;
   	var empty1 = document.forms["form1"]["semester"].value;
	if(empty == 0)
      {
	 	alert("Please Select Course Name");
	    return false;
	  }
	  
	  else if(empty1 == 0)
      {
	 	alert("Please Select Semester");
	    return false;
	  }
	
	   return true;
}