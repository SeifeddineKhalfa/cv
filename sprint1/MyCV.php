<?php
	session_start();
	$_SESSION["name"]='seifeddine khalfa';
	
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
				<!--=====================Détails DISPLAY====================================-->	
				<div class="details" id="details">
					<ul><h2>Détails</h2>
						<li>Name : <?php echo $_SESSION["name"] ; ?></li>
						<li>E_mail : <?php echo $_SESSION["email"] ; ?></li>
						<li></li>
					</ul>
				</div>
				<!--=====================Détails EDIT FORM====================================-->	
				<div class="details-form" id="details-form">
					<form method="POST" action=""  id="details"  novalidate ; >
						<b>Name : </b> <br>
						<div>
							<input type="text"   name="name" id="name" class="name"
							value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>" > 
							<span class="message" > Required </span>
							
						</div>
						<br>
						
						<b>DateOfBirth : </b><br>
						<div>
							<input type="date" name="DateOfBirth"   id="dateOfBirth" required
							value="<?php echo isset($_POST['DateOfBirth']) ? $_POST['DateOfBirth'] : '' ?>">
							<span class="message"> Insert Date Of Birth </span>
						</div>
						<br>
						
						<b>Place Of Birth : </b><br>
						<div>
							<input type="text" name="PlaceOfBirth"   id="palceOfBirth" required
							value="<?php echo isset($_POST['PlaceOfBirth']) ? $_POST['PlaceOfBirth'] : '' ?>">
							<span class="message"> Insert Date Of Birth </span>
						</div>
						<br>
						
						<div>
							<b>Adresse</b>  <br>
							<input type="text"   name="Adresse" id="adress" 
							value="<?php echo isset($_POST['Adresse']) ? $_POST['Adresse'] : '' ?>"> 
							<span class="message"> Insert Adress </span>
						</div>
						<br>
						
						
						<div>
							
							<b>Phone</b>   <br>
							<input type="text"   name="Phone" id="phone"
							value="<?php echo isset($_POST['Phone']) ? $_POST['Phone'] : '' ?>"> 
							<span class="message"> Insert Phone </span>
						</div>	<br>
						
						<div>
							<b>E_mail:</b>  <br>
							<input type="email" name="E_mail" id="email"   placeholder="Enter a valid email address"  required
							value="<?php echo isset($_POST['E_mail']) ? $_POST['E_mail'] : '' ?>">
							
						</div>
						<br>
						
						<div>
							<b>GitHub Account:</b>  <br> 
							<input type="text" name="GitHub_Profile"   id="githubProfile" placeholder="Enter a valid url" required
							value="<?php echo isset($_POST['GitHub_Profile']) ? $_POST['GitHub_Profile'] : '' ?>">
							<span class="message"> insert your github profile </span>
						</div>
						<br>
						
						<div>
							<b>Description</b>  <br> 
							<input type="text" name="Description"   id="description" required
							value="<?php echo isset($_POST['Description']) ? $_POST['Description'] : '' ?>">
							<span class="message"> you must insert a description </span>
						</div>
						<br>
						
						<input type="submit" value="Submit"  > 
						<input type="reset">
					</form>
				</div>
				<!--=====================Profile picture====================================-->
				<div class="profile-picture">
					<input type="">
				</div>
			</div>
		</div>
	</body>
</html>