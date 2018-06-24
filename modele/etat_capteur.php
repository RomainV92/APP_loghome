<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}
$ID=$_POST['capteur_id2'];
$switch=$_POST['switch_capteur'];
$ajout= $bdd->prepare('UPDATE capteur SET Status=:status WHERE ID=:id');
$ajout -> execute(array(
  'id' => $ID,
  'status'=> $switch,
));

?>
