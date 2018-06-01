<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (\Exception $e) {

  die('Erreur : ' . $e->getmessage() );

}

function Ajout($bdd){
$password = $_POST['Password'];


$hashed_password = password_hash($password, PASSWORD_DEFAULT);
if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['Mail']) && preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $_POST['Telephone']))
{
$ajout = $bdd->prepare('INSERT INTO login(Nom,Prenom,Pseudo,Password,Telephone,Mail,Question,Answer) VALUES(:Nom,:Prenom,:Pseudo,:Password,:Telephone,:Mail,:Question,:Answer)');
$ajout->execute(array(
  'Nom' => $_POST['Nom'],
  'Prenom' => $_POST['Prenom'],
  'Pseudo' => $_POST['Pseudo'],
  'Password' => $hashed_password,
  'Telephone' => $_POST['Telephone'],
  'Mail' => $_POST['Mail'],
  'Question' => $_POST['Question'],
  'Answer' => $_POST['Answer'],
));
return 1;
}
return 0;
}
