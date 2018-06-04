<?php
session_start();
$_SESSION['id_user']=$_GET['cible'];
header('location:../index.php?cible=accueil');
