<?php
			
			$reponse = $bd->query('SELECT * FROM Education');
			
			//affichage des donnée un par un 
			
			while($donnees= $reponse->fetch())
			{
				
		?>

			<div >
							
							
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