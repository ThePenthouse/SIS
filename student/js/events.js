function valid()
{ 
	var empty = document.forms["form1"]["event_name"].value;
	var empty1 = document.forms["form1"]["event_desc"].value;
   	var empty2 = document.forms["form1"]["event_date"].value;
  	var empty3 = document.forms["form1"]["event_pic"].value;
	if(empty == "" )
      {
	 	alert("Please Enter Event Name");
	    return false;
	  }
	  
	 else if(empty1 == "" )
      {
		alert("Please Enter Event Description");
		return false;
	  }
	  else if(empty2 == "" )
      {
	 	alert("Please Enter Event Date");
	    return false;
	  }
	  else if(empty3 == "" )
      {
	 	alert("Please Choose Photo");
	    return false;
	   }
	   return true;
}