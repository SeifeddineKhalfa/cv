<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>

		<?php 
			if(isset($_POST['mail']))
			{	
				$db = new PDO('mysql:host=localhost;dbname=cv', 'root' , '');
				$sql = "SELECT email FROM users WHERE email ='".$_POST['mail']."'";
				$result=$db->prepare($sql);
				$result->execute();
				
				 $nbrResult =  $result->rowCount();
				
				//var_dump($stmt);
				//die();
				
				// generate a new random password 
				$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
				$newPassword = substr( str_shuffle( $chars ), 0, 8 );
				
				
				//testing ****************************........******************.******	
				if ($nbrResult == 1)
				{
				//sending new password 
			
				require 'class.phpmailer.php';
				$mail = new PHPMailer();
				$mail->IsSMTP();
				$mail->Mailer = 'smtp';
				$mail->SMTPAuth = true;
				$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
				$mail->Port = 465;
				$mail->SMTPSecure = 'ssl';
				// or try these settings (worked on XAMPP and WAMP):
				// $mail->Port = 587;
				// $mail->SMTPSecure = 'tls';
				 
				 
				$mail->Username = "khalfaseifeddine@gmail.com";
				$mail->Password = "matadorest";
				 
				$mail->IsHTML(true); // if you are going to send HTML formatted emails
				$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.
				 
				$mail->From = "khalfaseifeddine@gmail.com";
				$mail->FromName = "Seifeddine Khalfa";
				 
				$mail->addAddress($_POST['mail'],"seif");
				//$mail->addAddress("user.2@gmail.com","User 2");
				 
				//$mail->addCC("user.3@ymail.com","User 3");
				//$mail->addBCC("user.4@in.com","User 4");
				 
				$mail->Subject = "Testing PHPMailer with localhost";
				$mail->Body = "The new password is " . $newPassword . ".";
				 
				if(!$mail->Send())
					echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
				else
					echo "Message has been sent";
				
				//************************************//
				//update password (use md5())
				
				$encryptedPwd 	= MD5($newPassword);
				$mail			=$_POST['mail'];
			
				$update = "UPDATE users SET password='$encryptedPwd' WHERE email='$mail'";
				$req = $db -> prepare($update);
				$req->execute();
				//$resultat=$req->execute();
				//var_dump($resultat);
				//die();
				}
				else{
					?>
					<div style="position: relative;
						
						background: #AED6F1;
						
						margin: 0 auto 100px;
						
						
						box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);">
					 <h1 align="center" style="color:#EB7B2D ;margin:300px;"> This email may be wrong or not registred before !  <br>
					 Please <a href="register.php">Register</a> <br>
					 
					 </h1>
					</div> 
				<?php	 
				}
			}
		?>
	</body>
</html>