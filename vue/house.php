<!DOCTYPE html>
<html>
    <head>
        <title>Maison</title>
        <meta charset= "utf-8">
        <link rel='stylesheet' href='../vue/house_style.css'>

    <body>
    <div class="wrapper">
        <div class="maison" id=conteneur>

          <?php bdd_maisons($Infos_maisons); ?>
          <!-- Script pour popup ajout maison -->
          <meta name="viewport" content="width=device-width, initial-scale=1">
          </head>
          <body>

          <!-- Trigger/Open The Modal -->
          <button id="myBtn" class="ajouter_une_piece">ajouter une piece</button>

          <!-- The Modal -->
          <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <form action="../modele/ajouter_maison_post.php" method="post">

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
                    <label for="adresse">Adresse</label>
                  </div>
                  <div class="col-55">
                    <input type="text" name="adresse" id="adresse" /><br />
                  </div>
                </div>

                <div class="row">
                  <div class="col-25">
                    <label for="adresse">Rue</label>
                  </div>
                  <div class="col-55">
                    <input type="text" name="Street" id="Street" /><br />
                  </div>
                </div>

                <div class="row">
                  <div class="col-25">
                    <label for="adresse">Code Postal</label>
                  </div>
                  <div class="col-55">
                    <input type="text" name="Postal" id="Postal" /><br />
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


              <input type="submit" value="Ajouter une nouvelle maison" />


              </form>
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




         <div class=ajouter_une_maison>
           <h2><a href="javascript:void(0)" onclick="toggle_visibility('popup-box')">Ajouter une maison</a></h2>
        </div>

        </div>
    </div>
    </body>
    </html>
