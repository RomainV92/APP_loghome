<?php
session_start();
include '../modele/bdd_access.php';

$bdd = appel_bdd();

if(isset($_POST['Pseudo']) AND isset($_POST['Password']))
{
  $data = validation_identifiants($bdd, $_POST['Pseudo'], $_POST['Password']);
  if($data != '0')
  {
    if($data['ID']==='0'){
      header('location:../controleur/Page_administrateur.php');
      exit();
    }
    else {

    
    header('Location:../controleur/Page_logement.php');
    exit();
    }
  }
  else
  {
    header('Location:../controleur/Connexion_erreur.php');
  }
}
