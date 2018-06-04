<?php
//echo $_GET['cible'];
try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
    die('Erreur : '.$e->getMessage());
    }
 $capteurs = $bdd->prepare('SELECT * FROM capteurs WHERE ID_piece=?');
 $capteurs-> execute(array($_GET['cible']));
