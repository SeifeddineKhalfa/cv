<?php

/**
LA CLASSE DE CONFIGURATION DE LA BASE DE DONNEE
*/
class DB
{
	private static $instance = NULL; 
	public static function getConnexion() 
	{
      	if (!isset(self::$instance)) 
      	{
			try
			{
		        self::$instance = new PDO('mysql:host=localhost;dbname=cv', 'root' , '');
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(Exception $e)
			{
	            die('Erreur: '.$e->getMessage());
			}
      	}
      	return self::$instance;
    }
}

?>

