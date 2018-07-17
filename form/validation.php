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
			/*include 'cnx.php';
			$sql = "INSERT INTO profile (name, DateOfBirth, PlaceOfBirth, Adresse, Phone, E_mail, GitHub_Profile, Description)
			VALUES ('$name','$DateOfBirth', '$PlaceOfBirth', '$Adresse', '$Phone', '$E_mail', '$GitHub_Profile', '$Description')";
			$bd->query($sql);
			$bd->exec($dbh);*/
			
		
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "cv";

			try {
				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				// set the PDO error mode to exception
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO profile (name, DateOfBirth, PlaceOfBirth, Adresse, Phone, E_mail, GitHub_Profile, Description)
			VALUES ('$name','$DateOfBirth', '$PlaceOfBirth', '$Adresse', '$Phone', '$E_mail', '$GitHub_Profile', '$Description')";
				// use exec() because no results are returned
				$conn->exec($sql);
				//style***
				echo "New record created successfully";
				}
			catch(PDOException $e)
				{
				echo $sql . "<br>" . $e->getMessage();
				}

			$conn = null;
			
			

			
		}	
		
	
	}
	
	
	
?>