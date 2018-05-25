<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title> Page ajout </title>
    <link rel="stylesheet" href="../vue/inscription.css"/>
  </head>
  <body>
    <div class="InBox">
      <img src="../images/image_Log.png" class="avatar">
      <h1> Inscription </h1>
      <form method="post" action=<?php echo $Direction; ?> />
          <p>Votre Prenom </p>
          <input id="Prenom" type="text" name="Prenom" id="Prenom" required/>
          <p>Votre Nom </p>
          <input id="Nom" type="text" name="Nom" id="Nom" required>
          <p><label>Votre Identifiant </label><input type="text" name="Pseudo" id="Pseudo" required></p>
          <p><label>Votre Mot de passe </label><input type="password" name="Password" id="Password" required></p>
          <p><label>Votre Telephone </label><input type="text" name="Telephone" id="Telephone" placeholder="Ex: 06 95 82 71 60" required></p>
          <p><label>Votre Mail </label><input type="text" name="Mail" id="Mail" placeholder="Ex: a@gmail.com" required></p>

          <input type="submit" value="Valider" class="Submit_button">
      </form>
      <span class="Error"><?php echo $Error_message; ?></span>
    </div>
  </body>
</html>
