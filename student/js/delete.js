function valid()
{ 
	var empty = document.forms["form1"]["student_id"].value;
	if(empty == "" || isNaN(empty))
      {
	 	alert("Please Enter Student Id");
	    return false;
	  }
	  
	   return true;
}