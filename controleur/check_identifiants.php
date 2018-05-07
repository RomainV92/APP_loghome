<?php

include 'modele/bdd_access.php';
include 'modele/identification.php';

$bdd = appel_bdd();

if(isset($_POST['nickname']) AND isset($_POST['password']))
{
  $data = validation_identifiants($bdd, $_POST['nickname'], $_POST['password']);
  if($data != '0')
  {
    session_start();
    $_SESSION['id_user'] = $data['id'];
    $_SESSION['user'] = $data['prénom'] . ' ' . $data['nom'];
    header('Location:vue/Page_compte.php');
    exit();
  }
  else
  {
    echo('Erreur d\'identifiant ou de mot de passe');
  }
}
