<?php
	if (isset($_POST['ProfileId'])&& isset($_POST['name']) && isset($_POST['DateOfBirth']) && isset($_POST['PlaceOfBirth']) && isset($_POST['Adresse'])
		&& isset($_POST['Phone']) 
	&& isset($_POST['E_mail']) && isset($_POST['GitHub_Profile']) && isset($_POST['Description']))
	{
	$ProfileId= $_POST['ProfileId'];
	$name= $_POST['name'];
	$DateOfBirth=$_POST['DateOfBirth'];
	$PlaceOfBirth=$_POST['PlaceOfBirth'];
	$Adresse=$_POST['Adresse'];
	$Phone=$_POST['Phone'];
	$E_mail=$_POST['E_mail'];
	$GitHub_Profile=$_POST['GitHub_Profile'];
	$Description=$_POST['Description'];
	}
	
	
	$bd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
	
	
	
	
	mysql_query('INSERT INTO Profile (ProfileId ,name, DateOfBirth, PlaceOfBirth, Adresse, Phone, E_mail, GitHub_Profile, Description)
	VALUES ("$ProfileId" ,"$name", "$DateOfBirth", "$PlaceOfBirth", "$Adresse", "$Phone", "$E_mail", "$GitHub_Profile", "$Description")
	')
	or die(mysql_error());  

?>