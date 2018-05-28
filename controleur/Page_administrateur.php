<?php
session_start();
include('../modele/bdd_access.php');
$bdd= appel_bdd();
$utilisateurs = All_login($bdd);
include('../vue/Page_admin.php');




function Trouver_users($utilisateurs){
     while($user=$utilisateurs->fetch()){
       if($user['ID']!='0'){
         echo '<div class="salon"><h2> ID User :'. $user["ID"].'</h2><a href="../modele/Supprimer_utilisateur.php?cible='.$user['ID'].'" class="supprimer" id="delete-button'.$user['ID'].'" onclick="return confirm(\'are you sure you want to delete this user?\');">
         Supprimer </a>
         <a href="../controleur/Modifier_utilisateur.php?cible="'.$user["ID"].'" class="modifier" id="modifier">Modifer</a>';}}}


?>
