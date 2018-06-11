<!DOCTYPE html>
<html>
<head>
  <title>Capteurs</title>
  <meta charset= "utf-8">
  <link rel='stylesheet' href='../vue/capteur.css'>

</head>

<body>
  <div class="wrapper">
    <div class="maison" id=conteneur>

      <?php $nom_de_la_piece = $bdd->query('SELECT nom FROM pieces WHERE ID=\''.$_GET['cible'].'\'' );
      $nom_piece = $nom_de_la_piece->fetch(); ?>

      <div class='conteneur_nom_piece'>
        <p class='nom_piece'><?php echo 'Vous êtes actuellement dans la pièce : '.$nom_piece['nom']; ?></P>
        </div>

        <div id="barchart_values" ></div>


        <?php bdd_capteurs($capteurs,$bdd); ?>

          <!-- Script pour popup ajout maison -->
          <meta name="viewport" content="width=device-width, initial-scale=1">


          <!-- Trigger/Open The Modal -->
          <button id="myBtn" class="ajouter_un_capteur"><p>Ajouter un capteur</p><img id="plus_rouge" src="../images/plus_rouge.png" alt="plus_rouge" /></button>

          <!-- The Modal -->
          <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">

              <form id='myForm' action="../modele/ajout_capteur_post.php?cible=<?php echo $_GET['cible']?>" method="post">

                <div class="row">
                  <div class="col-25">
                    <label for="namesensor">Nom du capteur</label>
                  </div>
                  <div class="col-55">
                    <input type="text" name="namesensor" id="namesensor" placeholder="ex: Luminos" size="30" maxlength="30"/>
                    <span class="tooltip">Le nom ne peut pas faire moins de 2 caractères.</span>
                    </br>
                  </div>
                </div>

                <div class="row">
                  <div class="col-25">
                    <label for="reference">Référence</label>
                  </div>
                  <div class="col-55">
                    <input type="text" name="reference" id="reference" placeholder="ex: XX265 136 A" size="30" maxlength="30"/>
                    <span class="tooltip">La reference ne peut pas faire moins de 2 caractères.</span>
                    </br>
                  </div>
                </div>


                <div class="row">
                  <div class="col-25">
                    <label for="sensortype">Type de capteur</label>
                  </div>
                  <div class="col-55">
                    <select name="sensortype" id="sensortype">
                      <?php Choix_senseurs($type_capteur) ?>

                    </select>
                  </div>
                </div>

                <input type="submit" id="button_submit" value="Ajouter capteur" />

              </form>
              <span class="close">&times;</span>
            </div>
          </div>
        </div>


      </div>
      
      <div id="msg" class="Modal">
            <div class="modal-content-2">
              <p>
                Etes-vous sûr de vouloir supprimer ce capteur? <br />
                Cette action est irréversible. </p>
                <a id ='valider' class="confirmer" >Confirmer</a>
                <button id="retour" class="confirmer">Retour</button>
             
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


         var retour = document.getElementById('retour');
         

         retour.onclick = function()
         {
           msg.style.display = "none";
         }


         function valiDelete(id,id2)
         {
           var id_capteur = id,
               id_piece = id2,
               link="../modele/supprimer_capteur.php?cible=",
               link2="&cible2=";

           var valider = document.getElementById('valider');
           valider.href=link+id_capteur+link2+id_piece;


           var msg = document.getElementById('msg');
           msg.style.display = "block";

         }
      
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
      </script>
    </body>
    </html>
