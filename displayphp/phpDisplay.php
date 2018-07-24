<?php
	include 'cnx.php' ;
	include 'profileinfo.php';
	
	
?>	
	<hr>
	
<?php	
	include 'skills.php';
	
	
	
		
?>
	<h2><u><b>Education</b></u></h2>
<?php
	
	include 'education.php' ;
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