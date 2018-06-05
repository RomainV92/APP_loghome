<!DOCTYPE html>
<html>
    <head>
        <title>Maison</title>
        <meta charset= "utf-8">
        <link rel='stylesheet' href='../vue/capteur.css'>
        <script type="text/javascript">
        function toggle_visibility(id){
          var e = document.getElementById(id);
          if(e.style.display=='block'){
            e.style.display='none';}
            else {
              e.style.display ='block';
            }
        }
        </script>
    </head>

    <body>
    <div class="wrapper">
        <div class="maison" id=conteneur>

        <?php bdd_capteurs($capteurs); ?>
        <!-- Script pour popup ajout maison -->

        <div id="popup-box" class="popup-position">
          <div id="popup-wrapper">
            <div  id="popup-container" class="modal-content">

              <form action="../modele/ajout_capteur_post.php?cible=<?php echo $_GET['cible']?>" method="post">


              <div class="row">
                <div class="col-25">
                  <label for="reference">Référence :</label>
                </div>
                <div class="col-25">
                    <input type="text" name="reference" id="reference" placeholder="ex: XX265 136 A" size="30" maxlength="30"/>
                </div>
              </div>

                <div class="row">
                  <div class="col-25">
                    <label for="namesensor">Nom du capteur :</label>
                  </div>
                  <div class="col-25">
                    <input type="text" name="namesensor" id="namesensor" placeholder="ex: Luminos" size="30" maxlength="30"/>
                  </div>
                </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="sensortype">Type de capteur :</label>
                    </div>
                    <div class="col-25">
                      <select name="sensortype" id="sensortype">
                        <?php Choix_senseurs($type_capteur) ?>

                      </select>
                    </div>
                  </div>

              <input type="submit" id="confirm" value="Ajouter capteur" />
              <p><a href="javascript:void(0)"onclick="toggle_visibility('popup-box')">Fermer</a></p>
            </form>
              <span class="close">&times;</span>
            </div>
          </div>
        </div>


         <div class=ajouter_un_capteur>
           <h2><a href="javascript:void(0)" onclick="toggle_visibility('popup-box')">Ajouter un capteur</br></br><img id="plus_rouge" src="../images/plus_rouge.png" alt="plus_rouge" /></a></h2>

        </div>

        </div>
    </div>
    </body>
    </html>
