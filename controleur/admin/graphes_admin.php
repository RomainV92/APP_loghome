<?php
session_start();
include('../../vue/frequent/entete.php');
include('../../modele/bdd_access.php');
$bdd= appel_bdd();
$utilisateurs = All_login($bdd);
$type_capteurs= Trouver_types_capteurs($bdd);
include('../modele/redirection_si_deco.php');
