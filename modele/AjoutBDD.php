<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (\Exception $e) {

  die('Erreur : ' . $e->getmessage() );

}
function Ajout($bdd){
if(strpos($_POST['Mail'], '@')==true && strpos($_POST['Mail'], '.')==true && Ctype_alpha($_POST['Telephone'])==false)
{
$ajout = $bdd->prepare('INSERT INTO login(Nom,Prenom,Pseudo,Password,Telephone,Mail) VALUES(:Nom,:Prenom,:Pseudo,:Password,:Telephone,:Mail)');
$ajout->execute(array(
  'Nom' => $_POST['Nom'],
  'Prenom' => $_POST['Prenom'],
  'Pseudo' => $_POST['Pseudo'],
  'Password' => $_POST['Password'],
  'Telephone' => $_POST['Telephone'],
  'Mail' => $_POST['Mail'],
));
return 1;
}
return 0;
}
?>