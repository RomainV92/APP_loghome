<?php
include('../modele/bdd_access.php');
$bdd=appel_bdd();
$ver=Verif_type_capteurs($bdd,$_POST['type_capteur']);
if($ver===0){
  Ajout_Type_capteurs_bdd($bdd,$_POST['type_capteur'],$_POST['Nom_capteur'],$_POST['AxeX'],$_POST['AxeY']);
  header('location:../controleur/Page_administrateur.php');}
  else{
    echo "Ce type de capteur est deja pris veuillez rentrer un nouveau type de capteur";
    echo "<a href='../controleur/Page_administrateur.php'>retour vers la page administrateur</a>";
  }
