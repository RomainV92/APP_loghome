<?php
session_start();
$Error_message= "";

include('../modele/Recherche_maisons.php');
include('../modele/Recherche_maisons_secondaires.php');

include('../modele/bdd_access.php');
$bdd=appel_bdd();

include('../modele/bdd_access_maison.php');
include('../modele/redirection_si_deco.php');
include('../vue/frequent/menu.php');
include('../vue/house.php');
include('../vue/frequent/footer.php');


function bdd_maisons($Infos_maisons){
  while($Dif_maisons=$Infos_maisons->fetch()){?>
    <div class="salon">

      <ul>
        <table class='informations'>
          <tr>
            <td class='label0'> Type :</td>
            <td> <?php 
                if($Dif_maisons['type_maison']== 'maison'){
                    echo "<img class='type_maison' src='../images/icone_maison.jpg' alt='icone_maison' height='32' width='32' >";
                }
                elseif($Dif_maisons['type_maison']== 'appartement'){
                    echo "<img class='type_maison' src='../images/icone_immeuble.jpg' alt='icone_maison' height='32' width='32' >";
                }
                echo htmlspecialchars($Dif_maisons['type_maison']); 
              
                ?></td>
          <tr>
          <tr>
            <td class='label1'> Nom : </td>
            <td> <?php echo htmlspecialchars($Dif_maisons['nom']);?> </td>
          </tr>
          <tr>
            <td class='label2'> Adresse :</td>
            <td> <?php echo htmlspecialchars($Dif_maisons['adresse']).' '.htmlspecialchars($Dif_maisons['Street']).'</br></br>'.htmlspecialchars($Dif_maisons['Postal']).' '.htmlspecialchars($Dif_maisons['City']);?> </td>
          <tr>
       </table>

         <a class="piece" href="../controleur/Page_Pieces.php?cible=<?php echo $Dif_maisons['ID']?>">Pièces</a></li>
         
         
           
         <a class="ajouter_un_utilisateur" href="javascript:void(0)" onclick="ajouter_utilisateur(<?php echo $Dif_maisons['ID'] ?>)">Ajouter un utilisateur</a>
         

          
           
        <a class="ajouter_un_utilisateur" href="javascript:void(0)" onclick="valiDelete(<?php echo $Dif_maisons['ID'] ?>)">Supprimer</a>
           
          </ul>
        </div><?php
      }
    }

    ?>

<?php
function bdd_maisons_secondaires($Infos_maisons_secondaires){
  while($Dif_maisons_secondaires=$Infos_maisons_secondaires->fetch()){?>
    <div class="salon">

      <ul>
        <table class='informations'>
          <tr>
            <td class='label0'> Type :</td>
            <td> <?php 
                if($Dif_maisons_secondaires['type_maison']== 'maison'){
                    echo "<img class='type_maison' src='../images/icone_maison.jpg' alt='icone_maison' height='32' width='32' >";
                }
                elseif($Dif_maisons_secondaires['type_maison']== 'appartement'){
                    echo "<img class='type_maison' src='../images/icone_immeuble.jpg' alt='icone_maison' height='32' width='32' >";
                }
                echo htmlspecialchars($Dif_maisons_secondaires['type_maison']); 
              
                ?>
            </td>
          <tr>
          <tr>
            <td class='label1'> Nom : </td>
            <td> <?php echo htmlspecialchars($Dif_maisons_secondaires['nom']);?> </td>
          </tr>
          <tr>
            <td class='label2'> Adresse :</td>
            <td> <?php echo htmlspecialchars($Dif_maisons_secondaires['adresse']).' '.htmlspecialchars($Dif_maisons_secondaires['Street']).'</br></br>'.htmlspecialchars($Dif_maisons_secondaires['Postal']).' '.htmlspecialchars($Dif_maisons_secondaires['City']);?> </td>
          <tr>
       </table>

         <a class="piece" href="../controleur/Page_Pieces.php?cible=<?php echo $Dif_maisons_secondaires['ID_maison']?>">Pièces</a></li>
      </ul>
    </div><?php
  }
}

?>