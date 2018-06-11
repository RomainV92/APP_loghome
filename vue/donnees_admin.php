<!DOCTYPE HTML>
<html>
  <head>
    <title>Données</title>
    <meta charset = "utf-8" />
    <link rel="stylesheet" href="../vue/donnees.css" />
  </head>

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
