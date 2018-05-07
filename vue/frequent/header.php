<header>
  <!--
  <div class="logo_titre">
  <img id="logo" src="images/Logo.png" alt="Logo Log.Home" />
  <h1 id="titre">Bienvenue chez DOMISEP</h1>
</div>
-->
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

<div class="bodyMenu">
  <nav>
    <label for="menu-mobile" class="menu-mobile">Menu</label>
    <input type="checkbox" id="menu-mobile" role="button">
    <ul>

      <li class="menu-home"><a href="#">HOME</a></li>
      <li class="menu-myhouses"><a href="#">MY HOUSES</a>
        <ul class="submenu">
          <li><a href="#">House 1</a></li>
          <li><a href="#">House 2</a></li>
          <li><a href="#">Add house </a></li>
        </ul>
      </li>
      <li class="menu-myaccount"><a href="#">MY ACCOUNT</a>
        <ul class="submenu">
          <li><a href="#">My sensors</a></li>
          <li><a href="#">My information</a></li>
          <li><a href="#">Help</a></li>
          <li><a href="#">Log out</a></li>
        </ul>
      </li>
      <li class="menu-about"><a href="#">ABOUT</a>
        <ul class="submenu">
          <li><a href="#">About us</a></li>
          <li><a href="#">Legal and privacy</a></li>
        </ul>
      </li>

    </ul>
  </nav>
</div>

<!-- <img id="pic_accueil" src="images/image_accueil.jpg" alt="La domotique c'est trop génial" />
-->
</header>
