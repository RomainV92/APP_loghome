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
    echo "Les modifications ont bien été faites (ou pas)";
  }
  else
  {
    echo "Une erreur est survenue, veuillez débugger tout ça";
  }
}


//header('../index.php?cible=infosCompte.php'); Ne fonctionne pas adans l'état actuel
