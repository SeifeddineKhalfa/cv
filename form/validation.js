function validateProfile(){
	/*
	var jname = document.getElementById('name').value,
	var jnumber = document.getElementById('phone').value,
	var x = new RegExp(/^(\+216|00216)?[2-3-4-5-7-9]{1}[0-9]{7}/g),
	var jmail = document.getElementById('email').value,
	var regexmail = /^[a-zA-Z]+[a-zA-Z0-9\_\-]*@[a-zA-Z]*.[a-zA-Z][a-zA-Z]{2,3}/g,
	var dateOfBirth = document.getElementById('dateOfBirth').value,
	var adress = document.getElementById('adress').value,
	var githubProfile = document.getElementById('githubProfile').value,
	var description = document.getElementById('description').value,
	var divList = document.getElementsByClassName("error");
	var formList =
	*/
	
	var nbrElt = document.getElementById('profile').elements.length,
		test = false;
	for(i=0; i<nbrElt; i++)
	{
		var elt = document.getElementById('profile').elements[i];
		if(elt.value =="" && elt.name != "")//pour que les boutons n'encadre pas en rouge 
		{
			elt.parentNode.classList.add('error');
			//elt.addEventListener('keydown', removeValidateProfile(elt));
			test = true;
		}
	}
	if(test)
	{
		return false;
	}	


	
}

function removeValidateProfile(currentElement){
	
	var x = new RegExp(/^(\+216|00216)?[2-3-4-5-7-9]{1}[0-9]{7}/);
	var regexmail = new RegExp(/^[a-zA-Z]+[a-zA-Z0-9\_\-]*@[a-zA-Z]*.[a-zA-Z][a-zA-Z]{2,3}/g);
	var jnumber = document.getElementById('phone').value;
	if(currentElement.value != ''){
		currentElement.parentNode.classList.remove('error');
	}else{
		currentElement.parentNode.classList.add('error');
		return false;
	}
	
	switch(currentElement.name){
		case "name": { if(!isNaN(currentElement.value)){currentElement.parentNode.classList.add('error');}};break;
		case "Phone":{if (!x.test.currentElement.value)  {currentElement.parentNode.classList.add('error');}};break;
		//case "E_mail" : {if(!regexmail.test.(currentElement.value)) {currentElement.parentNode.classList.add('error');}};break;
	}
	
	/*switch (jnumber){
		case /^(\+216|00216)?[2-3-4-5-7-9]{1}[0-9]{7}/ : currentElement.parentNode.classList.add('error');
		break;
	}*/
	
	/*
	var adress = document.getElementById('adress'),
		name = document.getElementById('name');
	
	
	if (name!="" && isNaN(name))
	{
		name.parentNode.classList.remove('error');
		return true;
	}
	
	if (adress!="")
	{
		name.parentNode.classList.remove('error');
		return true ;
	}
	*/

}



	/*if (jname == "")
	{
		document.getElementById('name').parentNode.classList.add("error");
		return false;
	}*/

	/*if(!x.test(jnumber))
	{
		alert("Insert a valid phone number");
		return false;
	}
	if(jmail!=regexmail)
	{
		alert("Invalid mail adress");
		return false ;
	}*/
	
	
/*function validateSkills()
{
	var chkd1 = document.skills.lang1.checked || document.skills.lang2.checked || document.skills.lang3.checked ;
	var chkd2 = document.skills.it1.checked || document.skills.it2.checked || document.skills.it3.checked ;
	if (chkd1==true)
	{}
	else 
	{
		alert ("You must choose a language");
		return false ;
	}
	
	if (chkd2==false){
		alert ("You have to select an it skills at least");
	}	
}

function validateEdcation()
{
	
}

*/