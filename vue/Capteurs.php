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
           <div id="barchart_values" style="width: 900px; height: 500px;"></div>


        <?php bdd_capteurs($capteurs,$bdd); ?>

          <!-- Script pour popup ajout maison -->
          <meta name="viewport" content="width=device-width, initial-scale=1">


          <!-- Trigger/Open The Modal -->
          <button id="myBtn" class="ajouter_un_capteur"><p>Ajouter un capteur</p><img id="plus_rouge" src="../images/plus_rouge.png" alt="plus_rouge" /></button>

          <!-- The Modal -->
          <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">

              <form action="../modele/ajout_capteur_post.php?cible=<?php echo $_GET['cible']?>" method="post">

                <div class="row">
                  <div class="col-25">
                    <label for="namesensor">Nom du capteur</label>
                  </div>
                  <div class="col-25">
                    <input type="text" name="namesensor" id="namesensor" placeholder="ex: Luminos" size="30" maxlength="30"/>
                  </div>
                </div>

                <div class="row">
                  <div class="col-25">
                    <label for="reference">Référence</label>
                  </div>
                  <div class="col-25">
                    <input type="text" name="reference" id="reference" placeholder="ex: XX265 136 A" size="30" maxlength="30"/>
                  </div>
                </div>


                <div class="row">
                  <div class="col-25">
                    <label for="sensortype">Type de capteur</label>
                  </div>
                  <div class="col-25">
                    <select name="sensortype" id="sensortype">
                      <?php Choix_senseurs($type_capteur) ?>

                    </select>
                  </div>
                </div>

                <input type="submit" id="buttun_submit" value="Ajouter capteur" />

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
