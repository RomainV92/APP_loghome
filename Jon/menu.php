
<!DOCTYPE html>

<html>
    <head>
      <title>menu</title>
        <meta charset="utf-8">
        <meta name="viewport" content="witdh=device-width, initial-scale=1">
        <link rel='stylesheet' href='menu.css'>
    </head>

    <body>
        <nav>
            <label for="menu-mobile" class="menu-mobile">Menu</label>
            <input type="checkbox" id="menu-mobile" role="button">




            <ul>

                <li class="menu-home"><a href="#">ACCUEIL</a></li>
                <li class="menu-myhouses"><a href="#">MES MAISONS</a>
                    <ul class="submenu">
                        <?php while ($donnees = $reponse->fetch())
                        {
                        ?>
                        <li><a href="<?php echo $donnees['id']; ?>.php"><?php echo $donnees['nom']; ?></a></li>
                        <?php
                        }
                        $reponse->closeCursor(); // Termine le traitement de la requête
                        ?>

                        <li><a href="ajouter_maison.php">Ajouter une maison</a></li>
                    </ul>
                </li>
                <li class="menu-myaccount"><a href="#">MON COMPTE</a>
                    <ul class="submenu">
                        <li><a href="#">Mes capteurs</a></li>
                        <li><a href="#">Mes informations</a></li>
                        <li><a href="#">Aide</a></li>
                        <li><a href="#">Déconnexion</a></li>
                    </ul>
                </li>


            </ul>
        </nav>





    </body>
</html>
