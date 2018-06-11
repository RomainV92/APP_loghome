<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Insert</title>
</head>
<body>
    <label>Value</label>
    <input type="text" id="value">
    <button type="submit" id="button">SAVE</button>
    <script>
        $(document).ready(function(){
            $("#button").click(function(){
                var value=$("#value").val();
                $.ajax({
                    url:'../modele/modif_capteur.php',
                    method:'POST',
                    data:{
                        value:value,
                    },
                   success:function(data){
                       alert("ajout avec succés");
                   }
                });
            });
        });
    </script>
</body>
</html>
<?php
$ch = curl_init();
curl_setopt(
$ch,
CURLOPT_URL,
"http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=011C");
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);
curl_close($ch);

$data_tab = str_split($data,33);
echo "Tabular Data:<br />";
for($i=0, $size=count($data_tab); $i<$size; $i++){
echo "Trame $i:";
$trame = $data_tab[$i];
list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
echo("$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br />");
}
?>
