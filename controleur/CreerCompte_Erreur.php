<?php
//include('vue/frequent/header.php');
session_start();
$Error_message= "Champs incorrectes";
$Direction='"controleur/Redirection_creation.php"';
include("modele/bdd_access_maison.php")
include('vue/frequent/menu.php');
include('vue/Ajout.php');
include('vue/frequent/footer.php');





?>