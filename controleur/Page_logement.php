<?php
session_start();
include('../modele/Recherche_maisons.php');

include('../modele/bdd_access_maison.php');
include('../vue/frequent/menu.php');
include('../vue/house.php');
include('../vue/frequent/footer.php');


function bdd_maisons($Infos_maisons){
  while($Dif_maisons=$Infos_maisons->fetch()){?>
    <div class="salon">
      <h2>Maison : <?php echo $Dif_maisons['nom'];?></h2>
       <ul>
           <?php echo $Dif_maisons['adresse'].', '.$Dif_maisons['Street'].$Dif_maisons['ID'];?>
           <p><?php echo $Dif_maisons['Postal']?></p>
           <li ><a href="../controleur/Page_Pieces.php?cible=<?php echo $Dif_maisons['ID']?>">Pieces</a></li>
       </ul>
   </div><?php
  }
}
?>
