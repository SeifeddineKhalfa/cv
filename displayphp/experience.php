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