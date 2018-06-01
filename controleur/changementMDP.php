<?php
session_start();

<<<<<<< HEAD
include('../modele/bdd_access.php');
$bdd = appel_bdd();

include('../modele/bdd_access_maison.php');

include('../modele/changementMDP.php');
$mdp = getPass($_SESSION['id_user']);

include('../vue/frequent/menu.php');
include('../vue/pageChangementMDP/changement_mdp.php');
include('../vue/frequent/footer.php');

if (isset($_POST["nouveauPass"]) && isset($_POST["nouveauPass2"]) && isset($_POST["ancienPass"])){
    if ($_POST["nouveauPass"] == $_POST["nouveauPass2"]) {
        $data = $mdp->fetch();
        //echo $data['Password'];
        if($data['Password'] == password_hash($_POST['ancienPass'],PASSWORD_DEFAULT)) {
            //echo '<alert>ok</alert>';
            changementMDP($_POST['nouveauPass'],$_SESSION['id_user']);
        }
    }
    header('Location:../index.php?cible=infosChanged');
}
=======
// Importation de l'acces a la bdd;
include('../modele/bdd_access.php');
$bdd = appel_bdd();

// Importation du modele
include('../modele/changementMDP.php');
$mdp = getPass($_SESSION['ID ']);

// On importe la vue
require('../vue/pageChangementMDP/changement_mdp.php');

// On regarde si les champs sont remplis
if (isset($_POST["nouveauPass"]) && isset($_POST["nouveauPass2"]) && isset($_POST["ancienPass"])){
    // On regarde si les mdp correspondent
    if ($_POST["nouveauPass"] == $_POST["nouveauPass2"]) {
        // On regarde si le mdp entré est le même que ds la bdd
        $data = $mdp->fetch();
            echo $data['Password'];
        if($data['Password'] == password_hash($_POST['ancienPass'],PASSWORD_DEFAULT)) {
            echo '<alert>ok</alert>';
            changementMDP($_POST['nouveauPass'],$_SESSION['ID']);
        }
    }
}


?>
>>>>>>> e1458851923883d026db90770fcf2536dccd52cd
