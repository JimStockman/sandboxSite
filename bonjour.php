<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Réception de paramètres dans l'URL</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>
   

<?php

if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter']))
{

$_GET['repeter'] = (int) $_GET['repeter'];

if ($_GET['repeter'] >= 1 AND $_GET['repeter'] <=100)
  { 

	for ($i = 0 ; $i < $_GET['repeter'] ; $i++)
	{
		echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !<br />';
	}
  }	

}
else
{
   echo 'Il faut renseigner un nom, un prénom et un nombre de répétitions !';
}

?>


   </body>
</html>
