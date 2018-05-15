<?php
session_start();
include('../modele/AjoutBDD.php');
$direction=Ajout($bdd);
$Direction='"CreerCompte_Erreur.php"';
if ($direction==1){
  $to = $_POST['mail'];
  $subject = "Confirmation Compte LOG.HOME";
  $txt = "Votre compte a bien été creé ".$_POST['Pseudo'];
  $headers = "From: tissotm@hotmail.com" . "\r\n" ;
  mail($to,$subject,$txt,$headers);

  header('Location:../index.php?cible=Page_Confirmed');
}
else{
  header('Location:../index.php?cible=CreerCompte_Erreur');
}
include('../vue/frequent/footer.php');
?>
