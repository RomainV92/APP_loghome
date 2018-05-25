<?php

function appel_bdd()
{
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

function All_login($bdd){
$utilisateurs = $bdd->prepare('SELECT * FROM login');
$utilisateurs -> execute(array());
return $utilisateurs;
}
