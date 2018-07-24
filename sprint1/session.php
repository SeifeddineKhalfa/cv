<!doctype html>
<html>
    <head>
        <title>Login </title>
        <link rel="stylesheet" type="text/css" href="#"/>
        
    </head>
    
    <body>
        <?php
			if(isset($_POST['email']) && isset($_POST['pwd']))
			{
				//include 'DB.php';
				//$db = DB::getInstance();
				
				$db = new PDO('mysql:host=localhost;dbname=cv', 'root' , '');
				
				$password=MD5($_POST['pwd']);
				$query = "SELECT * FROM users WHERE email ='".$_POST['email']."' AND password='".$password."'" ;
			    $statement = $db->prepare($query);  
			    $statement->execute
				(  
					array(  
						 'email'     =>     $_POST["email"],  
						 'password'     =>  $_POST["pwd"]  
					)  
				);  
			   $count = $statement->rowCount();  
			   if($count > 0)  
			   {  
				   session_start();
					$_SESSION["email"] = $_POST["email"];  
					header("location:MyCV.php");  
			   }  
			   else  
			   {  
					 
			   }  

			}

		?>
	</body>	
</html>		