<?php
session_start();
include('../modele/Recherches_pieces.php');
$Error_message= "La pièce n'as pas pu être ajoutée. La pièce ajoutée prend trop de place.";


include('../modele/bdd_access.php');
$bdd=appel_bdd();

include('../modele/bdd_access_maison.php');
include('../modele/redirection_si_deco.php');
include('../modele/redirection_si_mauvais_utilisateur_maison.php');


include('../vue/frequent/menu.php');
include('../vue/Pieces.php');
include('../vue/frequent/footer.php');


function bdd_maisons($pieces,$bdd){
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

        <a class="ajouter_un_utilisateur" href="../controleur/Page_capteurs.php?cible=<?php echo $Dif_pieces['ID']?>">Capteurs</a></li>
      <?php 
      
      $maison= $bdd ->query('SELECT ID_user FROM maison WHERE ID =\''.$_GET['cible'].'\'');
      $id_user_principal= $maison ->fetch();
      
      if($_SESSION['id_user']==$id_user_principal['ID_user']){?>
        <div>

          <a class="ajouter_un_utilisateur" href="javascript:void(0)" onclick="valiDelete(<?php echo $Dif_pieces['ID'] ?>,<?php echo $_GET['cible']?>)">Supprimer</a>
        </div>
        <?php }?>
  </ul>
   </div><?php
  }
}
?>
