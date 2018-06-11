<?php
session_start();
include('../vue/frequent/entete.php');
include('../modele/bdd_access.php');
$bdd= appel_bdd();
$utilisateurs = All_login($bdd);
$type_capteurs= Trouver_types_capteurs($bdd);
include('../modele/redirection_si_deco.php');

include('../vue/Page_admin.php');?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 10%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>
<body>


<!--position du code pour modal s'il faut le remettre-->

</body>
</html>

<?php
function Trouver_users($utilisateurs){
     while($user=$utilisateurs->fetch()){
       if($user['ID']!='0'){
         echo '<div class="salon"><h2> ID User :'. $user["ID"].'</h2><a href="../modele/Supprimer_utilisateur.php?cible='.$user['ID'].'" class="supprimer" id="delete-button'.$user['ID'].'" onclick="return confirm(\'are you sure you want to delete this user?\');">
         Supprimer </a>
         <a href="../controleur/Modifier_utilisateur.php?cible='.$user["ID"].' class="modifier" id="modifier">Modifer</a>';}}}


 function All_capteurs($type_capteurs){
              while($capteur=$type_capteurs->fetch()){
                  echo '<div class=encadrement_capteur><h3>Nom capteur : '.$capteur['Nom'].'</h3>
                  <p>Numero type : '.$capteur['type'].'</p>
                  <p>Unité de mesure : '.$capteur['AxeY'].'</p>
                  <a href="../modele/Supprimer_type_capteur.php?cible='.$capteur['ID'].'"> Supprimer ce type de capteur pour tous les utilisateurs</a></div></br>';
                }}
                ?>
