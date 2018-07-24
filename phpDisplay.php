<html>
	<head>
		<link  rel="stylesheet" type="text/css" href="css/phpstyle.css">
	</head>
		
	<body>
		<?php include 'displayphp/cnx.php' ;
			  include 'displayphp/profileinfo.php';
		?>

		<hr>
				
		<?php include 'displayphp/skills.php';?>	
				
		<div class="buttoom-side">	
			<h2><u><b>Education</b></u></h2>

			<?php include 'displayphp/education.php';?>		
					
			<h2><u><b>Academic Experience</b></u></h2>
					
			<?php include 'displayphp/experience.php';?>		
					
			<h2><u><b>Professional Experience</b></u></h2>
					
			<?php include 'displayphp/proexperience.php';?>		
		</div>	
	</body>	
</html>		