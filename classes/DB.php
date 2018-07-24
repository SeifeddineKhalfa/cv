<?php
 
class DB {
 
   //
   private static $_instance = null;
 
   //constructeur
   private function __construct() {  
   }
 
	protected function connect()
		{
			try
			{
				$bd= new PDO('mysql:host=localhost;dbname=cv', 'root' , '');
			}
				
			catch(PDOException  $e)
			{
				echo('Erreur' .$e->getMessage());
			}	
	
		}
  //instanciation d'objet unique 
    public static function getInstance()
	{
		if(is_null(self::$_instance)) {
		   self::$_instance = new DB();  
		}
	 
		return self::$_instance;
    }
}
 
?>