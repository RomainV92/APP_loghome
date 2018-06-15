<?php
session_start();
include('../modele/Recherche_capteurs.php');

include('../modele/bdd_access.php');
$bdd=appel_bdd();
$type_capteur=Trouver_types_capteurs($bdd);
include('../controleur/graphes_capteurs.php');
include('../modele/bdd_access_maison.php');
include('../modele/redirection_si_deco.php');
include('../modele/redirection_si_mauvais_utilisateur_piece.php');



include('../vue/frequent/menu.php');
include('../vue/Capteurs.php');
include('../vue/frequent/footer.php');

function bdd_capteurs($capteurs,$bdd){
  while($Dif_capteurs=$capteurs->fetch()){?>
    <div class="salon">
  
      <div class='grille'>
        <table class='informations'>
          <tr>
            <td class='label1'> Nom : </td>
            <td> <?php echo htmlspecialchars($Dif_capteurs['Nom']);?> </td>
          </tr>
           <tr>
             <td class='label2'> Type :</td>
             <td> <?php echo htmlspecialchars($Dif_capteurs['Type']);?> </td>
         </tr>
           <tr>
             <td class='label3'> N° série :</td>
             <td> <?php echo htmlspecialchars($Dif_capteurs['Num_Serie']);?> </td>
          </tr>
          <tr>
             <td class='label3'> Valeur :</td>
             <td id='<?php echo $Dif_capteurs['ID'] ?>' class='show'  ><?php echo $Dif_capteurs['ID'] ?></td>
          </tr>
        </table>
      </div>

      <div class="grille">
        
         <div>
      
          <a class="ajouter_un_utilisateur" href="javascript:void(0)" onclick="valiDelete(<?php echo $Dif_capteurs['ID'] ?>,<?php echo $_GET['cible']?>)">Supprimer</a>
         </div>
        
        <?php
 
        $type = $Dif_capteurs['Type'];
        $Image_url_capteur=Trouver_image_url_capteurs($bdd,$type);
        $url= $Image_url_capteur->fetch(); ?>
        <table>
          <tr>
            <td>    <img class="icone_capteur" src="../images/<?php echo $url['Image_url']?>" alt="image-capteur"> </td> 
            <td>
                    <div id='switch_capteur_<?php echo $Dif_capteurs['ID']?>'>
                    <!-- Rounded switch -->
                        <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                        </label>
            
                    </div></td>
          </tr>
        </table>
  </div>

</div><?php
  }
}

function Choix_senseurs($type_capteur){
  while($Dif_capteurs=$type_capteur->fetch()){
    echo '<option ="'.$Dif_capteurs['Nom'].'">'.$Dif_capteurs['Nom'].'</option>';
  }
}
