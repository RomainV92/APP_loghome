<?php
session_start();
include 'modele/bdd_access.php';
include 'modele/identification.php';

$bdd = appel_bdd();


if(isset($_POST['Pseudo']) AND isset($_POST['Password']))
{
  $data = validation_identifiants($bdd, $_POST['Pseudo'], $_POST['Password']);
  if($data != '0')
  {


    header('Location:vue/Page_compte.php');
    exit();
  }
  else
  {
    echo('Erreur d\'identifiant ou de mot de passe');
  }
}
