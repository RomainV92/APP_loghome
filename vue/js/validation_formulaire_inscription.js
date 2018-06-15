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
    