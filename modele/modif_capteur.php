<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}
$conn = new mysqli('localhost', 'root', '', 'insert');
$value=$_POST['value'];

$ajout= $bdd->prepare('UPDATE capteur SET Valeur=:value');
$ajout -> execute(array('value'=> $value))

?>
