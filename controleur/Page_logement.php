<?php
session_start();
include('../modele/Recherche_maisons.php');

include('../modele/bdd_access.php');
$bdd=appel_bdd();

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
        <li ><a href="../controleur/Page_Pieces.php?cible=<?php echo $Dif_maisons['ID']?>">Pièces</a></li>


        <div id="popup_ajout<?php echo $Dif_maisons['ID']?>" class="popup-position">
          <div id="popup-wrapper">

              <form action="../modele/Ajout_utilisateur.php" method="post">


                <div class="">
                  <div class="">
                    <label for="superficie">Rentrez l'ID de l'utilisateur a ajouter:</label>
                  </div>
                  <div class="">
                    <input type="number" name="ID_new_user" id="ID_new_user" /><br />
                  </div>
                </div>
                <input type ="number" value="<?php echo $Dif_maisons['ID'] ?>" name="ID_maison" id="ID_maison"/>

                <input type="submit" value="Ajouter utilisateur" />


              </form>
              <p><button href="javascript:void(0)"onclick="toggle_visibility('popup_ajout<?php echo $Dif_maisons['ID']?>')">close popup</button></p>

          </div>
        </div>


        <div class=ajouter_une_piece>
          <h2><a href="javascript:void(0)" onclick="toggle_visibility('popup_ajout<?php echo $Dif_maisons['ID']?>')">Ajouter un utilisateur</a></h2>
        </div>
      </ul>
    </div><?php
  }
}
?>
