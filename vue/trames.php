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
$size=count($data_tab);
$trametest=$data_tab[$size-3];
list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
sscanf($trametest,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
echo $x;
echo "------------------------------";
for($i=0, $size=count($data_tab); $i<$size; $i++){
echo "Trame $i:";

$trame = $data_tab[$i];
list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
echo("$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br />");
}


function post_data(){
  $datapost= curl_init();
  curl_setopt($datapost,CURLOPT_URL,"http://projets-tomcat.isep.fr:8080/appService?ACTION=COMMAND&TEAM=011C&TRAME=1011CA150100339B");
  curl_setopt($datapost,CURLOPT_TIMEOUT,40000);
  curl_setopt($datapost,CURLOPT_POST,TRUE);
  curl_setopt($datapost,CURLOPT_RETURNTRANSFER,TRUE);
  curl_setopt($datapost,CURLOPT_HEADER,FALSE);
  curl_exec ($datapost);
  curl_close ($datapost);

}
post_data();



/*function post_data($data){
    $datapost = curl_init();  // ouvre la session curl
    $headers = array("Expect:"); // Format du header, mais ici ca n'est pas necessaire il me semble
    curl_setopt($datapost, CURLOPT_URL, "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=011C"); //url auquel on poste la trame
    curl_setopt($datapost, CURLOPT_TIMEOUT, 40000); //Timestamp: temps que mets la requete avant d'arreter
    curl_setopt($datapost, CURLOPT_HEADER, FALSE); // pas de header
    //curl_setopt($datapost, CURLOPT_HTTPHEADER, $headers); // type de header, et quel formattage utilisé
    //curl_setopt($datapost, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // No idea
    //curl_setopt($datapost, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($datapost, CURLOPT_POST, TRUE); // Type de trame, celle-ci va etre postée
    curl_setopt($datapost, CURLOPT_POSTFIELDS, $data); // quelles données vont ëtre envoyés au site
    ob_start(); //Creer les données tampon de sortie
    curl_exec ($datapost); // execute le transfert
    ob_end_clean(); // Détruit les données du tampon de sortie et éteint la temporisation de sortie
    curl_close ($datapost); // ferme la session curl
    unset($datapost); //détruit la variable detapost
}*/
?>
