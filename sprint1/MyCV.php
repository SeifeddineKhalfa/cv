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
		<div class="topnav">
			  <a class="active" href="#home">MyCV</a>
			  <a href="">Edit Infos</a>
			  <a href="logout.php">Logout</a>
		</div>
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
						<li>E_mail :<?php //echo $_SESSION["email"] ;// ?></li>
						<li>Date Of Birth : <?php  ?></li>
						<li>Place Of Birth : <?php   ?></li>
						<li>Adresse : <?php ?></li>
						<li>Phone : <?php    ?></li>
						<li>GitHub_Profile : <?php    ?></li>
						<li>Description : <?php   ?></li>
					</ul>
				</div>
				<!--=====================Détails EDIT FORM====================================-->
				
				<div class="form-style" id="details-form">
					<h2 >Add Infos</h2>
					<form method="POST" action=""  name="details-form" id="details"   >
					
						<b>Name : </b> <br>
						<div>
							<input type="text"   name="name" id="name" class="name"
							value="" > 
							
						</div>
						<br>
						
						<b>DateOfBirth : </b><br>
						<div>
							<input type="date" name="DateOfBirth"   id="dateOfBirth" required
							value="">
						</div>
						<br>
						
						<b>Place Of Birth : </b><br>
						<div>
							<input type="text" name="PlaceOfBirth"   id="palceOfBirth" required
							value="">
						</div>
						<br>
						
						<div>
							<b>Adresse</b>  <br>
							<input type="text"   name="Adresse" id="adress" 
							value=""> 
						</div>
						<br>
						
						
						<div>
							
							<b>Phone</b>   <br>
							<input type="text"   name="Phone" id="phone"
							value=""> 
						</div>	<br>
						
						<div>
							<b>E_mail:</b>  <br>
							<input type="email" name="E_mail" id="email"   placeholder="Enter a valid email address"  required
							value="">
							
						</div>
						<br>
						
						<div>
							<b>GitHub Account:</b>  <br> 
							<input type="text" name="GitHub_Profile"   id="githubProfile" placeholder="Enter a valid url" required
							value="">
						</div>
						<br>
						
						<div>
							<b>Description</b>  <br> 
							<input type="text" name="Description"   id="description" required
							value="">
						</div>
						<br>
						
						<input type="submit" value="Submit"  > 
						<input type="reset" >
					</form>
				</div>
				<!--=====================Profile picture====================================-->
				<div class="profile-picture">
					<img src="NoImageAvailable.png" alt="No Image Available">
					<button  type="button" onclick="" >Chnage Picture</button>
				</div>
			</div>
		</div>
	</body>
</html>