<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}
$ID=$_POST['capteur_id'];
$switch=$_POST['switch_capteur'];
if($switch==="0"){
  $value="1";
  $ajout= $bdd->prepare('UPDATE capteur SET Status=:Status WHERE ID=:id');
  $ajout -> execute(array(
    'Status'=> $value,
    'id' => $ID,
  ));
}
else{
  $value="0";
  $ajout= $bdd->prepare('UPDATE capteur SET Status=:Status WHERE ID=:id');
  $ajout -> execute(array(
    'Status'=> $value,
    'id' => $ID,
  ));
}
}
?>
