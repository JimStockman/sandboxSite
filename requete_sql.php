
<?php

try
{
$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}

catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT nom FROM jeux_video');

while ($donnees = $reponse->fetch()) 
{
	echo $donnees['nom'] . '<br />';
}

$reponse->closeCursor();

?>