<?php
	try
	{
		$bdd = new PDO('mysql:host=antoinebhfant.mysql.db;dbname=antoinebhfant', 'antoinebhfant', 'AB1797sxiriuxovh', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$req = $bdd->prepare('INSERT INTO SavoirSiConnect (id, nb) VALUES (:id, :nb)');
			$req->execute(array(
			    'nb' => 1,
			    'id' => NULL
			));

	}
	catch (PDOException $e)
	{    
		echo 'Connexion échouée : ' . $e->getMessage();
	}
	//Déconnect
	$bdd = null;
?>