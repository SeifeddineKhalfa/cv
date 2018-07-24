<!DOCTYPE HTML>
<html>
	<head>
		<title>Login</title>
		<meta charset="UTF-8">
		<!--===============================================================================================-->	
		<link rel="icon" type="image/png" href="loginIcon.png"/>
		<link rel="stylesheet" type="text/css" href="loginstyle.css">
		<!--===============================================================================================-->	
		<script src="athentificationVerif.js"></script>
	</head>
	
	<body>
		<div class="container">
			<div class="form">
				<form class="loginform" name="loginForm" id="loginForm" method="POST" onsubmit="return athentification()" action="session.php"   >
					
					<!--modifie size-->
					<!--<div class="logo">
						<input type="image" src="logo.png" align="center">
					</div>-->
					
					
						
						<?php
						
							session_start();
							
							if (isset($_SESSION["message"]))
							{?>
								<div class="account-created-msg">
								<?php echo $_SESSION["message"]; ?>
								</div>
							<?php	
								session_unset();
							}
						?>
						
					
					
					<div class="formtitle">
						Welcome
					</div>

						<input type="email" name="email" id="email" placeholder="Email"  required>

						<input type="password" name="pwd" id="pwd" placeholder="Password" required>
						
						<button type="submit" class="log"> Login </button>
						
						
						<a href="pwdGenerator.php" class="forgotpwd">Forgot your password ? </a>
					
				</form>
				
				<a href="register.php" ><button class="reg">Register</button></a>
			
			</div>
			
		</div>
	</body>
</html>
