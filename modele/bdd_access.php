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
function Recup_user($bdd,$pseudo)
{
  $utilisateurs = $bdd->prepare('SELECT * FROM login WHERE Pseudo=:pseudo');
  $utilisateurs -> execute(array('pseudo'=>$pseudo));
  return $utilisateurs;
}

function All_login($bdd)
{
  $utilisateurs = $bdd->prepare('SELECT * FROM login');
  $utilisateurs -> execute(array());
  return $utilisateurs;
}

function info_user($bdd, $id)
{
  $table = $bdd -> prepare('SELECT * FROM login WHERE ID=:id');
  $table -> execute(array('id' => $id));
  return ($table -> fetch());
}

function majInfosUser($bdd, $id, $champModif, $modif)
{
  if($champModif=="Mail")
  {
    $update = $bdd->prepare('UPDATE login SET Mail=:modif WHERE ID=:user');
  }
  else if($champModif=="Telephone")
  {
    $update = $bdd->prepare('UPDATE login SET Telephone=:modif WHERE ID=:user');
  }
  $update->execute(array(
      'modif'=>$modif,
      'user'=>$id,
  ));
}

function validation_identifiants($bdd, $login, $mdp)
{
  $table = $bdd -> prepare('SELECT ID,Password FROM login WHERE Pseudo=:nom');
  $table -> execute(array('nom' => $login));
  $data = $table -> fetch();
  if(password_verify($mdp, $data['Password']))
  {
    $_SESSION['id_user']=$data['ID'];
    $table->closeCursor();
		return $data;
  }
  $table->closeCursor();
  return '0';
}
