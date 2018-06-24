<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title> Inscription </title>
  <link rel="stylesheet" href="../vue/Ajout.css"/>
</head>
<body>
  <div class="wrapper">
    <img src="../images/image_Log.png" class="avatar">
    <div class="inbox">
      <h1> Inscription </h1>



      <form method="post" action='<?php echo $redirection?>' id="myForm">

        <label>Votre Prenom</label>
        <input type="text" name="Prenom" id="Prenom" required/>
        <span class="tooltip">Un prénom ne peut pas faire moins de 2 caractères.</span>

        <label>Votre Nom </label>
        <input type="text" name="Nom" id="Nom" required>
        <span class="tooltip">Un nom ne peut pas faire moins de 2 caractères.</span>


        <label>Votre Identifiant </label> <span class="Error"><?php echo $Error_message; ?></span>
        <input type="text" name="Pseudo" id="Pseudo" required>
        <span class="tooltip">Le pseudo ne peut pas faire moins de 4 caractères.</span>


        <label>Votre Mot de passe </label>
        <input type="password" name="Password" id="Password"  placeholder="Min. 7 caratères, une maj. et un chiffre" required>
        <span class="tooltip">Le mot de passe doit contenir au moins 7 caractères, une majuscule et un chiffre.</span>


        <label>Confirmation Mot de passe </label>
        <input type="password" name="Password2" id="Password2"   required>
        <span class="tooltip">Le mot de passe de confirmation doit être identique à celui d'origine.</span>


        <label>Votre Téléphone </label>
        <input type="text" name="Telephone" id="Telephone" placeholder="Ex: 0695827150" required  >
        <span class="tooltip">Le numéro de téléphone doit être composé de dix chiffres.</span>


        <label>Votre Mail </label>
        <input type="mail" name="Mail" id="Mail" placeholder="Ex: exemple@exemple.com" required>
        <span class="tooltip">Email non valide</span> </br>

        <input type="hidden" name="Image_url" value="image_Log.png">


        <label >Entrez votre question secrète </label>
        <select name="Question" id="Question">
          <option value="type1">Le nom de votre premier animal de compagnie</option>
          <option value="type2">Le nom de jeune fille de votre mère</option>
          <option value="type3">Votre ville de naissance</option>
          <option value="type4">Votre boisson préférée</option>
          <option value="type5">Votre nourriture préférée</option>
        </select>


        <input type="text" name="Answer" id="Answer" placeholder="Réponse" required>
        <span class="tooltip">Champ vide</span>


        <input type="submit" value="Valider" class="Submit_button">

        <p class='condition'> En cliquant sur valider, vous affirmez avoir lu et accepté les <a href="../index?cible=page_legal_and_privacy" target="_blank">conditions d'utilisations</a>.</p>


      </form>

    </div>
  </div>


<script type="text/javascript" src='../vue/js/validation_formulaire_inscription.js'> </script>
</body>

</html>
