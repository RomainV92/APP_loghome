<?php
session_start();
include('../../vue/frequent/entete.php');
include('../../vue/capt_admin.php');

?>
<?php
function Trouver_users($utilisateurs){
     while($user=$utilisateurs->fetch()){
       if($user['ID']!='0'){
         echo '<div class="salon"><h2> ID User :'. $user["ID"].'</h2><a href="../modele/Supprimer_utilisateur.php?cible='.$user['ID'].'" class="supprimer" id="delete-button'.$user['ID'].'" onclick="return confirm(\'are you sure you want to delete this user?\');">
         Supprimer </a>
         <a href="../controleur/Modifier_utilisateur.php?cible='.$user["ID"].' class="modifier" id="modifier">Modifer</a>';}}}


 function All_capteurs($type_capteurs){
              while($capteur=$type_capteurs->fetch()){
                  echo '<div class=encadrement_capteur><h3>Nom capteur : '.$capteur['Nom'].'</h3>
                  <p>Numero type : '.$capteur['type'].'</p>
                  <p>Unité de mesure : '.$capteur['AxeY'].'</p>
                  <a href="../modele/Supprimer_type_capteur.php?cible='.$capteur['ID'].'"> Supprimer ce type de capteur pour tous les utilisateurs</a></div></br>';
                }}
                ?>
