<?php 
$AI = 'Bobby';
echo 'Bonjour ' . $AI . '<br />';
 ?>



<?php
$info['prenom'] = 'François';
$info['nom'] = 'Dupont';
$info['adresse'] = '3 Rue du Paradis';
$info['ville'] = 'Marseille';

echo $info['prenom'] . '<br />';
?>



<?php 
$liste = array ('Jim','Bill','Catherine');
for ($NM =0; $NM < 3; $NM++)
{
	echo $liste[$NM] . '<br />';
}
 ?>



<?php 
$tableau = array ('José','Josette','Jason');

if(in_array('José', $tableau))
{
	echo 'La personne répondant au nom de "José" se trouve dans la base de donnée';
}

if(in_array('Bernadette', $tableau))
{
	echo 'La personne répondant au nom de "Bernadette" se trouve dans la base de donnée';
}

foreach($tableau as $number)
{
	echo $number . '<br />';
}
?>



<?php 
$infa = array (
'prenom' => 'Jeremy',
'nom' => 'Boulet',
'adresse' => '25 Avenue des Etiquettes',
'ville' => 'Moule-ville sur mer');

if (array_key_exists('adresse', $infa))
{
	echo 'la clé "adresse" est dans tonc cul !'. '<br />';
}

if (array_key_exists('région', $infa))
{
	echo 'la clé "région" est dans tonc cul !'. '<br />';
}

foreach ($infa as $cle => $coord) 
{
	echo '[' . $cle . '] est ' . $coord . '<br />';
}

echo '<pre>';
print_r($infa);
echo'</pre>';
 ?>



 <?php 
$lanceur = array ('x7','phenom','tipx','crossover','98 custom');

$poste = array_search('phenom', $lanceur);
echo '"phenom" occupe le poste numéro ' . $poste . '<br />';

$poste = array_search('crossover', $lanceur);
echo '"ego lv1" occupe le poste numéro ' . $poste;
  ?>