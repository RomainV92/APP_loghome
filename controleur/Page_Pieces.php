<?php
session_start();
include('../modele/Recherches_pieces.php');

include('../modele/bdd_access.php');
$bdd=appel_bdd();

include('../modele/bdd_access_maison.php');
include('../vue/frequent/menu.php');
include('../vue/Pieces.php');
include('../vue/frequent/footer.php');


function bdd_maisons($pieces){
  while($Dif_pieces=$pieces->fetch()){?>
    <div class="salon">
      <h2>Maison : <?php echo $Dif_pieces['ID'];?></h2>
       <ul>
           <?php echo $Dif_pieces['Nom'].', '.$Dif_pieces['Superficie']?>
       </ul>
       <li ><a href="../controleur/Page_capteurs.php?cible=<?php echo $Dif_pieces['ID']?>">Capteurs</a></li>
   </div><?php
  }
}
?>
