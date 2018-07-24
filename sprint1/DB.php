<?php
 
class DB {
 
   //
   private static $_instance = null;
   public $connexion ;
 
   //constructeur
   private function __construct() {  
	try
		{	
			echo "\n new instance";
			$this->$connexion = new PDO('mysql:host=localhost;dbname=cv', 'root' , '');
		}
			
		catch(Exception $e)
		{
			die('Erreur' .$e->getMessage());
		}	
   }
 
	
  //instanciation d'objet unique 
    public static function getInstance()
	{
		if(is_null(self::$_instance)) {
		   self::$_instance = new DB();  
		}else
			echo "\n persist instance";
	 
		return self::$_instance;
    }
	
}
 
?>