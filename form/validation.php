<?php
	$errorInputs = [];
	$requireElements = array("name", "DateOfBirth", "PlaceOfBirth", "Adresse", "Phone", "E_mail", "GitHub_Profile", "Description");
	if($_POST)
	{
		$name= $_POST['name'];
		$DateOfBirth=$_POST['DateOfBirth'];
		$PlaceOfBirth=$_POST['PlaceOfBirth'];
		$Adresse=$_POST['Adresse'];
		$Phone=$_POST['Phone'];
		$E_mail=$_POST['E_mail'];
		$GitHub_Profile=$_POST['GitHub_Profile'];
		$Description=$_POST['Description'];
	
		foreach ($requireElements as $key => $inputName) 
		{
			if(!isset($_POST[$inputName]) || $_POST[$inputName] == "")
			{
				$errorInputs[] = $inputName;
			}
		}
		

		if (count($errorInputs)==0) 
		{
			
			
			include"connexion.php";
			
			$sql = "INSERT INTO profile (name, DateOfBirth, PlaceOfBirth, Adresse, Phone, E_mail, GitHub_Profile, Description)
				VALUES ('$name','$DateOfBirth', '$PlaceOfBirth', '$Adresse', '$Phone', '$E_mail', '$GitHub_Profile', '$Description')";
				// use exec() because no results are returned
				$conn->exec($sql);
				//style***
				echo "New record created successfully";
				header("location:formulaire.php");
				
			
				

			$conn = null;
		}	
		
	
	}
	
	
	
?>