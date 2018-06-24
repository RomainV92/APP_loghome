<!DOCTYPE HTML>
<html>
  <head>
    <title>Données</title>
    <meta charset = "utf-8" />
    <link rel="stylesheet" href="../vue/donnees.css" />
  </head>

<?php
include('../vue/frequent/entete.php');
 ?>
  <body>

</div>

<!-- Exemple de generation aléatoire de graphique !-->

<?php



$dataPoints = array();
$y = 40;
for($i = 0; $i < 1000; $i++){
  $y += rand(0, 10) - 5;
  array_push($dataPoints, array("x" => $i, "y" => $y));
}

?>


<head>
<script>
window.onload = function () {

var dps = []; // dataPoints
var chart = new CanvasJS.Chart("chartContainer", {
  title :{
    text: "Exemple consommation watt/s"
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
</br>
</br>

<div class="footer">
  <h3><a href="../controleur/Page_administrateur.php">Accueil admninistrateur</a></h3>
</div>
</body>
</html>
