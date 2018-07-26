<?php
	session_start();
	
?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="mycv-style.css">

	</head>
	
	<body>
		<div class="container">
			<div class="upper-part">
			
				<div class="title">
					<p align="center" id="title">
						<?php if (isset ($_SESSION["email"])){echo $_SESSION["email"] ;} ?>
					</p>
				</div>
				<div class="details">
					
				</div>
				
				<div class="profile-picture">
					
				</div>
			</div>
		</div>
	</body>
</html>