<?php
session_start();
include('../modele/AjoutBDD.php');
$direction=Ajout($bdd);
$Direction='"CreerCompte_Erreur.php"';
if ($direction==1){
  $to = $_POST['Mail'];
  $subject = "Confirmation Compte LOG.HOME";
  $txt = "Bienvenue ".$_POST[Prenom].",\r\n
  Merci d'avoir créé un compte chez Loghome! \n
  Vous trouverez ci-dessous votre identifiant et un lien pour vous connecter :\n
  Votre identifiant :".$_POST[Pseudo]."\n Accéder à votre compte maintenant :https://www.loghome.fr/";
  
  
  if (mail($to,$subject,$txt)){
    header('Location:../index.php?cible=Page_Confirmed');
  }
}

else{
  header('Location:../index.php?cible=CreerCompte_Erreur');
}
include('../vue/frequent/footer.php');
?>
