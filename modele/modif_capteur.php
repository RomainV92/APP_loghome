<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}
$value=$_POST['value'];
$ID=$_POST['capteur_id'];
$ajout= $bdd->prepare('UPDATE capteur SET Valeur=:value WHERE ID=:id');
$ajout -> execute(array(
  'value'=> $value,
  'id' => $ID,
));

?>
