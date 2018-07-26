<?php
	
	$reponse = $bd->query('SELECT * FROM Profile');
	
	//affichage des donnée un par un 
	
	while($donnees= $reponse->fetch())
	{
		
?>
				<div>
					<h1 align="center"> Seifeddine Khalfa</h1>
					<hr>
					
					<div class="top-part">
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
					
					<div class="photo">
						<img src="image.jpg" height="300" width="150" />
					</div>	
					
				</div>
			
			
			<?php
			}
				$reponse->closeCursor();
			?>