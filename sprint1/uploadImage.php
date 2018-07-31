<?php 
	session_start();
	
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
	
	if (isset($_POST['submit'])) {

		$image=$_POST['profileImage'];
	}
?>