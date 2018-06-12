<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue à la page admninistrateur</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../vue/style_admin.css" />
  </head>


  <body>



  <!--    <div id="content">
        <h3>Ajouter une image</h3>
        <form method="POST" action="../modele/photo_add.php" enctype="multipart/form-data">
    	     <input type="hidden" name="size" value="1000000">
    	      <div>
    	         <input type="file" name="image">
    	       </div>
    	       <div>
               <textarea id="text" cols="40" rows="4" name="image_text" placeholder="Dîtes quelque chose à propos de cette image...">
                </textarea>
    	       </div>
    	       <div>
    		         <button type="submit" name="upload">Poster</button>
    	       </div>
        </form>
      </div>  -->
    </br>
    </br>
    </br>
    </br>

    <div id="entree">

        <div id="Capteurs" class="tab">
        <!--<a href="../controleur/admin/capteur_admin.php"><h2>Capteurs</h2></a>-->
            <button name="capteur" id="capteurs">Types de capteurs</button></br>
        </div>




      <div id="Users" class="tab">
        <!--<a href="../controleur/admin/user_admin.php"><h2>Utilisateurs</h2></a>-->
        <button id="voir_util">Voir utilisateurs</button>
      </div>

      <div id="graphe" class="tab">
        <button><a href="../vue/donnees_admin.php">Données</a></button>
      </div>

    </div>




    <!-- Formulaire avec tous les types de capteurs et la possibilité d'en ajouter ou supprimer !-->
    </br>

    <div id="form_capteur">
      <?php All_capteurs($type_capteurs)?>

      </br>
      <div class="ajout_capteur">
        <form name="ajouter_capteur" method="post" action="../modele/ajouter_type_capteur.php">
          <label><h2>Ajouter un nouveau type de capteur</h2></label>
              <p><label>Entrer le type du capteur : </label><input type="text" name="type_capteur" id="type" required></p>
              <p><label>Nom du nouveau capteur : <input type="text" name="Nom_capteur" id="Nom" required></p>
                <p><label>Quelle est l'unité a employer pour votre capteur ?</label> <input type="text" name="AxeX" id="AxeX" required></p>
                <p><label>En fonction de quelle unité ? (temps recommandé) </label><input type="text" name="AxeY" id="AxeY" required></p>
                <p><label>veuillez rentrer une photo pour le capteur</label><input type="hidden" name="size" value="1000000">
                <input type="file" name="image" required>
          </form>
      <div>

              <button type="submit" name="Nouveau_type" id="Nouveau_type">Ajouter ce nouveau type de capteur</button>
      </div>
    </br>
    </div>
  </br>
    <button name="reduire" id="reduire"> Fermer la fenêtre des capteurs</button></br>
        </div>


        </br>
</br></br></br>

<div id="pos_capteur">
  </br></br></br>
    <script>

      var form=document.getElementById('form_capteur');
      var capteurs=document.getElementById('capteurs');
      var span=document.getElementById("reduire");

      capteurs.onclick = function(){
        form.style.display = "flex";

      }
      span.onclick = function(){
        form.style.display= "none";
      }

      window.onclick =  function(event){
        if(event.target == form){
          form.style.display= "none";
        }
      }
    </script>
  </div>



    </br>

    </br>
    <div id="utilisateurs">
      <?php Trouver_users($utilisateurs); ?>
      </br>
      <button id="fermer_util"> Fermer déroulant utilisateurs </button>
      </br>

    </div>


    <script>
      var page_util=document.getElementById('utilisateurs');
      var voir=document.getElementById('voir_util');
      var span2=document.getElementById("fermer_util");

      voir.onclick = function(){
        page_util.style.display = "flex";
      }
      span2.onclick = function(){
        page_util.style.display= "none";
      }

      window.onclick =  function(event){
        if(event.target == form){
          page_util.style.display= "none";
        }
      }
    </script>




    </body>


    </body>

    </html>
