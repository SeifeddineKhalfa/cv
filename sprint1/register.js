var checkPassword = function()
{
	
	if(document.getElementById('password').value =="" && document.getElementById('confirm_password').value =="")
	{
		document.getElementById('success-icon').style.display = 'none';
		document.getElementById('failure-icon').style.display = 'none';
	}

	if (document.getElementById('password').value ==
		document.getElementById('confirm_password').value )
	{
		document.getElementById('success-icon').style.display = 'inline';
		document.getElementById('failure-icon').style.display = 'none';


	}
	else {

		document.getElementById('failure-icon').style.display = 'inline';
		document.getElementById('success-icon').style.display = 'none';

	//document.getElementById('message').innerHTML = 'not matching';
	}
}

var validateForm = function()
{
	
		var x = document.forms["registerForm"]["email"].value;
		var regx=  new RegExp("^[a-zA-Z]+[a-zA-Z0-9\_\-]*@[a-zA-Z]*.[a-zA-Z]{2,3}","g");
		var nbrElt = document.getElementById('registerForm').elements.length,
		flag = false;
	for(i=0; i<nbrElt; i++)
	{
		var elt = document.getElementById('registerForm').elements[i];
		if(elt.value =="")
		{
			elt.parentNode.classList.add('error');
			document.getElementById("alertEmptyFields").innerHTML = "*All Fields must be filled out";
			//elt.addEventListener('keydown', removeValidateProfile(elt));
			flag = true;
		
		}
	}
	if(flag)
	{
		return false;
	}
	
		if (!regx.test(x))
	{
		
		document.getElementById("error").innerHTML = "*Please enter a valid Email";
		return false;
	 }

}

var removeRedBorder = function()
	{

			flag = false;
			var mail= document.getElementById('email');
			var name = document.getElementById('name');
			
			
			if(name.value !=="")
			{
				name.parentNode.classList.remove('error');
				document.getElementById("alertEmptyFields").innerHTML = "";
				//name.addEventListener('keydown', removeValidateProfile(name));
				flag = true;
				
			
			}
			
		
			if(flag)
			{
				return false;
			}
	}
	
	var removemail = function()
		{
			var regx=  new RegExp("^[a-zA-Z]+[a-zA-Z0-9\_\-]*@[a-zA-Z]*.[a-zA-Z]{2,3}","g");
			var mail= document.getElementById('email').value;
			
			if(regx.test(mail))
				{
					//mail.parentNode.classList.remove('error');
					document.getElementById('mail_div').classList.remove('error');
					
				}
		}

/*var removeValidateProfile = function(currentElement)
	{
	
	
		//var regexmail = new RegExp(/^[a-zA-Z]+[a-zA-Z0-9\_\-]*@[a-zA-Z]*.[a-zA-Z][a-zA-Z]{2,3}/g);
	
		if(currentElement.value !='')
		{
			currentElement.parentNode.classList.remove('error');
		}
		else
		{
			currentElement.parentNode.classList.add('error');
			return false;
		}

	}
	*/
	