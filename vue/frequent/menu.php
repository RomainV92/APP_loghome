<html>
<head>
  <meta name="viewport" content="witdh=device-width, initial-scale=1">
  <link rel='stylesheet' href='vue/frequent/menu.css'>
</head>
<div class="Menu">
  <body>
    <nav>
      <label for="menu-mobile" class="menu-mobile">Menu</label>
      <input type="checkbox" id="menu-mobile" role="button">
      <ul>
        <div>
        <li class="menu-main"><a href="index.php?cible=accueil">ACCUEIL</a></li>
        <?php  if (!empty($_SESSION['id_user'])) {
          ?>
          <li class="menu-main"><a href="index.php?cible=Page_logement">LOGEMENTS</a>
            <ul class="submenu">
              <li><a href="index.php?cible=Ajout_maison">Ajouter une maison</a></li>
              <?php
              while ($donnees = $reponse->fetch())
              {
                ?>

                <li><a href="<?php echo $donnees['ID']; ?>.php"><?php echo  $donnees['nom'] ?></a></li>
            </ul>
                <?php

              }
              $reponse->closeCursor(); // Termine le traitement de la requête

            } else { ?>
              <li class="menu-main"><a href="index.php?indice=Page_logement">LOGEMENTS</a>
                <ul class="submenu"x>
                  <li><a href="index.php?cible=Page_connexion">Connexion</a></li><?php
                }
                ?>
                </ul>
              </li>
          </li>
            <li class="menu-main"><a href="#">MON COMPTE</a>
              <ul class="submenu">
                <?php
                if(isset($_SESSION['id_user'])){ ?>
                  <li><a href="index.php?cible=deconnexion">Déconnexion</a></li>
                  <li><a href="#">Mes capteurs</a></li>
                  <li><a href="#">Mes informations</a></li>
                  <li><a href="#">Aide</a></li>
                  <?php
                }else{
                  echo "<li><a href=\"index.php?cible=Page_connexion\">Connexion</a></li>";
                }
                ?>
              </ul>
            </li>
            </div>
            <div>
            <li class="menu-main">
              <?php if($_SESSION == array())
              {
                echo '<a href="index.php?cible=Page_connexion">CONNEXION</a>';
              }
              else
              {
                echo '<a href="index.php?cible=deconnexion">DECONNEXION</a>';
              }
              ?>
            </li>
          </div>
          </ul>
        </nav>

      </div>
    </body>
    </html>
