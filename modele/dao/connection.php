<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=actualites;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
	echo "Erreur de connexion à la base de données : ".$e->getMessage();
	$bdd = "nkjlblj";
}
?>
