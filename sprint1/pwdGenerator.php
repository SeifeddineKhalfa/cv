

<!DOCTYPE HTML>
<html>
	<head>
		<title>Forgot password</title>
		<link rel="stylesheet" type="text/css" href="pwdGeneratorStyle.css">
	</head>
	
	<body>
		<div class="container">
			<div class="form">
				<form class="pwdGenerator" name="pwdGenerator" method="POST" action="generatepwd.php">
					
					<h1> Forgot Password ? </h1>
					
					<input type="email" class="mail" name="mail" placeholder="Enter your Login Email Adress" required>
					
					<input type="submit" id="submit" value="Send">
					<a href="authentification.php" class="return">Return</a>
				
				</form>
			</div>
		</div>
		
	</body>
</html>

