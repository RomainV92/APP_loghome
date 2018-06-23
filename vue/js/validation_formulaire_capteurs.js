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
            
            
            check['namesensor'] = function(id) {
            
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
            
            check['reference'] = check['namesensor']; // La fonction pour le nom est la même que celle de la ville
            
            
            
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
            
            
            // Maintenant que tout est initialisé, on peut désactiver les "tooltips"
            
            deactivateTooltips();