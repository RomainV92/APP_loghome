<?php
session_start();
//include('vue/frequent/header.php');
include('../modele/bdd_access.php');
$bdd=appel_bdd();

include('../modele/bdd_access_maison.php');
include('../vue/frequent/menu.php');
include('../vue/Sign_in.php');
include('../vue/frequent/footer.php');



?>
