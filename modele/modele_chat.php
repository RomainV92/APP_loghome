<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=homeniscience;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

function getMessages($ide,$idr)
{
    global $bdd;
    $get = $bdd->prepare('SELECT contenu, ID_utilisateur_envoi, ID_receiver, DATE_FORMAT(date,"%d/%m/%Y %H:%i") AS date FROM chat_domisep WHERE ID_utilisateur_envoi = :ID_e OR ID_receiver = :ID_r ORDER BY date ASC');
    $get->bindParam('ID_e',$ide);
    $get->bindParam('ID_r',$idr);
    $get->execute();
    return $get;
}

function ajouterMessage($id, $parent, $contenu)
{
    global $bdd;
    $insert = $bdd->prepare('INSERT INTO chat_domisep(ID_utilisateur_envoi,ID_receiver,contenu) VALUES(:ID_utilisateur_envoi,:ID_parent,:contenu)');
    $insert->bindParam('ID_utilisateur_envoi', $id);
    $insert->bindParam('ID_parent', $parent);
    $insert->bindParam('contenu', $contenu);
    $insert->execute();
}
