<?php

	
	//conncection a la base
	try{
		mysql_connect("localhost", "root", "");
	}
	catch(Exception $e){
		die ("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";
?>

<html>
	<head>
		<title>Insert</title>
	</head>
	
	<body>
		<?php
			$sql= 'SELECT * FROM Profile WHERE ProfleId="01" ';
			$req= mysql_query($sql) or die('error SQL');
			$infos= mysql_fetch_array($req);
			mysql_close();
		?>
	</body>
</html>	