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

              <form action="../modele/ajouter_piece_post.php?cible=<?php echo $_GET['cible']?>" method="post">

                <div class="row">
                  <div class="col-25">
                    <label for="nom">Nom</label>
                  </div>
                  <div class="col-25">
                    <input type="text" name="nom" id="nom" /><br />
                  </div>
                </div>

                <div class="row">
                  <div class="col-25">
                    <label for="superficie">Superficie (m²)</label>
                  </div>
                  <div class="col-10">
                    <input type="number" name="superficie" id="superficie" /><br />
                  </div>
                </div>


              <input type="submit" value="Ajouter une nouvelle piece" id="button_submit"/>


              </form>
              <span class="close">&times;</span>
            </div>

          </div>
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
