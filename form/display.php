<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
	include 'connexion.php' ;
		$display = "SELECT * FROM profile ";
		$x = $conn->prepare ($display);
		$x->execute();
		
		function delete(){
			
		}
?>
		<h2 align="center" > Profile Infos </h2>
		<table  border="1">
		<tr>
			<td>Name</td>
			<td>DateOfBirth</td>
			<td>Place Of Birth</td>
			<td>Adresse</td>
			<td>Phone</td>
			<td>E_mail</td>
			<td>GitHub Account</td>
			<td>Description</td>
			<td>Action</td>
		</tr>
			<?php foreach($x as $row) {?>
			
			<tr>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['DateOfBirth'];?></td>
				<td><?php echo $row['PlaceOfBirth'];?></td>
				<td><?php echo $row['Adresse'];?></td>
				<td><?php echo $row['Phone'];?></td>
				<td><?php echo $row['E_mail'];?></td>
				<td><?php echo $row['GitHub_Profile'];?></td>
				<td><?php echo $row['Description'];?></td>
				<td><a  href="delete.php;">Delete</a></td>
			</tr>
	<?php } ?>	
	</table>	
	<?php $conn = null; ?>
</body>
</html>