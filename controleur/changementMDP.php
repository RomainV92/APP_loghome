<?php
session_start();

include('../modele/bdd_access.php');
$bdd = appel_bdd();

include('../modele/bdd_access_maison.php');

include('../modele/changementMDP.php');
$mdp = getPass($_SESSION['id_user']);

include('../modele/redirection_si_deco.php');



$message = "";

if (isset($_POST["nouveauPass"]) && isset($_POST["nouveauPass2"]) && isset($_POST["ancienPass"])){
    if ($_POST["nouveauPass"] == $_POST["nouveauPass2"]) {
        $data = getPass($_SESSION['id_user'])->fetch();
        if(password_verify($_POST['ancienPass'],$data['Password'])) {
            changementMDP($_POST['nouveauPass'],$_SESSION['id_user']);
            header('Location:../index.php?cible=infosChanged');
        } else {
            $message = "<p style='color:red'>L'ancien mot de passe n'est pas correct.</p>";
        }
    } else {
        $message =  '<p style="color:red">Les mots de passe ne correspondent pas</p> ';
    }
        

} else {
}


include('../vue/frequent/menu.php');
include('../vue/changement_mdp.php');
include('../vue/frequent/footer.php');