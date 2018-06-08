
<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue à la page admninistrateur</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../vue/style_admin.css" />
  </head>


  <body>
    <h1>Administrateur</h1><img src="../images/Logo" alt="logo" class="logo">
  <div id="content">
    <h3>Ajouter une image</h3>
    <form method="POST" action="../modele/photo_add.php" enctype="multipart/form-data">
    	<input type="hidden" name="size" value="1000000">
    	<div>
    	  <input type="file" name="image">
    	</div>
    	<div>
        <textarea
        	id="text"
        	cols="40"
        	rows="4"
        	name="image_text"
        	placeholder="Say something about this image..."></textarea>
    	</div>
    	<div>
    		<button type="submit" name="upload">Poster</button>
    	</div>
    </form>
  </div>

  <!-- Formulaire avec tous les types de capteurs et le pouvoir d'en ajouter ou supprimer !-->
</br>
  <button name="capteur" id="capteurs">Types de capteurs</button></br>
<div id="form_capteur">
  <?php All_capteurs($type_capteurs)?>
<<<<<<< HEAD
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
=======
  <form name="ajouter_capteur" method="post" action="../modele/ajouter_type_capteur.php" enctype="multipart/form-data">
    <label>Ajouter un nouveau type de capteur</label>
      <p><label>Entrer le numero type du capteur: </label><input type="text" name="type_capteur" id="type" required></p>
      <p><label>Nom de votre nouveau capteur: <input type="text" name="Nom_capteur" id="Nom" required></p>
      <p><label>Quelle est l'unité a employé pour votre capteur?</label> <input type="text" name="AxeX" id="AxeX" required></p>
      <p><label>En fonction de quelle unité? (nous recommandons le temps) </label><input type="text" name="AxeY" id="AxeY" required></p>
      <p><label>veuillez rentrer une photo pour le capteur</label><input type="hidden" name="size" value="1000000">
              <input type="file" name="image" required>
                <button type="submit" name="upload" id="Nouveau_type">Ajouter nouveau type de capteur</button>
          </form>
          <div>


          </div>
        </form>
        <button name="reduire" id="reduire"> Fermer fenetre des capteurs</button>
>>>>>>> 4011d57f341005d6b0b1b7cba8417918dcc584f6
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
  <a id="delete-button" href="../index.php?cible=deconnexion">Disconnect</a>
</br>
</br>
  <button id="voir_util">Voir utilisateurs</button>
</br>
<div id="utilisateurs">
<?php Trouver_users($utilisateurs); ?>
</br>
<button id="fermer_util"> Fermer deroulant utilisateurs </button>
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
</html>
