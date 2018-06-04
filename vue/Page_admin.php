
<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue à la page admninistrateur</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../vue/style_admin.css" />
  </head>


  <body>
  <div id="content">
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
    		<button type="submit" name="upload">POST</button>
    	</div>
    </form>
  </div>

  <!-- Formulaire avec tous les types de capteurs et le pouvoir d'en ajouter ou supprimer !-->

  <button name="capteur" id="capteurs">Types:Capteurs</button>
<div id="form_capteur">
  <?php All_capteurs($type_capteurs)?>
  <form name="ajouter_capteur" method="post" action="../modele/ajouter_type_capteur.php">
    <label>Ajouter un nouveau type de capteur</label>
      <p><label>Entrer le numero type du capteur: </label><input type="text" name="type_capteur" id="type"></p>
      <p><label>Nom de votre nouveau capteur: <input type="text" name="Nom_capteur" id="Nom"></p>
      <p><label>Quelle est l'unité a employé pour votre capteur?</label> <input type="text" name="AxeX" id="AxeX"></p>
      <p><label>En fonction de quelle unité? (nous recommandons le temps) </label><input type="text" name="AxeY" id="AxeY"></p>
      <div>
        <button type="submit" name="Nouveau_type" id="Nouveau_type">Ajouter nouveau type de capteur</button>
      </div>
    </form>
    <button name="reduire" id="reduire"> Fermer fenetre des capteurs</button>
  </div>

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

  <a id="delete-button" href="../index.php?cible=deconnexion">Disconnect</a>

  <button id="voir_util">Voir utilisateurs</button>
<div id="utilisateurs">
<?php Trouver_users($utilisateurs); ?>
<button id="fermer_util"> Fermer deroulant utilisateurs </button>

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
