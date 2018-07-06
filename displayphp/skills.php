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