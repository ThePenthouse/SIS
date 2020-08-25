function valid()
{ 
	var empty = document.forms["form1"]["student_name"].value;
	var empty1 = document.forms["form1"]["student_id"].value;
	if(empty == "" )
      {
	 	alert("Please Enter Your Name");
	    return false;
	  }
	 else if(empty1 == "" || isNaN(empty1))
      {
	 	alert("Please Enter Your Id");
	    return false;
	  }
	  
	   return true;
}