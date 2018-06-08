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

function bdd_capteurs($capteurs,$bdd){
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
            <td class='label3'> N° série :</td>
            <td> <?php echo htmlspecialchars($Dif_capteurs['Num_Serie']);?> </td>
          <tr>
        </table>
        <div id='switch_capteur_<?php echo $Dif_capteurs['ID']?>'>
        
          <!-- Rounded switch -->
          <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
          </label>
        </div>
        <?php 
                
               $type = $Dif_capteurs['Type'];
               $Image_url_capteur=Trouver_image_url_capteurs($bdd,$type);
               $url= $Image_url_capteur->fetch(); ?>
 
        <img class="icone_capteur" src="<?php echo $url['Image_url']?>" alt="image-capteur">


    </ul>

   </div><?php
  }
}

function Choix_senseurs($type_capteur){
  while($Dif_capteurs=$type_capteur->fetch()){
    echo '<option ="'.$Dif_capteurs['Nom'].'">'.$Dif_capteurs['Nom'].'</option>';
  }
}
