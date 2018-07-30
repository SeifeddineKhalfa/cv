<?php
	session_start();
	
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
	
					try
					{
						// On se connecte à la base
						$db = new PDO('mysql:host=localhost;dbname=cv', 'root' , '');
					}
					catch(Exception $e)
					{
						// En cas d'erreur, on affiche un message et on arrête tout
						   die('Erreur : '.$e->getMessage());
					}
		//include 'DB.php';
		//$db = DB::getInstance();
		
		$sql = 'UPDATE profile SET name=?, DateOfBirth=?, PlaceOfBirth=?, Adresse=?, Phone=?, E_mail=?, GitHub_Profile=?, Description=? 
		WHERE E_mail ="'.$_SESSION['email'].'" ';
		$stmt = $db->prepare($sql);	
		$stmt->execute(
			[$name,$DateOfBirth,$PlaceOfBirth,$Adresse,$Phone,$E_mail,$GitHub_Profile,$Description]
		);
		
		$req = 'UPDATE users SET name=? WHERE email="'.$_SESSION['email'].'"';
		$result = $db->prepare($req);	
		$result->execute([$name]);
		
		header("location:MyCV.php");
?>		
		