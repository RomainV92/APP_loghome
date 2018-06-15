<!DOCTYPE html>
<html>
    <head>
        <title>Logements</title>
        <meta charset= "utf-8">
        <link rel='stylesheet' href='../vue/house.css'>
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

              <form action="../modele/ajouter_maison_post.php" method="post" id='myForm'>

                <div class="row">
                  <div class="col-25">
                    <label for="nom">Nom</label>
                  </div>
                  <div class="col-55">
                    <input type="text" name="nom" id="nom" required/>
                    <span class="tooltip">Le nom ne peut pas faire moins de 2 caractères.</span>
                    <br/>

                  </div>
                </div>


                <div class="row">
                  <div class="col-25">
                    <label for="adresse">Numéro de rue</label>
                  </div>
                  <div class="col-55">
                    <input type="text" name="adresse" id="adresse" required/>
                    <span class="tooltip">Le numéro ne doit pas contenir de lettre.</span>
                    <br />
                  </div>
                </div>

                <div class="row">
                  <div class="col-25">
                    <label for="adresse">Rue</label>
                  </div>
                  <div class="col-55">
                    <input type="text" name="Street" id="Street" required/>
                    <span class="tooltip">Le libellé de la voie ne doit pas contenir de chiffre et doit ne peut pas faire moins de 4 caractères.</span>
                    <br />
                  </div>
                </div>

                <div class="row">
                  <div class="col-25">
                    <label for="adresse">Ville</label>

                  </div>
                  <div class="col-55">
                    <input type="text" name="City" id="City" required/>
                    <span class="tooltip">La ville ne peut pas contenir moins de 2 caractères.</span>
                    <br />
                  </div>
                </div>

                <div class="row">
                  <div class="col-25">
                    <label for="adresse">Code Postal</label>
                  </div>
                  <div class="col-55">
                    <input type="text" name="Postal" id="Postal" required/>
                    <span class="tooltip">Le code postal ne peut pas contenir de lettres.</span>
                    <br />
                  </div>
                </div>

                <div class="row">
                  <div class="col-25">
                    <label for="superficie">Superficie (m²)</label>
                  </div>
                  <div class="col-55">
                    <input type="number" name="superficie" id="superficie"required/>
                    <span class="tooltip">La superficie ne peut pas contenir de lettres.</span>
                    <br/>
                  </div>
                </div>


              <input type="submit" value="Ajouter une nouvelle maison" id="button_submit"/>


              </form>
              <span class="close">&times;</span>
            </div>

          </div>

          <div id="msg" class="Modal">
            <div class="modal-content-2">
              <p>
                Etes-vous sûr de vouloir supprimer cette maison? <br />
                Cette action est irréversible.</p>
                <a id ='valider' class="confirmer" >Confirmer</a>
                
                <button id="retour" class="confirmer">Retour</button>
              
            </div>
          </div>
         </div>
    </div>
         
    <script type="text/javascript" src='../vue/js/validation_formulaire_logements.js'> </script>
    <script type="text/javascript" src='../vue/js/modal_page_logements.js'> </script>
          </body>
          </html>





    
