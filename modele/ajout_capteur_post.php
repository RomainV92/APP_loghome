<?php
session_start();
    // Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$nom=$_POST['namesensor'];
$type=$_POST['sensortype'];
$reference=$_POST['reference'];
$id_maison=$_GET['cible'];

//$id_user=$_SESSION['id_user'];
$ajout = $bdd->prepare('INSERT INTO capteur(ID,ID_maison,Num_Serie,Valeur,Nom,Type) VALUES(:ID,:ID_maison,:Num_Serie,:Valeur,:Nom,:Type)');
// Requête d'insertion,
$ajout->execute(array(
  'ID' => $_SESSION['id_user'],
  'ID_maison' => $id_maison,
  'Num_Serie' => $reference,
  'Valeur' => ' ',
  'Nom' => $nom,
  'Type' => $type,
));


header("Location: ../controleur/Page_capteurs.php?cible=$id_maison");
?>
