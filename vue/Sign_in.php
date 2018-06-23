<!DOCTYPE html>
<html>
  <head>
    <title>Connexion</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../vue/style_login.css" />
  </head>

  <body>
  <div class="wrapper">
    <img src="../images/image_Log.png" class="avatar">
    <div class="loginbox">
      <h1> Connexion </h1>
      <form method="post" action="../controleur/check_identifiants.php" >
        <p> Identifiant </p>
        <input id="Pseudo" type="text" name="Pseudo" placeholder="Identifiant" required />
        <p> Mot de passe </p>
        <input id="Password" type="password" name="Password" placeholder="Mot de passe" required />
        <input type="submit" value="Connexion" />
        <?php if(!empty($Error_message)){
                 echo  "<p class='message_erreur' >$Error_message</p> ";
                }?>
      </form>
      <!-- Trigger/Open The Modal -->
      <button id="myBtn" class="button_oublie"><p>Mot de passe perdu/oublié?</p></button>
      <!-- The Modal -->
      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">

          <form action="../controleur/recup_mail.php" method="post" id="Mailpost">
                <label for="pseudo_Ver" >Pseudo</label>
                <input type="text" name="pseudo_Ver" id="pseudo_Ver" required /><br />

                <label for="Question_Ver" id="label_question">Entrez votre question secrète</label><br/>
                <select name="Question_Ver" id="Question_ver">
                  <option value="type1">Le nom de votre premier animal de compagnie</option>
                  <option value="type2">Le nom de jeune fille de votre mère</option>
                  <option value="type3">Votre ville de naissance</option>
                  <option value="type4">Votre boisson préférée</option>
                  <option value="type5">Votre nourriture préférée</option>
                </select>
                <p><input type="text" name="Answer_Ver" id="Answer_Ver" placeholder="Réponse" required></p>
                <button type="submit" id="button_submit">Envoyer</button>
            </form>
            <span class="close">&times;</span>
            </div>
    </div></br>
    <a href="../index.php?cible=CreerCompte" class="button_compte" >Vous n'avez pas de compte?</a>

</div>
</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
  </body>
</html>
