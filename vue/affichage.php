

<?php

function connecte()   //fonction qui vérifie si l'utilisateur est connecté
{

}



function compte_de_qui($nom, $id)   //fonction qui affiche le nom de la personne si elle est connectée
{
  if (connecte())
    echo 'Utilisateur :' . $nom . ' ID :' . $id;
}


?>
