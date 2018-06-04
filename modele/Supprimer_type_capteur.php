<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');

}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}

$capteur=$_GET['cible'];
$Suppression= $bdd ->prepare('DELETE from capteur_type WHERE ID=:id');
$Suppression -> execute(array('id'=> $capteur));
header('Location:../controleur/Page_administrateur.php');
