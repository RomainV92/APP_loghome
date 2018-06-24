<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue à la page admninistrateur</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../vue/style_administrateur.css" />
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
            <img src="../images/cadran.png" alt="cadran" />
            <button name="capteur" id="capteurs">Types de capteurs</button></br>
        </div>




      <div id="Users" class="tab">
        <!--<a href="../controleur/admin/user_admin.php"><h2>Utilisateurs</h2></a>-->
        <img src="../images/image_Log.png" alt="user" /></br>
        <button id="voir_util">Voir utilisateurs</button>
      </div>

      <div id="graphe" class="tab">
        <img src="../images/graphe_logo.jpg" alt="user" /></br>
        <input type="button" value="Données" onClick="javascript:document.location.href='../vue/donnees_admin.php'" />
      </div>

    </div>




    <!-- Formulaire avec tous les types de capteurs et la possibilité d'en ajouter ou supprimer !-->
    </br>

    <div id="form_capteur">
      <?php All_capteurs($type_capteurs)?>

      </br>
      <div class="ajout_capteur">
        <form name="ajouter_capteur" method="post" action="../modele/ajouter_type_capteur.php" enctype="multipart/form-data">
          <label><h2>Ajouter un nouveau type de capteur</h2></label>
              <p><label>Entrer le type du capteur : </label><input type="text" name="type_capteur" id="type" required></p>
              <p><label>Nom du nouveau capteur : <input type="text" name="Nom_capteur" id="Nom" required></p>
                <p><label>Quelle est l'unité a employer pour votre capteur ?</label> <input type="text" name="AxeX" id="AxeX" required></p>
                <p><label>En fonction de quelle unité ? (temps recommandé) </label><input type="text" name="AxeY" id="AxeY" required></p>
                <p><label>veuillez rentrer une photo pour le capteur</label><input type="hidden" name="size" value="1000000">
                <input type="file" name="image" required>
                <button type="submit" name="upload" id="Nouveau_type">Ajouter ce nouveau type de capteur</button>
          </form>
      <div>

              <!-- <button type="submit" name="Nouveau_type" id="Nouveau_type">Ajouter ce nouveau type de capteur</button> !-->
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
    <div class="lien_trame">
    <a  href="../vue/trames.php"> Trames </a>
  </div>
    </br>
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
<!--<div id="chartContainer" style="height: 370px; width:100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>-->
</body>
</html>

</br>

</br>

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
</html>
