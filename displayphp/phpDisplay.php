<?php
	include 'cnx.php' ;
	$reponse = $bd->query('SELECT * FROM Profile');
	
	//affichage des donnée un par un 
	
	while($donnees= $reponse->fetch())
	{
		
?>
	<div>
		<h1 align="center"> Seifeddine Khalfa</h1>
		<hr>
		
		<div>
			<table>
				<thead>
								<tr> 
									<th align="center"><h1>Personal details</h1></th>
								</tr>
							</thead>
							
							<tbody>
						
								<tr>
									<td>Name</td>
									<td><?php echo $donnees['name'];?></td>
									
								</tr>
								
								<tr>
									<td>Date of Birth</td>
									<td><?php echo $donnees['DateOfBirth'];?></td>
								</tr>
								
								<tr>
									<td>Place of Birth</td>
									<td><?php echo $donnees['PlaceOfBirth'];?></td>
								</tr>
								
								<tr>
									<td>Adress</td>
									<td><?php echo $donnees['Adresse'];?></td>
								</tr>

								<tr>
									<td>Phone</td>
									<td><?php echo $donnees['Phone'];?></td>
								</tr>
								
								<tr>
									<td>Email</td>
									<td><?php echo $donnees['E_mail'];?></td>
								</tr>

								<tr>
									<td>GitHub Profile:</td>
									<td><?php echo $donnees['GitHub_Profile'];?></td>
								</tr>	
							
							
							</tbody>
			</table>
		</div>
	</div>
	
	<?php
	}
		$reponse->closeCursor();
	?>
	
	
	
	<hr>
	
<?php	
	$reponse = $bd->query('SELECT * FROM skills');
	//affichage des donnée un par un 
	
	while($donnees= $reponse->fetch())
	{
		
?>

	<div class="left-bloc">
					<div>
						<h2><u><b>languages & IT skills</b></u></h2>	
						<h3><u>Languages</u></h3>
						<?php echo $donnees['langues'];?>
						
						<h3><u>IT skills</u></h3>
						<?php echo $donnees['ITskills'];?>
						
					
					</div>
					
					<div>
						<h2><u><b>Social Life</b></u></h2>
						<?php echo $donnees['socialLife'];?>
						<h2><u><b>Hobbies</b></u></h2>
						<?php echo $donnees['Hobbies'];?>
					</div>
					
	</div>
	
	<?php
	}
	$reponse->closeCursor();
	?>
	
	
		<h2><u><b>Education</b></u></h2>

	
<?php
	
	$reponse = $bd->query('SELECT * FROM Education');
	
	//affichage des donnée un par un 
	
	while($donnees= $reponse->fetch())
	{
		
?>

	<div class="right-bloc">
					
					
					<div>
						
						<table>
							<tr>
								<td><?php echo $donnees['period'];?></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<td><?php echo $donnees['description'];?>
								</td>
							</tr>
							
							
							
						</table>
					</div>
	</div>

	<?php
	}
	$reponse->closeCursor();
	?>	
	

	
	<h2><u><b>Academic Experience</b></u></h2>
	
	<?php
	
	$reponse = $bd->query('SELECT * FROM Experience');
	
	//affichage des donnée un par un 
	
	while($donnees= $reponse->fetch())
	{
		
	?>
	
	<table>
							<tr>
								<td ><b><?php echo $donnees['period'];?></b></td>
								<td>	<u><?php echo $donnees['titre'];?></u>
										<p><?php echo $donnees['description'];?></p>
										<br> <?php echo $donnees['tools'];?>
								</td>	
							</tr>
	</table>
	
	<?php
	}
	$reponse->closeCursor();
	?>	
	
	
	
	<h2><u><b>Professional Experience</b></u></h2>
	
	<?php
	
	$reponse = $bd->query('SELECT * FROM Experience');
	
	//affichage des donnée un par un 
	
	while($donnees= $reponse->fetch())
	{
		
	?>
	
	<table>
							<tr>
								<td ><b><?php echo $donnees['period'];?></b></td>
								<td>	<u><?php echo $donnees['titre'];?></u>
										<p><?php echo $donnees['description'];?></p>
										<br> <?php echo $donnees['tools'];?>
								</td>	
							</tr>
	</table>
	
	<?php
	}
	$reponse->closeCursor();
	?>	