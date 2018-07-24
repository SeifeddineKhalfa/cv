<?php 
	include "DB.php";
	$db = DB::getInstance();
	$reponse = $db->$cnx->query('SELECT * FROM Profile');
	$data = $reponse->fetch();
	
	var_dump($data);
	die;
?>