<?php
try
{
	//Connection
	$bd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	
        die('Erreur : '.$e->getMessage());
}



$reponse = $bd->query('SELECT * FROM Profile');

$sth = $bd->prepare("SELECT * FROM Profile");
$sth->execute();

/* Fetch all of the remaining rows in the result set */
print("Fetch all of the remaining rows in the result set:\n");
$result = $sth->fetchAll(\PDO::FETCH_ASSOC);
echo "<pre>";
print_r($result);
die ;

while ($donnees = $reponse->fetch())
{
?>
    <p>
    <b>ID:</b> <?php echo $donnees['ProfileId'];?>
	<br />
    Nom  : <?php echo $donnees['name']; ?>
	<br/>
	DateOfBirth  : 	<?php echo $donnees['DateOfBirth']; ?>
	<br />
    Place of birth <?php echo $donnees['PlaceOfBirth']; ?>
	<br/> 
	Adresse  : <?php echo $donnees['Adresse']; ?> 
	<br />
    Phone  : 	<?php echo $donnees['Phone']; ?> 
	<br>
	E_mail: 	<?php echo $donnees['E_mail']; ?> 
	<br/>
	Description	: <?php echo $donnees['Description']; ?>
    </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
<br>
<?php
	$reponse = $bd->query('SELECT * FROM skills');
	
	while ($donnees = $reponse->fetch())
	{
?>
	ID : <?php echo $donnees['SkillsId'];?>
	<br>
	Languages : <?php echo $donnees['langues'];?>
	<br>
	ITskills  : <?php echo $donnees['ITskills'];?>
	<br>
	socialLife :<?php echo $donnees['socialLife'];?>
	<br>
	Hobbies : <?php echo $donnees['Hobbies'];?>
	
<?php
	}
	$reponse->closeCursor();
?>