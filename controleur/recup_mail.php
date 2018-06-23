<?php
include('../modele/bdd_access.php');
$bdd=appel_bdd();

$infos_user=Recup_user($bdd,$_POST['pseudo_Ver'])->fetch();
if($_POST['pseudo_Ver']==$infos_user['Pseudo'] && $_POST['Question_Ver']==$infos_user['Question'] && $_POST['Answer_Ver']==$infos_user['Answer']){

  $Password=randompass();
  changement_mot_de_passe($Password,$infos_user['ID'],$bdd);
  $to = $infos_user['Mail'];
  $subject = "Récupération de mot de passe";
  $txt = "Bienvenue ".$infos_user['Prenom'].",\r\nL'équipe de LogHome s'occupe de vous \nVous trouverez ci-dessous votre identifiant et votre nouveau mot de passe :\n
  Votre identifiant :".$infos_user['Pseudo']."\n Votre nouveau mot de passe :".$Password."\n Accéder à votre compte maintenant :https://www.loghome.fr/.\nPour le modifier connectez vous et accédez à la page Mes informations.";
  
  if (mail($to, $subject, $txt)) // Envoi du message
  {
    header('location:../index.php?cible=Page_connexion');
  }
  else // Non envoyé
  {
    header('location:../index.php?cible=erreur');
  }  




}

else{
  
 header('location:../index.php?cible=RecupMDP_Erreur');
}



function randompass(){
  $characters='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $characterslen=strlen($characters);
  $Password='';
  for($i=0;$i<10;$i++){
    $Password .= $characters[rand(0,$characterslen-1)];
  }
  return $Password;
}
