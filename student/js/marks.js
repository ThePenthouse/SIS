function get_sem(str)
{
	if(str > 0 )
	{  
	
		location.replace("marks.php?C="+str);
	}
}

function chk_val(str1,str2)
{
	var str = str1+str2;
	var valu = document.getElementById('m'+str).value;
	if(valu > 100)
	{
		document.getElementById('m'+str).value = "";
	}
}


function chk_val_sub()
{    
	var subc = document.getElementById("sub_cnt").value;
	var stdc = document.getElementById("std_cnt").value;
     
	 for(var i=1; i<stdc; i++)
	 {
	 	for(var j=1; j<subc; j++)
		{
			if(document.getElementById("m"+i+j).value == "")
			{
				alert("Please Enter Marks as Atleast '0'")
				document.getElementById("m"+i+j).focus();
				return false;
			}
		}
	 }
	return true;
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