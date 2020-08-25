function valid()
{ 
	var empty = document.forms["form1"]["course_name"].value;
	var empty1 = document.forms["form1"]["duration"].value;
   	var empty2 = document.forms["form1"]["semester"].value;
  	var empty3 = document.forms["form1"]["status"].value;
	if(empty == "" )
      {
	 	alert("Please Enter Course Name");
	    return false;
	  }
	  
	 else if(empty1 == 0)
      {
	 	alert("Please Select Course Duration");
	    return false;
	  }
	  else if(empty2 == 0)
      {
	 	alert("Please Select Semester");
	    return false;
	  }
	  else if(empty3 == 0)
      {
	 	alert("Please Select Course Status");
	    return false;
	   }
	   return true;
}