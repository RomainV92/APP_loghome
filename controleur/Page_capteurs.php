<?php
session_start();
include('../modele/Recherche_capteurs.php');

include('../modele/bdd_access.php');
$bdd=appel_bdd();
$type_capteur=Trouver_types_capteurs($bdd);

include('../modele/bdd_access_maison.php');
include('../modele/redirection_si_deco.php');

include('../vue/frequent/menu.php');
include('../vue/Capteurs.php');
include('../vue/frequent/footer.php');

function bdd_capteurs($capteurs){
  while($Dif_capteurs=$capteurs->fetch()){?>
    <div class="salon">
      <h2>Maison : <?php echo htmlspecialchars($Dif_capteurs['Nom']);?></h2>
       <ul>
           <?php echo htmlspecialchars($Dif_capteurs['Type'].': '.$Dif_capteurs['Valeur'])?>
       </ul>

       <a href="../modele/Suppression_capteurs.php?<?php echo $Dif_capteurs['ID']?>" class="Sup_capteurs"> Supprimer ce capteur</a>
   </div><?php
  }
}

function Choix_senseurs($type_capteur){
  while($Dif_capteurs=$type_capteur->fetch()){
    echo '<option ="'.$Dif_capteurs['Nom'].'">'.$Dif_capteurs['Nom'].'</option>';
  }
}
