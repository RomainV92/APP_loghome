<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title> Inscription </title>
  <link rel="stylesheet" href="../vue/inscription.css"/>
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
        <span class="tooltip">Le mot de passe doit contenir au moins 7 caractères ,une majuscule et un chiffre.</span>


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

        <p class='condition'> En cliquant sur valider,vous affirmez avoir lu et accepter les <a href="../index?cible=page_legal_and_privacy">conditions d'utilisations</a>.</p>
    
    
      </form>
      
    </div>
  </div>


<script>
// Fonction de désactivation de l'affichage des "tooltips"
function deactivateTooltips() {

var tooltips = document.querySelectorAll('.tooltip'),
    tooltipsLength = tooltips.length;

for (var i = 0; i < tooltipsLength; i++) {
    tooltips[i].style.display = 'none';
}

}


// La fonction ci-dessous permet de récupérer la "tooltip" qui correspond à notre input

function getTooltip(elements) {

while (elements = elements.nextSibling) {
    if (elements.className === 'tooltip') {
        return elements;
    }
}

return false;

}


// Fonctions de vérification du formulaire, elles renvoient "true" si tout est ok

var check = {}; // On met toutes nos fonctions dans un objet littéral


check['Nom'] = function(id) {

var name = document.getElementById(id),
    tooltipStyle = getTooltip(name).style;

if (name.value.length >= 2) {
    name.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
} else {
    name.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
}

};

check['Prenom'] = check['Nom']; // La fonction pour le prénom est la même que celle du nom

check['Telephone'] = function() {

var Telephone = document.getElementById('Telephone'),
    tooltipStyle = getTooltip(Telephone).style,
    regex = /(?=.*[^0-9])/;

if (!regex.test(Telephone.value) && (Telephone.value.length == 10)) {
    Telephone.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
} else {
    Telephone.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
}

};

check['Pseudo'] = function() {

var Pseudo = document.getElementById('Pseudo'),
    tooltipStyle = getTooltip(Pseudo).style;

if (Pseudo.value.length >= 4) {
    Pseudo.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
} else {
    Pseudo.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
}

};

check['Password'] = function() {

var Password = document.getElementById('Password'),
    tooltipStyle = getTooltip(Password).style,
    regex = /(?=.*[A-Z])(?=.*[0-9])/;
    

if (regex.test(Password.value) && (Password.value.length >= 7)){
    Password.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
} else {
    Password.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
}

};

check['Password2'] = function() {

var Password = document.getElementById('Password'),
    Password2 = document.getElementById('Password2'),
    tooltipStyle = getTooltip(Password2).style;

if (Password.value == Password2.value && Password2.value != '') {
    Password2.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
} else {
    Password2.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
}

};

check['Answer'] = function() {

var Answer = document.getElementById('Answer'),
    tooltipStyle = getTooltip(Answer).style;

if (Answer.value.length > 0){
    tooltipStyle.display = 'none';
    Answer.className = 'correct';
    return true;
} else {
    tooltipStyle.display = 'inline-block';
    return false;
}

};

check['Mail'] = function() {

  var Mail = document.getElementById('Mail'),
      tooltipStyle = getTooltip(Mail).style,
      regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;

   if(regex.test(Mail.value) && (Mail.value.length > 0))
   {
    Mail.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
   }
   else
   {
    Mail.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
   }
};

// Mise en place des événements

(function() { // Utilisation d'une IIFE pour éviter les variables globales.

var myForm = document.getElementById('myForm'),
    inputs = document.querySelectorAll('input[type=text], input[type=password],input[type=mail]'),
    inputsLength = inputs.length;

for (var i = 0; i < inputsLength; i++) {
    inputs[i].addEventListener('keyup', function(e) {
        check[e.target.id](e.target.id); // "e.target" représente l'input actuellement modifié
    });
}
myForm.addEventListener('submit', function(e) {

var result = true;

for (var i in check) {
    result = check[i](i) && result;
}

if (result) {
    

    myForm.submit(); // Le formulaire est expédié

    
}
else{
    alert('Le formulaire n\'est pas bien rempli.');
}

e.preventDefault();

});



})();


// Maintenant que tout est initialisé, on peut désactiver les "tooltips"

deactivateTooltips();

</script>
</body>

</html>
