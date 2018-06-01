<?php
session_start();
include('../modele/AjoutBDD.php');
$direction=Ajout($bdd);
$Direction='"CreerCompte_Erreur.php"';

if ($direction==1)
{
  $to = $_POST['Mail'];
  $subject = "Confirmation Compte LOG.HOME";
  $txt = "Bienvenue ".$_POST['Prenom'].",\r\n
  Merci d'avoir créé un compte chez Loghome! \n
  Vous trouverez ci-dessous votre identifiant et un lien pour vous connecter :\n
  Votre identifiant :".$_POST['Pseudo']."\n Accéder à votre compte maintenant :https://www.loghome.fr/";
<<<<<<< HEAD

  header('Location:../index.php?cible=Page_Confirmed');
  /*
  if (mail($to,$subject,$txt))
  {
=======


  if (mail($to,$subject,$txt)){
>>>>>>> e1458851923883d026db90770fcf2536dccd52cd
    header('Location:../index.php?cible=Page_Confirmed');
  }
  */
}

else
{
  header('Location:../index.php?cible=CreerCompte_Erreur');
}

<<<<<<< HEAD
include('../vue/frequent/footer.php');
=======
?>
>>>>>>> e1458851923883d026db90770fcf2536dccd52cd
