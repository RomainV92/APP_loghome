 
          // validation formulaire ajout 
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
            
            
            check['nom'] = function(id) {
            
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
            
            check['City'] = check['nom']; // La fonction pour le nom est la même que celle de la ville
            
            check['adresse'] = function(id) {
            
            var adresse = document.getElementById(id),
                tooltipStyle = getTooltip(adresse).style,
                regex = /(?=.*[^0-9])/;   
            
            if (!regex.test(adresse.value) && (adresse.value.length > 0)) {
                adresse.className = 'correct';
                tooltipStyle.display = 'none';
                return true;
            } else {
                adresse.className = 'incorrect';
                tooltipStyle.display = 'inline-block';
                return false;
            }
            
            };
            check['Postal'] = check['adresse'];
            check['superficie'] = check['adresse'];
            
            
            check['Street'] = function() {
            
            var Street = document.getElementById('Street'),
              
                tooltipStyle = getTooltip(Street).style;
                regex = /(?=.*[0-9])/;
            
            if ((Street.value.length >= 4) && !regex.test(Street.value)){
                Street.className = 'correct';
                tooltipStyle.display = 'none';
                return true;
            } else {
                Street.className = 'incorrect';
                tooltipStyle.display = 'inline-block';
                return false;
            }
            
            };
            
            
            // Mise en place des événements
            
            (function() { // Utilisation d'une IIFE pour éviter les variables globales.
            
            var myForm = document.getElementById('myForm'),
                inputs = document.querySelectorAll('input[type=text], input[type=number]'),
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



            
            var check_user = {}; // On met toutes nos fonctions dans un objet littéral
            
            
            check_user['Nom_user'] = function(id) {
            
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
            
            check_user['Prenom_user'] = check_user['Nom_user']; // La fonction pour le nom est la même que celle de la ville
            
            
            check_user['Pseudo_user'] = function(id) {
            
                var Pseudo = document.getElementById(id),
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
            
            
            // Mise en place des événements
            
            (function() { // Utilisation d'une IIFE pour éviter les variables globales.
            
            var myForm_user = document.getElementById('myForm_user'),
                inputs_user = document.querySelectorAll('input[type=text], input[type=number]'),
                inputs_userLength = inputs_user.length;
            
            for (var i = 0; i < inputs_userLength; i++) {
                inputs_user[i].addEventListener('keyup', function(e) {
                    check_user[e.target.id](e.target.id); // "e.target" représente l'input actuellement modifié
                });
            }
            myForm_user.addEventListener('submit', function(e) {
            
            var result = true;
            
            for (var i in check_user) {
                result = check_user[i](i) && result;
            }
            
            if (result) {
                
            
                myForm_user.submit(); // Le formulaire est expédié
            
                
            }
            else{
                alert('Le formulaire n\'est pas bien rempli.');
            }
            
            e.preventDefault();
            
            });
            
            
            
            })();
            
            
            // Maintenant que tout est initialisé, on peut désactiver les "tooltips"
            
            deactivateTooltips();