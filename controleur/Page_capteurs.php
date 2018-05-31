<?php
session_start();
include('../modele/Recherche_capteurs.php');

include('../modele/bdd_access.php');
$bdd=appel_bdd();

include('../modele/bdd_access_maison.php');
//include('../vue/frequent/menu.php');
include('../vue/Capteurs.php');
include('../vue/frequent/footer.php');

function bdd_maisons($capteurs){
  while($Dif_capteurs=$capteurs->fetch()){?>
    <div class="salon">
      <h2>Maison : <?php echo $Dif_capteurs['Nom'];?></h2>
       <ul>
           <?php echo $Dif_capteurs['Type'].': '.$Dif_capteurs['Valeur']?>
       </ul>
   </div><?php
  }
}
 ?>
