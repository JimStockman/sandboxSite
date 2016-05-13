<?php 
if (isset($_FILES['monfichier']) AND $FILES['monfichier']['error'] == 0) 
{
	if ($_FILES['monfichier']['size'] <= 1000000) 
	{
		$infosfichier = pathinfo($_FILES['monfichier']['name']);
		$extension_upload = $infosfichier['extension'];
		$extension_autorisees = array('jpg','jepeg','gif','png');
		if (in_array($extension_upload, $extension_autorisees))
		{
			move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
			echo "Fichier reçu !";
		}	
	}
}
 ?>
