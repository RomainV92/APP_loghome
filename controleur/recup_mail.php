<?php
include('../modele/bdd_access.php');
appel_bdd();
$infos_user=Recup_user($bdd,$_POST['pseudo']);
if($_POST['mail_Ver']==$infos_user['Mail'] & $_POST['Question_Ver']==$infos_user['Question'] & $_POST['Answer_Ver']==$infos_user['Answer']){

  $Password=randompass();
  changementMDP($Password,$infos_user['ID']);
  $to = $_POST['Mail'];
  $subject = "Récupération mot de passe";
  $txt = "Bienvenue ".$info_user['Prenom'].",\r\n
  L'équipe de LogHome s'occupe de vous \n
  Vous trouverez ci-dessous votre identifiant et votre nouveau mot de passe :\n
  Votre identifiant :".$info_user['Pseudo']."\n Votre nouveau mot de passe :".$Password."\n Accéder à votre compte maintenant :https://www.loghome.fr/";
  header('location:../index.php?cible=Page_connexion');
}
else{
  header('location:../index.php?cible=Page_connexion');
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
