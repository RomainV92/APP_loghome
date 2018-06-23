<?php

// On importe le modèle
require('modele_chat.php');

// On récupère les messages
$messages = getMessages($_SESSION['ID'],$_SESSION['ID']);

if(isset($_POST['submitForm'])) {
    ajouterMessage($_SESSION['ID'],9,$_POST['contenu']);
}

// On importe la vue
require('vue.php');