<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
	</head>
	
	<body>
		<?php
			echo 'Hello';
		?>
		<br>
		<p>This is your CV</p>
		<?php
			echo $_SESSION["email"];	
		?>
		<br>
		<a href="logout.php">Logout</a>
	</body>
</html>