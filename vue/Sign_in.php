<!DOCTYPE html>
<html>
  <head>
    <title>Connexion</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div>
      <p>Veuillez entrer vos identifiants</p>
      <form method="post" action="../index.php?cible=check_identifiants">
        <p> <label for="nickname">Login : </label> <input id="nickname" type="text" name="nickname" required />
            <label for="password">Mot de passe : </label> <input id="password" type="password" name="password" required />
            <input type="submit" value="Connexion" />
        </p>
      </form>
    </div>
  </body>
</html>
