<?php
	$errorInputs = [];
	$requireElements = array("name", "email", "password");
	if($_POST)
	{
		$name		= $_POST['name'];
		$email		= $_POST['email'];
		$password	= $_POST['password'];

	
		foreach ($requireElements as $key => $inputName) 
		{
			if(!isset($_POST[$inputName]) || $_POST[$inputName] == "")
			{
				$errorInputs[] = $inputName;
			}
		}
		

		if (count($errorInputs)==0) 
		{
			
			
			//include 'DB.php';
			//$db = DB::getInstance();
			$db = new PDO('mysql:host=localhost;dbname=cv', 'root' , '');
			$sql = 'INSERT INTO users (email, password) VALUES (?, ?);';
			$stmt = $db->prepare($sql);
			// use exec() because no results are returned
			$stmt->execute([$email, MD5($password)]);
			//style***
			echo "New record created successfully";
			session_start();
			$_SESSION["message"] = "Account have been created !";
			header("location:authentification.php");


			$conn = null;
		}	
		
	
	}