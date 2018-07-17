<!DOCTYPE HTML>
<html>
	<head>
		<title>formulaire</title>
		<link  rel="stylesheet" type="text/css" href="formstyle.css">
		<!--<script src="validation.js"></script>!-->
		
	</head>
	
	<body>
	<?php
	include "validation.php";
	?>
		<div class="upcontainer">
			<div class="profileform">
			<h2 align="center">Profile Infos</h2>
				<form method="POST" action=""  id="profile"  novalidate ; >
				
						
						
						<b>Name : </b> <br>
						<div
							<?php
								if(in_array("name", $errorInputs))
								{
									echo "class = 'error' ";
								}
								
								if(isset($_POST['name']))
								{
									 echo "class='valid'";
								}
							?>>
							<input type="text"   name="name" id="name" class="name"
							value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>" > 
							<label><em>*</em></label>
														
							<span class="message" > Required </span>
							
						</div><br>
						
						<b>DateOfBirth : </b><br>
						<div <?php
								if(in_array("DateOfBirth", $errorInputs))
								{
									echo "class = 'error' ";
								}
								
								if(isset($_POST['DateOfBirth']))
								{
									 echo "class='valid'";
								}
							?>>
							<input type="date" name="DateOfBirth"   id="dateOfBirth" required
							value="<?php echo isset($_POST['DateOfBirth']) ? $_POST['DateOfBirth'] : '' ?>">
							<label><em>*</em></label>
							<span class="message"> Insert Date Of Birth </span>
						</div><br>
						
						<b>Place Of Birth : </b><br>
						<div <?php
								if(in_array("PlaceOfBirth", $errorInputs))
								{
									echo "class = 'error' ";
								}
								
								if(isset($_POST['PlaceOfBirth']))
								{
									 echo "class='valid'";
								}
							?>>
							<input type="text" name="PlaceOfBirth"   id="palceOfBirth" required
							value="<?php echo isset($_POST['PlaceOfBirth']) ? $_POST['PlaceOfBirth'] : '' ?>">
							<label><em>*</em></label>
							<span class="message"> Insert Date Of Birth </span>
						</div><br>
						
						<div <?php
								if(in_array("Adresse", $errorInputs))
								{
									echo "class = 'error' ";
								}
								
								if(isset($_POST['Adresse']))
								{
									 echo "class='valid'";
								}
							?>>
							<b>Adresse</b>  <br>
							<input type="text"   name="Adresse" id="adress" 
							value="<?php echo isset($_POST['Adresse']) ? $_POST['Adresse'] : '' ?>"> 
							<label><em>*</em></label>
							<span class="message"> Insert Adress </span>
						</div><br>
						
						<div <?php
								if(in_array("Phone", $errorInputs))
								{
									echo "class = 'error' ";
								}
								
								if(isset($_POST['Phone']))
								{
									 echo "class='valid'";
								}
							?>>
							<b>Phone</b>   <br>
							<input type="text"   name="Phone" id="phone"
							value="<?php echo isset($_POST['Phone']) ? $_POST['Phone'] : '' ?>"> 
							<label><em>*</em></label>
							<span class="message"> Insert Phone </span>
						</div>	<br>
						
						<div <?php
								if(in_array("E_mail", $errorInputs))
								{
									echo "class = 'error' ";
								}
								
								if(isset($_POST['E_mail']))
								{
									 echo "class='valid'";
								}
							?>
							<b>E_mail:</b>  <br>
							<input type="email" name="E_mail" id="email"   placeholder="Enter a valid email address"  required
							value="<?php echo isset($_POST['E_mail']) ? $_POST['E_mail'] : '' ?>">
							
						</div><br>
						
						<div <?php
								if(in_array("GitHub_Profile", $errorInputs))
								{
									echo "class = 'error' ";
								}
								
								if(isset($_POST['GitHub_Profile']))
								{
									 echo "class='valid'";
								}
							?>>
							<b>GitHub Account:</b>  <br> 
							<input type="text" name="GitHub_Profile"   id="githubProfile" placeholder="Enter a valid url" required
							value="<?php echo isset($_POST['GitHub_Profile']) ? $_POST['GitHub_Profile'] : '' ?>">
							<label><em>*</em></label>
							<span class="message"> insert your github profile </span>
						</div><br>
						
						<div <?php
								if(in_array("Description", $errorInputs))
								{
									echo "class = 'error' ";
								}
								
								if(isset($_POST['Description']))
								{
									 echo "class='valid'";
								}
							?>>
							<b>Description</b>  <br> 
							<input type="text" name="Description"   id="description" required
							value="<?php echo isset($_POST['Description']) ? $_POST['Description'] : '' ?>">
							<label><em>*</em></label>
							<span class="message"> you must insert a description </span>
						</div>
						<br>
						
						<input type="submit" value="Submit"  > 
						<input type="reset">
					 
				</form>
			</div>
			<div class="skillsform">
				<h2 align="center" > Skills </h2>
				<form method="POST"  name="skills" novalidate onsubmit="validateSkills();";>
						<div>
						 <b>Id :</b> <br> 
						<input type="number" name="ProfileId" min="0" max="50" value="1">
						</div>	<br>
						 <b>SkillsId :</b> 
						<input type="number" name="ProfileId" min="0" max="50" value="1"> <br>
						 <b>Languages :</b>  <br>
							 
								<input type="checkbox" name="Arabic" id="lang1"	 value="Arabic">Arabic<br>
								<input type="checkbox" name="English" id="lang2" value="English">English<br>
								<input type="checkbox" name="French" id="lang3" value="French">French<br>
								 <b>Other : </b><input type="text" name="otherLanguages">  
							 
						 <b>ItSkills : </b> <br>
							 
								 <b>Programming : </b> 
								<input type="checkbox" name="php" id="it1" value="php">PHP<br>
								<input type="checkbox" name="html/css" id="it2" value="html/css" >HTML/CSS<br>
								<input type="checkbox" name="JavaScript" id="it3" value="JavaScript">JavaScript <br>
								<input name="skill1" value="Other" />
								<input name="skill2" value="Other" />
								<input name="skill3" value="Other" />
								 <b>Design : </b> 
								
								 
									<input type="checkbox" name="Photoshop" value="Photoshop">Photoshop<br>
									<input type="checkbox" name="illustrator" value="illustrator" >Illustrator<br>
									 <input name="design" value="Other" /> 	
								 
								 <b>Other ItSkills : </b> 
								<input name="otheritskills" value="Other" />		
							 
						 <b>SocialLife : </b> 	
						<input type="text" name="socialLife" >
						 <b>Hobbies : </b> 
						<input type="text" name="hobbies" >
					 
					<input type="submit" value="Submit" >
					<input type="reset">
				</form>
			</div>
		</div>
		<div class="buttomcontainer">
			<div class="educationform">
				<h2 align="center">Education</h2>
				<br>
				<form method="POST"  name="education" novalidate>
					<table>
						<tr>
							<td><b>Profile ID : </b></td>
							<td><input type="number" name="ProfileId" min="0" max="50" value="1"> </td>
						</tr>
						<tr>
							<td><b>Id : </b></td>
							<td><input type="number" name="id" min="0" max="50" value="1"></td>
						
						<tr>
							<td><b>Period : </b></td>
							<td><input type="text" name="period"></td>
						</tr>
						<tr>
							<td><b>Description</b>
							<td><textarea rows="5" cols="40">Enter your education level here</textarea>
						</tr>
					</table>
					<input type="submit" value="Submit" > 
					<input type="reset">
				</form>
			</div>
			
			<div class="experienceform">
				<h2 align="center"> Experience</h2>
				<br>
				<form method="POST"  name="experience" novalidate>
					
						<h3 align="center">Academic</h3>
						<table>
							<tr>
								<td><b>Period :</b></td>
								<td><input type="text" name="period"></td>
								<td><b>Title</b></td>
								<td><input type="text" name="titre">
							</tr>
							<tr>
								<td><b>Description : </b></td>
								<td><textarea>Enter description</textarea>
								<td><b>Tools : </b></td>
								<td><textarea>Enter Tools</textarea>
							
							</tr>
						</table>
						
						<h3 align="center">Professional</h3>
						<table>
							<tr>
								<td><b>Period :</b></td>
								<td><input type="text" name="period"></td>
								<td><b>Title</b></td>
								<td><input type="text" name="titre">
							</tr>
							<tr>
								<td><b>Description : </b></td>
								<td><textarea>Enter description</textarea>
								<td><b>Tools : </b></td>
								<td><textarea>Enter Tools</textarea>
							
							</tr>
						
						</table>
						<input type="submit" value="Submit" > 
						<input type="reset">
				</form>	
			</div>
		</div>
		
		
	</body>
</html>

?>