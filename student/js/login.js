function valid()
{ 
	var empty = document.forms["form1"]["userid"].value;
	var empty1 = document.forms["form1"]["password"].value;
	if(empty == "" )
      {
	 	alert("Please Enter Username");
	    return false;
	  }
	 else if(empty1 == "" )
      {
	 	alert("Please Enter Password");
	    return false;
	  }
	  
	   return true;
}