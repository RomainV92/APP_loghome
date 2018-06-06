<?php
session_start();
include('../modele/Recherche_capteurs.php');

include('../modele/bdd_access.php');
$bdd=appel_bdd();
$type_capteur=Trouver_types_capteurs($bdd);

include('../modele/bdd_access_maison.php');
include('../modele/redirection_si_deco.php');

include('../vue/frequent/menu.php');
include('../vue/Capteurs.php');
include('../vue/frequent/footer.php');

function bdd_capteurs($capteurs){
  while($Dif_capteurs=$capteurs->fetch()){?>
    <div class="salon">
    <ul>
        <table class='informations'>
          <tr>
            <td class='label1'> Nom : </td>
            <td> <?php echo htmlspecialchars($Dif_capteurs['Nom']);?> </td>
          </tr>
          <tr>
            <td class='label2'> Type :</td>
            <td> <?php echo htmlspecialchars($Dif_capteurs['Type']);?> </td>
          <tr>
          <tr>
            <td class='label3'> Référence :</td>
            <td> <?php echo htmlspecialchars($Dif_capteurs['Num_Serie']);?> </td>
          <tr>
        </table>
        <!-- Script de création d'un graphe pour le capteur généré -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load('current', {'packages':['line']});
              google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

              var data = new google.visualization.DataTable();
              data.addColumn('number', 'Day');
              data.addColumn('number', '<?php echo $Dif_capteurs['Nom'] ?>');

              data.addRows([
                [1,  37.8],
                [2,  30.9],
                [3,  25.4],
                [4,  11.7],
                [5,  11.9],
                [6,   8.8],
                [7,   7.6],
                [8,  12.3],
                [9,  16.9],
                [10, 12.8],
                [11,  5.3],
                [12,  6.6],
                [13,  4.8],
                [14,  4.2]
              ]);

              var options = {
                chart: {
                  title: 'Valeur du capteur <?php echo $Dif_capteurs['Nom']?>',

                },

                width: 500,
                height: 300,
                axisTitlesPosition : 'none',
                chartArea:{left:0,top:0,right:0,width:'100%',height:'80%'},
                legend: {position: 'none'},
                title: {position: '50%'},
                axes: {
                  x: {
                    0: {side: 'top'},

                  }

                }
              };

              var chart = new google.charts.Line(document.getElementById('line_top_x<?php echo $Dif_capteurs['ID']?>'));

              chart.draw(data, google.charts.Line.convertOptions(options));
            }
      function actualiser_chart(){

      if (data.getNumberOfRows() > 5) {
        data.removeRow(Math.floor(Math.random() * data.getNumberOfRows()));
      }
      // Generating a random x, y pair and inserting it so rows are sorted.
      var x = Math.floor(Math.random() * 1000);
      var y = Math.floor(Math.random() * 100);
      var where = 0;
      while (where < data.getNumberOfRows() && parseInt(data.getValue(where, 0)) < x) {
        where++;
      }
      data.insertRows(where, [[x.toString(), y]]);
      drawChart();
    }
Drawchart();
chart.setInterval(actualiser_chart(),300);

          </script>
          <div class="graphes" id="line_top_x<?php echo $Dif_capteurs['ID']?>"></div>



    </ul>
   </div><?php
  }
}

function Choix_senseurs($type_capteur){
  while($Dif_capteurs=$type_capteur->fetch()){
    echo '<option ="'.$Dif_capteurs['Nom'].'">'.$Dif_capteurs['Nom'].'</option>';
  }
}
