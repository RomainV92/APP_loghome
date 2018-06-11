<!DOCTYPE html>
<html>
    <head>
        <title>Logements</title>
        <meta charset= "utf-8">
        <link rel='stylesheet' href='../vue/house_style.css'>
    </head>

    <body>
    <div class="wrapper">
        <div class="maison" id=conteneur>

          <?php bdd_maisons($Infos_maisons); ?>
          <!-- Script pour popup ajout maison -->
          <meta name="viewport" content="width=device-width, initial-scale=1">


          <!-- Trigger/Open The Modal -->
          <button id="myBtn" class="ajouter_une_maison"><p>Ajouter une maison</p><img id="plus_rouge" src="../images/plus_rouge.png" alt="plus_rouge" /></button>

          <!-- The Modal -->
          <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">

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
                    <label for="adresse">Numéro de rue</label>
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
                    <label for="adresse">Ville</label>
                  </div>
                  <div class="col-55">
                    <input type="text" name="City" id="City" /><br />
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


              <input type="submit" value="Ajouter une nouvelle maison" id="button_submit"/>


              </form>
              <span class="close">&times;</span>
            </div>

          </div>

          <div id="msg" class="Modal">
            <div class="modal-content">
              <p>
                Etes-vous sûr de vouloir supprimer cette maison? <br />
                Cette action est irréversible.
                <button id="valider" class="ajouter_un_utilisateur">Confirmer</button>
                <button id="retour" class="ajouter_un_utilisateur">Retour</button>
              </p>
            </div>
          </div>

          <script>
          var retour = document.getElementById('retour');
          var valider = document.getElementById('valider');
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

          retour.onclick = function()
          {
            msg.style.display = "none";
          }

          function valiDelete(id)
          {
            //var id = id;
            var msg = document.getElementById('msg');
            msg.style.display = "block";

            valider.onclick = function()
            {
              var xhr = new XMLHttpRequest();
              xhr.open('POST', 'Page_logement.php');
              xhr.send('idMaison='+id);
            }
          }



          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
              if (event.target == modal) {
                  modal.style.display = "none";
              }
              if (event.target == msg)
              {
                  msg.style.display = "none";
              }
          }
          </script>
          </body>
          </html>





        </div>
    </div>
    </body>
    </html>
