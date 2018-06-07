<?php
session_start();
include('../modele/Recherche_capteurs.php');

include('../modele/bdd_access.php');
$bdd=appel_bdd();
$type_capteur=Trouver_types_capteurs($bdd);
include('../controleur/graphes_capteurs.php');
include('../modele/bdd_access_maison.php');
include('../modele/redirection_si_deco.php');

include('../vue/frequent/menu.php');
include('../vue/Capteurs.php');
include('../vue/frequent/footer.php');

function bdd_capteurs($capteurs){
  while($Dif_capteurs=$capteurs->fetch()){?>
    <div class="salon">
    <ul>
        <table class='informations'>
          <tr>
            <td class='label1'> Nom : </td>
            <td> <?php echo htmlspecialchars($Dif_capteurs['Nom']);?> </td>
          </tr>
          <tr>
            <td class='label2'> Type :</td>
            <td> <?php echo htmlspecialchars($Dif_capteurs['Type']);?> </td>
          <tr>
          <tr>
            <td class='label3'> Référence :</td>
            <td> <?php echo htmlspecialchars($Dif_capteurs['Num_Serie']);?> </td>
          <tr>
        </table>
        <p class="text_cocher">activer capteur</p>
  <label class="switch">
    <input type="checkbox">
  <span class="slider round"></span>
</label>
    </ul>
   </div><?php
  }
}

function Choix_senseurs($type_capteur){
  while($Dif_capteurs=$type_capteur->fetch()){
    echo '<option ="'.$Dif_capteurs['Nom'].'">'.$Dif_capteurs['Nom'].'</option>';
  }
}
