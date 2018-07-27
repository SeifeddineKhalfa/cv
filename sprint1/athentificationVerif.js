function validateForm() {
    var x = document.forms["loginForm"]["email"].value;
	var pwd = document.forms["loginForm"]["pwd"].value;
	var regx=  new RegExp("^[a-zA-Z]+[a-zA-Z0-9\_\-]*@[a-zA-Z]*.[a-zA-Z]{2,3}","g");
    if (x == null || x == "" || pwd == null || pwd== "") 
	{
        // fill out the placeholder with a message
        document.getElementById("errorMsg").innerHTML = "*All Fields must be filled out";
        return false;
    }
	

	
	else {
		if (!regx.test(x))
	{
		document.getElementById("errorMsg").innerHTML = "";
		document.getElementById("errorMsg2").innerHTML = "*Please enter a valid Email";
		return false;
	}
	}
}
