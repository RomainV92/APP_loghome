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

        <?php bdd_maisons($capteurs); ?>
        <!-- Script pour popup ajout maison -->
        <div id="popup-box" class="popup-position">
          <div id="popup-wrapper">
            <div id="popup-container">
              <h3>Ajouter un Capteur</h3>
              <ul>
                <li><label for="reference">Référence :</label>
                    <input type="text" name="reference" id="reference" placeholder="ex: XX265 136 A" size="30" maxlength="30"/>
                  </li>
                <li><label for="namesensor">Nom du capteur :</label>
                    <input type="text" name="namesensor" id="namesensor" placeholder="ex: Luminos" size="30" maxlength="30"/>
                </li>
                <li><label for="sensortype">Type de capteur :</label>
                    <select name="sensortype" id="sensortype">
                        <option value="Luminosity">Luminosité</option>
                        <option value="Temperature">Température</option>
                        <option value="Motor">Moteur</option>
                    </select>
                </li>
              </ul>
              <input type="submit" id="confirm" value="Add sensor" />
              <p><a href="javascript:void(0)"onclick="toggle_visibility('popup-box')">Fermer</a></p>
            </div>
          </div>
        </div>


         <div class=ajouter_un_capteur>
           <h2><a href="javascript:void(0)" onclick="toggle_visibility('popup-box')">Ajouter un capteur</a></h2>
        </div>

        </div>
    </div>
    </body>
    </html>
