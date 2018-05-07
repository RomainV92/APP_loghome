<?php

function validation_identifiants($bdd, $login, $mdp)
{
  $table = $bdd -> prepare('SELECT * FROM users WHERE login=:nom');
  $table -> execute(array('nom' => $login));
  $data = $table -> fetch();
  if($data['mot de passe'] == $mdp)
  {
		return $data;
  }
  return '0';
}
