 <?php 
//connection à la BDD
try {
	$bdd = new PDO('mysql:host=localhost;dbname=test_2;charset=utf8', 'root', '');
} 

catch (Exception $e) {
	die('Erreur : '.$e-getMessage());
}

// Insertion des messages grâce à la requête préparée
$req = $bdd->prepare ('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

//redirection vers le minichat
header('location: minichat.php');

 ?>