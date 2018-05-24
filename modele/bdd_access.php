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

function info_user($bdd, $id)
{
  $table = $bdd -> prepare('SELECT * FROM login WHERE ID=:id');
  $table -> execute(array('id' => $id));
  return ($table -> fetch());
}

function validation_identifiants($bdd, $login, $mdp)
{
  $table = $bdd -> prepare('SELECT ID,Password FROM login WHERE Pseudo=:nom');
  $table -> execute(array('nom' => $login));
  $data = $table -> fetch();
  if($data['Password'] == $mdp)
  {
    $_SESSION['id_user']=$data['ID'];
		return $data;
  }
  return '0';
}
