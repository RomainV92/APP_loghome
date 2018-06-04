<?php
session_start();

include('../modele/bdd_access.php');
$bdd = appel_bdd();

include('../modele/bdd_access_maison.php');

include('../modele/changementMDP.php');
$mdp = getPass($_SESSION['id_user']);
include('../modele/redirection_si_deco.php');
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
