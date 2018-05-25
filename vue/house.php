<!DOCTYPE html>
<html>
    <head>
        <title>Maison</title>
        <meta charset= "utf-8">
        <link rel='stylesheet' href='../vue/house_style.css'>
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

          <?php bdd_maisons($Infos_maisons); ?>
          <!-- Script pour popup ajout maison -->
          <div id="popup-box" class="popup-position">
            <div id="popup-wrapper">
              <div id="popup-container">
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
              <p><a href="javascript:void(0)"onclick="toggle_visibility('popup-box')">close popup</a></p>
            </div>
          </div>
        </div>


         <div class=ajouter_une_piece>
           <h2><a href="javascript:void(0)" onclick="toggle_visibility('popup-box')">Ajouter une maison</a></h2>
        </div>

        </div>
    </div>
    </body>
    </html>
