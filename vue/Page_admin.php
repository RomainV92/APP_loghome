<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue à la page admninistrateur</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../vue/style_admin.css" />
  </head>


  <body>



      <div id="content">
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
      </div>
    </br>
    </br>
    </br>
    </br>

    <div id="entree">

        <div id="Capteurs" class="tab">
        <a href="../controleur/admin/capteur_admin.php"><h2>Capteurs</h2></a>
      </div>

      <div id="Users" class="tab">
        <a href="../controleur/admin/user_admin.php"><h2>Utilisateurs</h2></a>
      </div>

      <div id="graphe" class="tab">
        <a href="../controleur/admin/graphes_admin.php"><h2>Données</h2></a>
      </div>

    </div>


    <h1>En gros tout ce qu'il y a en dessous devrait être dans des autres pages </br>sur lesquelles on serait dirigés grace au boutons ci-dessus</h1>
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

    <!-- Script pour affichage graphique
    <!DOCTYPE HTML>
    <html lang = "fr">
    <head>
    <title>tracer fonction</title>
    <meta charset = "utf-8" />
    </head> -->
    <body>
    <h3> Consommation </h3>
    <canvas id = "schema" height="300" width="300" style="border:1px solid">
     Votre navigateur ne supporte pas la balise canvas
    </canvas>

    <input type="range" id="parametre" min="0.1" max="1" step="0.01" value="0.4">
    <script>
    var zone_dessin = document.getElementById("schema");
    var graphe= zone_dessin.getContext("2d");
     var intervalle=setInterval(rafraichissement_ecran,30);
    function rafraichissement_ecran() {
      graphe.clearRect(0, 0,300,300);
      var compteur=0;
      a=document.getElementById("parametre");
      graphe.beginPath();
        graphe.moveTo(0,f(0));
        while(compteur<300) {
        graphe.lineTo(compteur,150-f(compteur));
        compteur=(compteur+0.05);
      }
      graphe.stroke();
    }
    function f(x) {
      var y=50*Math.sin(Math.pow(x,a.value));
      return (y);
    }
    </script>

    <!-- Exemple de generation aléatoire de graphique !-->

    <?php



    $dataPoints = array();
    $y = 40;
    for($i = 0; $i < 1000; $i++){
      $y += rand(0, 10) - 5;
      array_push($dataPoints, array("x" => $i, "y" => $y));
    }

    ?>

    <!DOCTYPE HTML>
    <html>
    <head>
    <script>
    window.onload = function () {

    var dps = []; // dataPoints
    var chart = new CanvasJS.Chart("chartContainer", {
      title :{
        text: "Dynamic Data"
      },
      axisY: {
        includeZero: false
      },
      data: [{
        type: "line",
        dataPoints: dps
      }]
    });

    var xVal = 0;
    var yVal = 100;
    var updateInterval = 1000;
    var dataLength = 20; // number of dataPoints visible at any point

    var updateChart = function (count) {

      count = count || 1;

      for (var j = 0; j < count; j++) {
        yVal = yVal +  Math.round(5 + Math.random() *(-5-5));
        dps.push({
          x: xVal,
          y: yVal
        });
        xVal++;
      }

      if (dps.length > dataLength) {
        dps.shift();
      }

      chart.render();
    };

    updateChart(dataLength);
    setInterval(function(){updateChart()}, updateInterval);

    }
    </script>
    </head>
    <body>
    <div id="chartContainer" style="height: 370px; width:100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </body>
    </html>

    </br>
    <button id="voir_util">Voir utilisateurs</button>
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
    page_util.style.display = "block";
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
