<?php
session_start();

include('../modele/bdd_access.php');

$bdd = appel_bdd();
$data = info_user($bdd, $_SESSION['id_user']);

if(isset($_POST['chgmt']) AND isset($_POST['secret']))
{
  if($_POST['secret']=="Mail" OR $_POST['secret']=="Telephone")
  {
    if(checkRegex($_POST['secret'], $_POST['chgmt']))
    {
      majInfosUser($bdd, $_SESSION['id_user'], $_POST['secret'], $_POST['chgmt']);
      header('Location:../index.php?cible=infosChanged');
    }
    else
      header('Location:../index.php?cible=erreur');
  }
  else
  {
    echo "Une erreur est survenue, veuillez débugger tout ça";
  }
}

function checkRegex($champ, $valeur)
{
  if($champ=="Mail")
  {
    return preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $valeur);
  }
  else if($champ=="Telephone")
  {
    return preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $valeur);
  }
}
