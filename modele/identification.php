<?php

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
