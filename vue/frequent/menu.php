<html>

<head>
  <meta name="viewport" content="witdh=device-width, initial-scale=1">
  <link rel='stylesheet' href='../vue/frequent/menu.css'>
</head>

<div class="Menu">

  <body>

    <nav>

      <label for="menu-mobile" class="menu-mobile">Menu</label>
      <input type= "checkbox" id="menu-mobile" role="button" />
      <ul>
        <div>
          <?php
          $path = $_SERVER['PHP_SELF'];
          $file = basename ($path);
          if ($file != "accueil.php")
            echo "<li class=\"menu-main\"><a href=\"../index.php?cible=accueil\">ACCUEIL</a></li>";

          if (!empty($_SESSION['id_user']))
          {?>
            <li class="menu-main"><a href="../index.php?cible=Page_logement">LOGEMENTS</a>
              <ul class="submenu">
                <!-- <li><a href="../index.php?cible=Ajout_maison">Ajouter une maison</a></li> -->

                <?php while ($donnees = $reponse->fetch())
                {
                  echo "<li><a href=\"../controleur/Page_Pieces.php?cible=". $donnees['ID'] . "\">" . $donnees['nom'] . "</a></li>";
                }
                echo "</ul></li>";
                $reponse->closeCursor(); // Termine le traitement de la requête
          }
          else
          { ?>
            <li class="menu-main"><a href="../index.php?cible=Page_connexion">LOGEMENTS</a>
            </li>
          <?php
          } ?>
          <?php
              if(isset($_SESSION['id_user'])){ ?>
            <li class="menu-main"><a href="#">MON COMPTE</a>
              <ul class="submenu">
                <li><a href="../index.php?cible=deconnexion">Déconnexion</a></li>
                <li><a href="../index.php?cible=Page_capteurs">Mes capteurs</a></li>
                <li><a href="../index.php?cible=InfosCompte">Mes informations</a></li>
                <li><a href="../index.php?cible=Page_aide">Aide</a></li>
              </ul>
            </li>
              <?php
              }
              else
              { ?>
                <li class="menu-main"><a href="../index.php?cible=Page_connexion">MON COMPTE</a>

                </li>
                <?php
              } ?>






        </div>

        <div>
          <?php
              if(!empty($_SESSION['id_user']))
               {?>
                  <li >
            <?php
                   echo  '<p class=\'utilisateur\' >UTILISATEUR : ' . $_SESSION['Nom'].'</p>';?>
                   </li>
                   <li>
                   <?php
                   echo  '<p class=\'id\'> ID : '. $_SESSION['id_user'].'</p>';?>
                 </li>
              <?php   } ?>


        </div>

        <div>
          <li class="menu-main">
          <?php if($_SESSION == array())
          {

            echo '<a href="../index.php?cible=CreerCompte">INSCRIPTION</a>';

          }
          ?>
          </li>
          <li class="menu-main">
          <?php if($_SESSION == array())
          {

            echo '<a href="../index.php?cible=Page_connexion">CONNEXION</a>';


          }
          else
          {
            echo '<a href="../index.php?cible=deconnexion">DECONNEXION</a>';
          } ?>
          </li>

          <img id="logo" src="../images/Logo.png" alt="Logo de Log.home" />
        </div>

      </ul>

    </nav>

  </body>

</div>

</html>
