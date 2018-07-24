<?php
	function delete()
	{
		include 'connexion.php';
		$delete = "DELETE * FROM profile WHERE  ";
		$s = $conn->prepare ($delete);
		$s->execute();
	}
?>	