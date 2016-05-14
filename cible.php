<!DOCTYPE html>
<html>

<head>

	<title>
		
	</title>

</head>

<body>

   <p>Bonjour pecnau !</p>

   <p>je sais qui tu es ! Tu es <?php echo htmlspecialchars($_POST['prenom']); ?> !</p>

   <p>Tu veux changer d'identiter ? alors cliques <a href="formulaire1.php">ici</a> !</p>

   <p>Merci pour votre petit message au fait :D (si dessous)</p>

   <p><?php echo $_POST['message']  ?></p>

</body>

</html>