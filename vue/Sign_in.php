<!DOCTYPE html>
<html>
  <head>
    <title>Connexion</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../vue/style_login.css" />
  </head>

  <body>
    <div class="loginbox">
      <img src="../images/image_Log.png" class="avatar">
      <h1> Connexion </h1>
      <form method="post" action="../controleur/check_identifiants.php">
        <p> Pseudo </p>
       <input id="Pseudo" type="text" name="Pseudo" placeholder="Pseudo" required />
      <p> Mot de passe </p>
      <input id="Password" type="password" name="Password" placeholder="Mot de passe" required />

            <input type="submit" value="Connexion" />
        <a href=""> Mot de passe oublié/perdu?</a><br>
        <a href="../index.php?cible=CreerCompte">Vous n'avez pas de compte?</a>
      </form>
    </div>
  </body>
</html>
