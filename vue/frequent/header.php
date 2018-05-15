<html>
<header>
  <link rel="stylesheet" href="vue/frequent/style_header.css"/>
  <!--
  <div class="logo_titre">
    <img id="logo" src="images/Logo.png" alt="Logo Log.Home" />
    <h1 id="titre">Bienvenue chez DOMISEP</h1>
  </div>
-->
  <img id="logo" src="images/Logo.png" alt="Logo Log.Home" />
  <h1 id="titre">Bienvenue chez DOMISEP</h1>
  <div style="width: 220px;display: flex; justify-content: center;">

    <?php if($_SESSION == array())
    {
      echo '<a id="login_button" class="button" href="index.php?cible=Page_connexion">Se connecter</a>'.'<a id="Sub_button" class="button" href="index.php?cible=CreerCompte">Inscription</a>' ;
    }
    else
    {
      echo '<a id="login_button" class="button" href="controleur/deconnexion.php">Se déconnecter</a>';
    }
    ?>

  </div>
  <!-- <img id="pic_accueil" src="images/image_accueil.jpg" alt="La domotique c'est trop génial" />
-->
</header>
</html>
