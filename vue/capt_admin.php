<!DOCTYPE html>
<html>
  <head>
    <title>Types de capteurs</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../vue/style_capt.css" />
  </head>

  <body>
    <!-- Formulaire avec tous les types de capteurs et le pouvoir d'en ajouter ou supprimer !-->
    </br>
    <button name="capteur" id="capteurs">Types de capteurs</button></br>
    <div id="form_capteur">
    <?php All_capteurs($type_capteurs)?>

    </br>
    <div class="ajout_capteur">
      <form name="ajouter_capteur" method="post" action="../modele/ajouter_type_capteur.php">
        <label>Ajouter un nouveau type de capteur</label>
            <p><label>Entrer le type du capteur: </label><input type="text" name="type_capteur" id="type" required></p>
            <p><label>Nom du nouveau capteur: <input type="text" name="Nom_capteur" id="Nom" required></p>
            <p><label>Quelle est l'unité a employer pour votre capteur?</label> <input type="text" name="AxeX" id="AxeX" required></p>
            <p><label>En fonction de quelle unité ? (temps recommandé) </label><input type="text" name="AxeY" id="AxeY" required></p>
            <p><label>veuillez rentrer une photo pour le capteur</label><input type="hidden" name="size" value="1000000">
                <input type="file" name="image" required>
      </form>
      <div>

              <button type="submit" name="Nouveau_type" id="Nouveau_type">Ajouter ce nouveau type de capteur</button>
      </div>
    </div>

    <button name="reduire" id="reduire"> Fermer la fenêtre des capteurs</button></br>
        </div>



        </br>



    <script>
    var form=document.getElementById('form_capteur');
    var capteurs=document.getElementById('capteurs');
    var span=document.getElementById("reduire");

    capteurs.onclick = function(){
    form.style.display = "block";
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
  </body>
</html>
