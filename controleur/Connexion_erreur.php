<?php
session_start();
//include('vue/frequent/header.php');
$Error_message= "Erreur d'identifiant ou de mot de passe.";

include('../modele/bdd_access.php');
$bdd=appel_bdd();

include('../modele/bdd_access_maison.php');

if($_SESSION != array())  //met une erreur si une personne connectée accède à la page
{

  header('location:../index.php?cible=erreur');

}

include('../vue/frequent/menu.php');
include('../vue/Sign_in.php');
include('../vue/frequent/footer.php');
