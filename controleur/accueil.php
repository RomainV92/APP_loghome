<?php
session_start();

include('../modele/bdd_access.php');
$bdd=appel_bdd();
include('../modele/bdd_access_maison.php');


include('../vue/frequent/menu.php');

include('../vue/Page_accueil.php');
include('../vue/frequent/footer.php');
