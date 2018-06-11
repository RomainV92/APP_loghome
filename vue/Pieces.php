<!DOCTYPE html>
<html>
    <head>
        <title>Pièces</title>
        <meta charset= "utf-8">
        <link rel='stylesheet' href='../vue/Pieces.css'>

    </head>

    <body>
    <div class="wrapper">
        <div class="maison" id=conteneur>
          <?php $nom_de_la_maison = $bdd->query('SELECT nom FROM maison WHERE ID_user=\''.$_SESSION['id_user'].'\' AND ID=\''.$_GET['cible'].'\'' );
                $nom_maison = $nom_de_la_maison->fetch(); ?>

          <div class='conteneur_nom_maison'>
                <p class='nom_maison'><?php echo 'Vous êtes actuellement dans l\'habitation : '.$nom_maison['nom']; ?></P>
          </div>

          <?php
           bdd_maisons($pieces); ?>




          <!-- Script pour popup ajout maison -->
          <meta name="viewport" content="width=device-width, initial-scale=1">


          <!-- Trigger/Open The Modal -->
          <button id="myBtn" class="ajouter_une_piece"><p>Ajouter une pièce</p><img id="plus_rouge" src="../images/plus_rouge.png" alt="plus_rouge" /></button>

          <!-- The Modal -->
          <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">

              <form action="../modele/ajouter_piece_post.php?cible=<?php echo $_GET['cible']?>" method="post" id='myForm'>

                <div class="row">
                  <div class="col-25">
                    <label for="nom">Nom</label>
                  </div>
                  <div class="col-55">
                    <input type="text" name="nom" id="nom" required/>
                    <span class="tooltip">Le nom ne peut pas faire moins de 2 caractères.</span>
<br />
                  </div>
                </div>

                <div class="row">
                  <div class="col-25">
                    <label for="superficie">Superficie (m²)</label>
                  </div>
                  <div class="col-55">
                    <input type="number" name="superficie" id="superficie" required/>
                    <span class="tooltip">La superficie ne peut pas contenir de lettres.</span>
<br />
                  </div>
                </div>


              <input type="submit" value="Ajouter une nouvelle piece" id="button_submit"/>


              </form>
              <span class="close">&times;</span>
            </div>

          </div>
        </div>
    </div>

    
    <div id="msg" class="Modal">
            <div class="modal-content-2">
              <p>
                Etes-vous sûr de vouloir supprimer cette pièce? <br />
                Cette action est irréversible.</p>
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
            var id_piece = id,
                id_maison = id2,
                link="../modele/supprimer_piece.php?cible=",
                link2="&cible2=";

            var valider = document.getElementById('valider');
            valider.href=link+id_piece+link2+id_maison;


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


check['nom'] = function() {

var name = document.getElementById('nom'),
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


check['superficie'] = function() {

var superficie = document.getElementById('superficie'),
    tooltipStyle = getTooltip(superficie).style,
    regex = /(?=.*[^0-9])/;   

if (!regex.test(superficie.value) && (superficie.value.length > 0)) {
    superficie.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
} else {
    superficie.className = 'incorrect';
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


// Maintenant que tout est initialisé, on peut désactiver les "tooltips"

deactivateTooltips();


          </script>
      </body>
    </html>
