<?php

     // Connexion à la base de données
     try
     {
         $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
     }
     catch(Exception $e)
     {
         die('Erreur : '.$e->getMessage());
     }
 
$id_user=$_SESSION['id_user'];
$id_maison=$_GET['cible'];
 
    $maison= $bdd ->query('SELECT *
                     FROM maison 
                     WHERE ID =\''.$id_maison.'\'');
    
    $resultat =$maison->fetch();

    if($resultat['ID_user']!=$id_user){
        header("Location: ../index.php?cible=erreur");
    }
    
 
   
 
    