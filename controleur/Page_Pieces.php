<?php
session_start();
include('../modele/Recherches_pieces.php');

include('../modele/bdd_access.php');
$bdd=appel_bdd();

include('../modele/bdd_access_maison.php');
include('../modele/redirection_si_deco.php');

include('../vue/frequent/menu.php');
include('../vue/Pieces.php');
include('../vue/frequent/footer.php');


function bdd_maisons($pieces){
  while($Dif_pieces=$pieces->fetch()){?>
    <div class="salon">
      <ul>
        <table class='informations'>
          <tr>
            <td class='label1'> Nom : </td>
            <td> <?php echo htmlspecialchars($Dif_pieces['Nom']);?> </td>
          </tr>
          <tr>
            <td class='label2'> Superficie :</td>
            <td> <?php echo htmlspecialchars($Dif_pieces['Superficie']).' m²';?> </td>
          <tr>
       </table>

        <a class="voir_capteurs" href="../controleur/Page_capteurs.php?cible=<?php echo $Dif_pieces['ID']?>">Capteurs</a></li>
        <<a class="supprimer_capteur" href="../controleur/Page_capteurs.php?cible=<?php echo $Dif_pieces['ID']?>">Supprimer</a></li>
  </ul>
   </div><?php
  }
}
?>
