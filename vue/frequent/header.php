<header>
  <div class="menuL1">
    <img id="logo" src="images/Logo.png" alt="Logo Log.home" />
    <h1 id="titre">Bienvenue chez DOMISEP</h1>
    <div style="width: 220px;display: flex; justify-content: center;">

      <?php if($_SESSION == array())
      {
        echo '<a id="login_button" class="button" href="vue/Sign_in.php">Se connecter</a>';
      }
      else
      {
        echo '<a id="login_button" class="button" href="controleur/deconnexion.php">Se déconnecter</a>';
      }
      ?>
    </div>
  </div>

  <?php if($_SESSION != array())
  {
    include 'vue/menu/menu.php';
  }
  ?>
</header>
