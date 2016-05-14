<!DOCTYPE html>
<html>
<head>
	<title>target</title>
</head>
<body>

<?php if (isset($_POST['MDP']) AND $_POST['MDP'] == "smile")

{?>

<p>Bien joué <?php echo $_POST['prenom']; ?> pour avoir trouvé le mot de passe, tu as gagné un cookie :D</p>

<img src="http://vignette2.wikia.nocookie.net/halo/images/7/70/Cookie.png/revision/latest?cb=20120712170459">
<?php

}
else
{
   echo '<p>Dommage, essaye encore ;)</p>';
}
?>

   </body>
</html>