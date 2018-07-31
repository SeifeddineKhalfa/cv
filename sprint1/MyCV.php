<?php
	session_start();                                                                                                                                                          
?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="mycv-style.css">
		<script src="mycv.js"></script>
	</head>
	
	<body>
		<div class="container">
		<div class="topnav">
			  <a class="active" href="MyCV.php">MyCV</a>
			  <a href="#">Edit Infos</a>
			  <a href="logout.php">Logout</a>
		</div>
			<div class="upper-part">
			
				<div class="title">
					<p align="center" id="title">
						<?php if (isset ($_SESSION["email"])){echo $_SESSION["email"] ;} ?>
					</p>
				</div>
				<!--=====================Détails DISPLAY====================================-->	
				
				<?php
					try
					{
						// On se connecte à la base
						$db = new PDO('mysql:host=localhost;dbname=cv', 'root' , '');
					}
					catch(Exception $e)
					{
						// En cas d'erreur, on affiche un message et on arrête tout
						   die('Erreur : '.$e->getMessage());
					}
					$sql = "SELECT * FROM profile WHERE E_mail ='".$_SESSION['email']."'";
					$result=$db->prepare($sql);
					$result->execute();
					
					while ($donnees = $result->fetch())
					{
						
				?>
				
				<div class="details" id="details" >
				
						<?php
												
						if (isset($_SESSION["notifUpdate"]))
						{?>
						<div class="notif-update">
						<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
						<?php echo $_SESSION["notifUpdate"]; ?>
						</div>
						<?php  }?>
						
					<ul><h2 style="display:inline-block;">Détails</h2>
					<input type="button" id="edit-btn" onclick="showForm();" >
						<li>Name : <?php echo $donnees['name'] ; ?></li>
						<li>E_mail :<?php echo $_SESSION["email"] ; ?></li>
						<li>Date Of Birth : <?php echo $donnees['DateOfBirth']; ?></li>
						<li>Place Of Birth : <?php  echo $donnees['PlaceOfBirth']; ?></li>
						<li>Adresse : <?php echo $donnees['Adresse']; ?></li>
						<li>Phone : <?php  echo $donnees['Phone'];  ?></li>
						<li>GitHub_Profile : <?php  echo $donnees['GitHub_Profile'];  ?></li>
						<li>Description : <?php echo $donnees['Description'];  ?></li>
					</ul>
				</div>
				 
				<!--=====================Détails EDIT FORM====================================-->
				
				<div class="form-style" id="details-form">
					
					<form method="POST" action="getData.php"  name="details-form" id="details"
					onsubmit="return confirm('Do you really want to submit the form?');">
					<h2 >Edit Infos</h2>
					
					<span class="closebtn" onclick="return closeForm();">&times;</span>
					<br>
						<b>Name : </b> <br>
						<div>
							<input type="text"   name="name" id="name" class="name"
							value="<?php if (isset ($donnees['name'])){echo $donnees['name'] ;} ?>" > 
							
						</div>
						<br>
						
						<b>Date Of Birth : </b><br>
						<div>
							<input type="date" name="DateOfBirth"   id="dateOfBirth" required
							value="<?php if (isset ($donnees['DateOfBirth'])){echo $donnees['DateOfBirth'] ;} ?>">
						</div>
						<br>
						
						<b>Place Of Birth : </b><br>
						<div>
							<input type="text" name="PlaceOfBirth"   id="palceOfBirth" required
							value="<?php if (isset ($donnees['PlaceOfBirth'])){echo $donnees['PlaceOfBirth'] ;} ?>">
						</div>
						<br>
						
						<div>
							<b>Adresse</b>  <br>
							<input type="text"   name="Adresse" id="adress" 
							value="<?php if (isset ($donnees['Adresse'])){echo $donnees['Adresse'] ;} ?>"> 
						</div>
						<br>
						
						
						<div>
							
							<b>Phone</b>   <br>
							<input type="text"   name="Phone" id="phone"
							value="<?php if (isset ($donnees['Phone'])){echo $donnees['Phone'] ;} ?>"> 
						</div>	<br>
						
						<div>
							<b>E_mail:</b>  <br>
							<input type="email" name="E_mail" id="email"   placeholder="Enter a valid email address"  required
							value="<?php if (isset ($_SESSION["email"])){echo $_SESSION["email"] ;} ?>">
							
						</div>
						<br>
						
						<div>
							<b>GitHub Account:</b>  <br> 
							<input type="text" name="GitHub_Profile"   id="githubProfile" placeholder="Enter a valid url" required
							value="<?php if (isset ($donnees['GitHub_Profile'])){echo $donnees['GitHub_Profile'] ;} ?>">
						</div>
						<br>
						
						<div>
							<b>Description</b>  <br> 
							<input type="text" name="Description"   id="description" required
							value="<?php if (isset ($donnees['Description'])){echo $donnees['Description'] ;} ?>">
						</div>
						<br>
						
						<input type="submit" name="submit" value="Submit" onclick="return ;"  > 
						<input type="reset" >
						
					</form>
				</div>
				<!--=====================Profile picture====================================-->
				<div class="profile-picture">
					<img src="<?PHP echo ($donnees['profileImage']) ; ?>" >
				
				
					<!--<form method="POST"  action="uploadImage.php" >
						
						<input type="file" >
						<br>
						<input type="submit" name="submit_image" value="Upload">
					</form>-->
				</div>
					<?php
					}
					$result->closeCursor(); // Termine le traitement de la requête
					?>
			</div>
		</div>
	</body>
</html>
