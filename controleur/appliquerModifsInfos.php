<?php
session_start();

include('../modele/bdd_access.php');

$bdd = appel_bdd();
$data = info_user($bdd, $_SESSION['id_user']);

if(isset($_POST['chgmt']) AND isset($_POST['secret']))
{
  if($_POST['secret']=="Mail" OR $_POST['secret']=="Telephone")
  {
    majInfosUser($bdd, $_SESSION['id_user'], $_POST['secret'], $_POST['chgmt']);
    header('Location:../index.php?cible=infosCompte'); //Ne fonctionne pas adans l'état actuel
  }
  else
  {
    echo "Une erreur est survenue, veuillez débugger tout ça";
  }
}
