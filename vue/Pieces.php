<!DOCTYPE html>
<html>
    <head>
        <title>Maison</title>
        <meta charset= "utf-8">
        <link rel='stylesheet' href='../vue/style_house.css'>
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

        <div class="maison" id=conteneur>

        <?php bdd_maisons($pieces); ?>
        <!-- Script pour popup ajout maison -->
        <div id="popup-box" class="popup-position">
          <div id="popup-wrapper">
            <div id="popup-container">
              <h3>popup box 1</h3>
              <p>Bravo voila un popup</p>
              <p><a href="javascript:void(0)"onclick="toggle_visibility('popup-box')">close popup</a></p>
            </div>
          </div>
        </div>


         <div class=ajouter_une_piece>
           <h2><a href="javascript:void(0)" onclick="toggle_visibility('popup-box')">Ajouter une pieces</a></h2>
        </div>

        </div>
      </body>
    </html>
