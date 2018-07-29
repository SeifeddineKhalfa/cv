<?php
	if (isset($_POST['name']) && isset($_POST['DateOfBirth']) && isset($_POST['PlaceOfBirth']) && isset($_POST['Adresse'])
		&& isset($_POST['Phone']) 
	&& isset($_POST['E_mail']) && isset($_POST['GitHub_Profile']) && isset($_POST['Description']))
	{
	$name= $_POST['name'];
	$DateOfBirth=$_POST['DateOfBirth'];
	$PlaceOfBirth=$_POST['PlaceOfBirth'];
	$Adresse=$_POST['Adresse'];
	$Phone=$_POST['Phone'];
	$E_mail=$_POST['E_mail'];
	$GitHub_Profile=$_POST['GitHub_Profile'];
	$Description=$_POST['Description'];
	}
	
		include 'DB.php';
		$db = DB::getInstance();

		$sql = 'INSERT INTO profile (name,DateOfBirth,PlaceOfBirth,Adresse,Phone,E_mail,GitHub_Profile,Description ) VALUES (?, ?, ?,?,?,?,?,?,);';
		$stmt = $db->prepare($sql);	
		
?>		
		