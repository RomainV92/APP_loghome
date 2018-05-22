<?php

try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
    die('Erreur : '.$e->getMessage());
    }
 $pieces = $bdd->prepare('SELECT * FROM pieces WHERE ID_maison=?');
 $pieces-> execute(array($_GET['cible']));



 ?>
