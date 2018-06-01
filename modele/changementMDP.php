<?php

<<<<<<< HEAD
/*
=======
>>>>>>> e1458851923883d026db90770fcf2536dccd52cd
try {
    $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
}
<<<<<<< HEAD
*/
=======
>>>>>>> e1458851923883d026db90770fcf2536dccd52cd

function changementMDP($mdp,$id)
{
    global $bdd;
    $get = $bdd->prepare('UPDATE login SET Password = :nvpass WHERE ID = :ID');
    $get->execute(array(
        'nvpass' => $mdp,
        'ID' => $id
    ));
}
function getPass($id) {
    global $bdd;
    $get = $bdd->prepare('SELECT Password FROM login WHERE ID = ?');
    $get->execute(array($id));
    return $get;
<<<<<<< HEAD
}
=======
}
>>>>>>> e1458851923883d026db90770fcf2536dccd52cd
