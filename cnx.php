<?php
	try{
		
		$bd= new PDO('mysql:host=localhost;dbname=cv', 'root' , '');
	}
		
	catch(Exception $e){
		die('Erreur' .$e->getMessage());
	}	
?>