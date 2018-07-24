<!DOCTYPE HTML>
<html>
	<head>
		<title>Register</title>
		<meta charset="UTF-8">
		<!--===============================================================================================-->	
		<link rel="icon" type="image/png" href="registericon.png"/>
		<link rel="stylesheet" type="text/css" href="registerstyle.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->	
		<script src="register.js"></script>
		
	</head>
	
	<body>
		<div class="container">
			<div class="form">
				<form class="registerform" name="registerForm" method="POST" action="newUser.php">
					<div class="formtitle">
						Welcome To Register Form
					</div>
						<input type="text" name="name" placeholder="Name" required> 
						
						<input type="email" name="email" placeholder="Email"  required>
						<label>
						
							<input type="password" name="password" id="password" placeholder="Password"   required>
							
							<input type="password" name="confirmpassword" id="confirm_password"  onkeyup='check();' placeholder="Retype Password" required>
							
						<span class="">	
							<i class="fa fa-check-square" id="success-icon" style="font-size:24px"></i>
							<i class="fa fa-times" id="failure-icon"  style="font-size:24px"></i>
						</span>	
							
							
						</label>
						
						<button type="submit" value="submit">Create Account</button>
						<a href="authentification.php"> Return to Login </a>
					
				</form>
			</div>
			
		</div>
	</body>
</html>
