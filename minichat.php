<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8"/>
	<title>Mini-chat</title>

</head>
<style>
	form
	{
		text-align:center;
	}
</style>

<body>
<form action="minichat_post.php" method="post">
	<p>
		<label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
		<label for="message">Message</label> : <input type="text" name="message" id="message" /><br />


        <input type="submit" name="Envoyer" />
	</p>
    

</form>

<?php
// Connexion à la BDD
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test_2;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	       die('Erreur : '.$e->getMessage());
}

//récup 10 dernier msg
$reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');

//affiche tout les msg (protection par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();

?>

    </body>

</html>