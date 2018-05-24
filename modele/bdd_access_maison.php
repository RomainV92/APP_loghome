<?php
     if(!Empty($_SESSION))
     {
     $reponse = $bdd->query('SELECT * FROM maison WHERE ID_user=\''.$_SESSION['id_user'].'\'');
     }
     ?>
