<?php

/*
try {
    $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
}
*/

function changementMDP($mdp,$id)
{
    global $bdd;
    $get = $bdd->prepare('UPDATE login SET Password = :nvpass WHERE ID = :ID');
    $get->execute(array(
        'nvpass' => password_hash($mdp,PASSWORD_DEFAULT),
        'ID' => $id
    ));
}
function getPass($id) {
    global $bdd;
    $get = $bdd->prepare('SELECT Password FROM login WHERE ID = ?');
    $get->execute(array($id));
    return $get;
}

