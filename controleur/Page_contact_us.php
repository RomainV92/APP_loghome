<?php
<<<<<<< HEAD
include('../modele/bdd_access.php');
$bdd=appel_bdd();

include("modele/bdd_access_maison.php");
include('vue/frequent/menu.php');
include('vue/contact_us.php');
include('vue/frequent/footer.php');
=======
session_start();
include("../modele/bdd_access_maison.php");
include('../vue/frequent/menu.php');
include('../vue/contact_us.php');
include('../vue/frequent/footer.php');
>>>>>>> e70da3b10195691b0e442d276843903af81b487a

?>
