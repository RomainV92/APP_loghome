<?php
session_start();

include('../modele/bdd_access.php');

$bdd = appel_bdd();
$data = info_user($bdd, $_SESSION['id_user']);
