<?php

  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');

  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }

$compte=$_GET['cible'];
$Suppression= $bdd ->prepare('DELETE from Login WHERE ID=:id');
$Suppression -> execute(array('id'=> $compte));
header('Location:../controleur/Page_administrateur.php');
