function get_sem(str)
{
	if(str > 0 )
	{  
	
		location.replace("attendance_master.php?C="+str);
	}
}

function abc(a)
{ if(document.getElementById(a).checked)
  { 
      document.getElementById('txt'+a).value="P";
	  }
	  else
	  {  document.getElementById('txt'+a).value="A";
	  }
	  
}
	  
function valid()
{ 
	var empty = document.forms["form1"]["course_name"].value;
   	var empty1 = document.forms["form1"]["semester"].value;
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
	
	   return true;
}