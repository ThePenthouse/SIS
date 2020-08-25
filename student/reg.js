function validate()
{
  var first_name=document.reg.first_name.value;
  var last_name=document.reg.last_name.value;
  
if(fname=='')
  {
    window.alert("Please Enter first_name!");
    document.reg.first_name.focus();
    return false;

 }

 if(lname=='')
  {
    window.alert("Please Enter last_name!");
    document.reg.last_name.focus();
    return false;

 }


}
