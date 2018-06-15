<!DOCTYPE html>
<html>
<head>
  <title>Capteurs</title>
  <meta charset= "utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                    <input type="text" name="namesensor" id="namesensor" placeholder="ex: Luminos" size="30" maxlength="30" required/>
                    <span class="tooltip">Le nom ne peut pas faire moins de 2 caractères.</span>
                    </br>
                  </div>
                </div>

                <div class="row">
                  <div class="col-25">
                    <label for="reference">Référence</label>
                  </div>
                  <div class="col-55">
                    <input type="text" name="reference" id="reference" placeholder="ex: XX265 136 A" size="30" maxlength="30" required/>
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

    <script type="text/javascript" src='../vue/js/modal_page_capteurs.js'> </script>
    <script type="text/javascript" src='../vue/js/validation_formulaire_capteurs.js'> </script>
    <script type="text/javascript" src='../vue/js/affichage_valeurs_capteurs.js'> </script>

    </body>
    </html>
