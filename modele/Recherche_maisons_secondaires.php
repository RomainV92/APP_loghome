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

$Infos_maisons_secondaires = $bdd->query('SELECT *
FROM maison M
INNER JOIN  utilisateurs_maison U ON M.ID = U.ID_maison
WHERE U.ID_user =\''.$_SESSION['id_user'].'\'');
