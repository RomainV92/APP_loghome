<?php
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');
  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }
$utilisateurs = $bdd->prepare('SELECT * FROM login');
$utilisateurs -> execute(array());
