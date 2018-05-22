<?php
include('../modele/Recherche_user.php');
include('../vue/Page_admin.php');





 function utilisateurs($bdd){
     while($user=$reponse->fetch()){
      echo '<div class="salon">'.'<h2> ID User :'. $user['ID'].'<a href= class="supprimer" id="supprimer">Supprimer </a>'.'<a href= class="modifier" id="modifier">Modifer</a>';
 }
  ?>
