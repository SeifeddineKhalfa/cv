var check = function() {
	
	if(document.getElementById('password').value =="" && document.getElementById('confirm_password').value =="")
	{
		document.getElementById('success-icon').style.display = 'none';
		document.getElementById('failure-icon').style.display = 'none';
	}
	
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value )
	{
	document.getElementById('success-icon').style.display = 'block';
    document.getElementById('failure-icon').style.display = 'none';
    
	
  }
  else {
	
   document.getElementById('failure-icon').style.display = 'block';
   document.getElementById('success-icon').style.display = 'none';
   
    //document.getElementById('message').innerHTML = 'not matching';
  }
	
}