
<!DOCTYPE html>

<html>
    <head>
      <title>menu</title>
        <meta charset="utf-8">
        <meta name="viewport" content="witdh=device-width, initial-scale=1">
        <link rel='stylesheet' href='vue/frequent/menu.css'>
    </head>
<div class="Menu">
    <body>
        <nav>
            <label for="menu-mobile" class="menu-mobile">Menu</label>
            <input type="checkbox" id="menu-mobile" role="button">
            <ul>

                <li class="menu-home"><a href="index.php?cible=accueil">ACCUEIL</a></li>
                      <?php  if (!empty($_SESSION['id_user'])) {
                        // code...
                      ?>
                      <li class="menu-myhouses"><a href="index.php?cible=Page_logement">LOGEMENTS</a>
                          <ul class="submenu"x>
                          <li><a href="index.php?cible=Ajout_maison">Ajouter une maison</a></li>
                      <li>salut</li>
                      <?php
                      while ($donnees = $reponse->fetch())
                      {
                      ?>

                      <li><a href="<?php echo $donnees['ID']; ?>.php"><?php echo  $donnees['nom'] ?></a></li>

                      <?php

                    }
                      $reponse->closeCursor(); // Termine le traitement de la requête
                    } else { ?>
                      <li class="menu-myhouses"><a href="index.php?indice=Page_logement">LOGEMENTS</a>
                          <ul class="submenu"x>
                            <li><a href="index.php?cible=Page_connexion">Connexion</a></li><?php
                    }
                      ?>
                    </ul>
                </li>
                <li class="menu-myaccount"><a href="#">MON COMPTE</a>
                    <ul class="submenu">
                        <?php
                        if(isset($_SESSION['id_user'])){ ?>
                        <li><a href="index.php?cible=deconnexion">Déconnexion</a></li>
                        <li><a href="#">Mes capteurs</a></li>
                        <li><a href="#">Mes informations</a></li>
                        <li><a href="#">Aide</a></li>
                        <?php
                      }else{ ?>
                        <li><a href="index.php?cible=Page_connexion">Connexion</a></li>
                        <?php
                      }
                        ?>
                    </ul>
                </li>


            </ul>
        </nav>

</div>
    </body>
</html>
