<?php
session_start();
include('../modele/AjoutBDD.php');
$direction=Ajout($bdd);

if ($direction == 1){


  $to = $_POST['Mail'];
  $subject = "Confirmation Compte LOG.HOME";
  $txt = "Bienvenue ".$_POST['Prenom'].",\r\n
  Merci d'avoir créé un compte chez Loghome! \r\n
  Vous trouverez ci-dessous votre identifiant et un lien pour vous connecter :\r\n
  Votre identifiant :".$_POST['Pseudo']."\r\n Accéder à votre compte maintenant :https://www.loghome.fr/";
  
  
  if (mail($to,$subject,$txt))  //(if mail()  )  envoie le mail de comfirmation d'inscription
    {
      header('Location:../index.php?cible=Page_Confirmed');
    }
  header('Location:../index.php?cible=Page_Confirmed');
  
}

else {
  header('Location:../index.php?cible=CreerCompte_Erreur');
}



