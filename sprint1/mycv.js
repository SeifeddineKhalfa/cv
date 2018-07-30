function showForm() {
   document.getElementById('details').style.display = "none";
   document.getElementById('details-form').style.display = "block";
   document.getElementById('edit-btn').style.display = "none";
   
}

function closeForm()
{
	document.getElementById('details-form').style.display='none';
	document.getElementById('details').style.display = "block";
	document.getElementById('edit-btn').style.display = "inline-block";
}

function validate(form) {

    // validation code here ...


    if(!valid) {
        alert('Please correct the errors in the form!');
        return false;
    }
    else {
        return confirm('Do you really want to submit the form?');
    }
}