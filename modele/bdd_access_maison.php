<?php
 try
     {
     $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');
     }
     catch(Exception $e)
     {
     die('Erreur : '.$e->getMessage());
     }
     if(!Empty($_SESSION))
     {
     $reponse = $bdd->query('SELECT * FROM maison WHERE ID_user=\''.$_SESSION['id_user'].'\'');
     }
     ?>
