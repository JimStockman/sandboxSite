<?php 
$phrase = 'Je suis une chaîne de caractères, et je le vis bien :D';
$longueur = strlen($phrase);


echo 'La phrase ci-dessous contient ' . $longueur . ' caractères :<br ></code>' . $phrase . ' <br />';
 ?>

 <?php 
$ma_phrase = str_replace('v', 'e', 'Jv suis Jvrvmi');

echo $ma_phrase . ' <br />';
  ?>

<?php 
$chaine = 'Je suis une phrase full random';
$chaine = str_shuffle($chaine);

echo $chaine . ' <br />';
 ?>

<?php
// Calcul du volume d'un cône de rayon 5 et de hauteur 2
$volume = 5 * 5 * 3.14 * 2 * (1/3);
echo 'Le volume du cône de rayon 5 et de hauteur 2 est : ' . $volume . ' cm<sup>3</sup><br />';

// Calcul du volume d'un cône de rayon 3 et de hauteur 4
$volume = 3 * 3 * 3.14 * 4 * (1/3);
echo 'Le volume du cône de rayon 3 et de hauteur 4 est : ' . $volume . ' cm<sup>3</sup><br />';
?>