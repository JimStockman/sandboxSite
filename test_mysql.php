
<!DOCTYPE html>
<html>
<head>
	<title>test_MySQL</title>
</head>
<body>

<?php

try
{
$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}

catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}


$reponse = $bdd->query('SELECT * FROM jeux_video');

while ($donnees = $reponse->fetch()) 
{
?>

    <p>
    <strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />
    Le possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, 
    et il le vend à <?php echo $donnees['prix']; ?> euros !<br />
    Ce jeu fonctionne sur <?php echo $donnees['console']; ?> 
    et on peut y jouer à <?php echo $donnees['nbre_joueurs_max']; ?> au maximum<br />
    <?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur <?php echo $donnees['nom']; ?> :
    <em><?php echo $donnees['commentaires']; ?></em>
    </p>
<?php
}

$reponse->closeCursor();

?>
</body>

</html>