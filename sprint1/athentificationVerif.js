function athentification()
	{
        var email = document.getElementById('email').value;
        var pwd	=   document.getElementById('pwd').value;
		var regexmail = new RegExp(/^[a-zA-Z]+[a-zA-Z0-9\_\-]*@[a-zA-Z]*.[a-zA-Z][a-zA-Z]{2,3}/);
		
        if (email==null || email=="",pwd==null || pwd=="")
        {
            alert("Please Fill All Required Field");
            return false;
        }
		
		if(!regexmail.test(email))
		{
			alert("Please Enter A Valid Email Adress");
            return false;
		}
    }
