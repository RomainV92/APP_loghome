<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title> Page ajout </title>
  <link rel="stylesheet" href="../vue/inscription.css"/>
</head>
<body>
  <div class="wrapper">
    <img src="../images/image_Log.png" class="avatar">
    <div class="inbox">
      <h1> Inscription </h1>
      <form method="post" action=<?php echo $Direction; ?> />
        <p>Votre Prenom </p>
        <input id="Prenom" type="text" name="Prenom" id="Prenom" required/>
        <p>Votre Nom </p>
        <input id="Nom" type="text" name="Nom" id="Nom" required>
        <p><label>Votre Identifiant </label><input type="text" name="Pseudo" id="Pseudo" required></p>
        <p><label>Votre Mot de passe </label><input type="password" name="Password" id="Password" required></p>
        <p><label>Votre Telephone </label><input type="tel" name="Telephone" id="Telephone" placeholder="Ex: 06 95 82 71 60" required></p>
        <p><label>Votre Mail </label><input type="mail" name="Mail" id="Mail" placeholder="Ex: exemple@exemple.com" required></p>
        <p><input type="hidden" name="Image_url" value="image_Log.png"></p>
        <p><label >Entrez votre question secrète </label>
        <select name="Question" id="Question">
          <option value="type1">Le nom de votre premier animal de compagnie</option>
          <option value="type2">Le nom de jeune fille de votre mère</option>
          <option value="type3">Votre ville de naissance</option>
          <option value="type4">Votre boisson préférée</option>
          <option value="type5">Votre nourriture préférée</option>
        </select></p>
        <p> </p>
        <p><input type="text" name="Answer" id="Answer" placeholder="Réponse" required></p>

        <input type="submit" value="Valider" class="Submit_button">
      </form>
      <span class="Error"><?php echo $Error_message; ?></span>
    </div>
  </div>

</body>

</html>
