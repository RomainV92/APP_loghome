<?php
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');
    return $bdd;
  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }
}
$reponse = $bdd->prepare('SELECT * FROM login ');
$reponse -> execute();


?>
