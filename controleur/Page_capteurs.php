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
      <div class='grille'>
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
  </div>
  <div class="grille">
        <div>

          <a class="ajouter_un_utilisateur" href="javascript:void(0)" onclick="valiDelete(<?php echo $Dif_capteurs['ID'] ?>,<?php echo $_GET['cible']?>)">Supprimer</a>
        </div>

        <img class="icone_capteur" src="../images/<?php echo $url['Image_url']?>" alt="image-capteur">
        <label class="label_capteur_post">Valeur voulu du capteur</label>
        <input type="text" id="value<?php echo $Dif_capteurs['ID']; ?>">
        <input type="text" class="id_post" id="capteur_id<?php echo $Dif_capteurs['ID'];?>" value="<?php echo $Dif_capteurs['ID']; ?>">
        <button type="submit" id="button<?php echo $Dif_capteurs['ID']; ?>">Changer valeur</button>
        <p><label class="valeur_capteur">La valeur actuelle du capteur est : <?php echo $Dif_capteurs['Valeur'] ?></label>
        <script>
            $(document).ready(function(){
                $("#button<?php echo $Dif_capteurs['ID']; ?>").click(function(){
                    var value=$("#value<?php echo $Dif_capteurs['ID']; ?>").val();
                    var capteur_id=$("#capteur_id<?php echo $Dif_capteurs['ID']; ?>").val();
                    $.ajax({
                        url:'../modele/modif_capteur.php',
                        method:'POST',
                        data:{
                            value:value,
                            capteur_id:capteur_id,
                        },
                       success:function(data){
                           alert("Changement de la valeur voulue avec succés");
                       }
                    });
                });
            });
        </script>

            <td>
                    <div id='switch_capteur_<?php echo $Dif_capteurs['ID']?>'>
                    <!-- Rounded switch -->
                        <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                        </label>
            </td>
                    </div>
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
