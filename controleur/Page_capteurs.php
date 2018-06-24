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
             <td id='<?php echo $Dif_capteurs['ID'] ?>' class='show'  ></td>
          </tr>
          <tr>

            <td class='label4'> Valeur voulue :</td>


            <td>
              <input type="number" id="value<?php echo $Dif_capteurs['ID']; ?>" size="5" >
              <input type="text" class="id_post" id="capteur_id<?php echo $Dif_capteurs['ID'];?>" value="<?php echo $Dif_capteurs['ID']; ?>">
              <button type="submit" id="button<?php echo $Dif_capteurs['ID']; ?>">Changer valeur</button>
            </td>
          </tr>
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
                               alert("Changement de la valeur voulue avec succès");
                           }
                        });
                    });
                });

            </script>


        </table>
      </div>

      <div class="grille">
      <?php

      $maison= $bdd ->query('SELECT * FROM maison INNER JOIN pieces ON maison.ID = pieces.ID_maison WHERE pieces.ID =\''.$_GET['cible'].'\'');
      $id_user_principal= $maison ->fetch();

      if($_SESSION['id_user']==$id_user_principal['ID_user']){?>
         <div>

          <a class="ajouter_un_utilisateur" href="javascript:void(0)" onclick="valiDelete(<?php echo $Dif_capteurs['ID'] ?>,<?php echo $_GET['cible']?>)">Supprimer</a>
         </div>
         <?php }?>
        <?php

        $type = $Dif_capteurs['Type'];
        $Image_url_capteur=Trouver_image_url_capteurs($bdd,$type);
        $url= $Image_url_capteur->fetch(); ?>
        <table>
          <tr>
            <td>    <img class="icone_capteur" src="../images/<?php echo $url['Image_url']?>" alt="image-capteur"> </td>

            <td>

              <div id="switch_capteur_<?php echo $Dif_capteurs['ID'];?>">


                    <!-- Rounded switch -->
                        <label class="switch">
                        <?php if($Dif_capteurs['Status']==="1"){
                          echo '<input id="switch'.$Dif_capteurs['ID'].'" type="checkbox"  checked>';
                        }else{
                          echo '<input id="switch'.$Dif_capteurs['ID'].'" type="checkbox" >';
                        }?>
                        <!--<input type="checkbox" >!-->
                       <span class="slider round"></span>
                        </label>
                        <script>
                            $(document).ready(function(){
                                $("#switch<?php echo $Dif_capteurs['ID']; ?>").click(function(){
                                  var switch_capteur=null;
                                  if ($("#switch<?php echo $Dif_capteurs['ID'] ?>").is(":checked")) {
                                        var switch_capteur="1";
                                  } else {
                                        var switch_capteur="0";
                                  }

                                    var capteur_id2=$("#capteur_id<?php echo $Dif_capteurs['ID']; ?>").val();
                                    $.ajax({
                                        url:'../modele/etat_capteur.php',
                                        method:'POST',
                                        data:{
                                            switch_capteur:switch_capteur,
                                            capteur_id2:capteur_id2,
                                        },
                                       success:function(data){
                                           alert("changement d'état du capteur efféctuer avec succés"+switch_capteur+capteur_id2);
                                       }
                                    });
                                });
                            });

                        </script>

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
