<?php
session_start();

include('../modele/bdd_access.php');

$bdd = appel_bdd();
$data = info_user($bdd, $_SESSION['id_user']);

include('../modele/bdd_access_maison.php');
//include('../vue/frequent/menu.php');



foreach($data as $cle => $it)
{
    echo($it . "<br />");
}

print_r($data);
