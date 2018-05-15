<?php

/**
 * MVC :
 * - index.php : identifie le routeur à appeler en fonction de l'url
 * - Contrôleur : Crée les variables, élabore leurs contenus, identifie la vue et lui envoie les variables
 * - Modèle : contient les fonctions liées à la BDD et appelées par les contrôleurs
 * - Vue : contient ce qui doit être affiché
 **/

/*
// Appel des fonctions du contrôleur
include("controleurs/fonctions.php");
// Appel des fonctions liées à l'affichage
include("vues/fonctions.php");
*/

if(isset($_GET['cible']) && !empty($_GET['cible']))
{
    $url = $_GET['cible'];

}
else
{
    $url = 'accueil';
}

include('controleur/' . $url . '.php');

?>
