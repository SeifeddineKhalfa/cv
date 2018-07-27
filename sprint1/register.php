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
				<form class="registerform" name="registerForm" id="registerForm" method="POST" action="newUser.php" novalidate>
					<div class="formtitle">
						Welcome To Register Form
					</div>
					<span id="alertEmptyFields" align="center" style="color:red;"></span>
					<div class="">
						<input type="text" name="name" id="name" placeholder="Name" onkeyup="return removeRedBorder();" required> 
					</div>
					
					<div id='mail_div' class="">
					
						<span id="error" align="center" style="color:red;"></span>
						<input type="email" name="email" id="email" placeholder="Email" onkeyup="return removemail();"  required>
						
					</div>
					
						
						
						<div class="">
							<input type="password" name="password" id="password" placeholder="Password"   required>
						</div>
						
						<div class="">
							<input type="password" name="confirmpassword" id="confirm_password"  onkeyup='return checkPassword();' placeholder="Retype Password" required>
							<i class="fa fa-check-square" id="success-icon" style="font-size:24px;  line-height: 38px;"></i>
							<i class="fa fa-times" id="failure-icon"  style="font-size:24px;  line-height: 38px;"></i>	
						</div>	
						
						
						<button type="submit" value="submit" onclick='return validateForm();'>Create Account</button>
						<a href="authentification.php"> Return to Login </a>
					
				</form>
			</div>
			
		</div>
	</body>
</html>
