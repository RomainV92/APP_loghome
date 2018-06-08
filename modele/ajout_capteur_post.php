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
$id_piece=$_GET['cible'];

//$id_user=$_SESSION['id_user'];
$ajout = $bdd->prepare('INSERT INTO capteur(ID_piece,Num_Serie,Valeur,Nom,Type,Status) VALUES(:ID_piece,:Num_Serie,:Valeur,:Nom,:Type,:Status)');
// Requête d'insertion,
$ajout->execute(array(
  'ID_piece' => $id_piece,
  'Num_Serie' => $reference,
  'Valeur' => 0,
  'Nom' => $nom,
  'Type' => $type,
  'Status'=>0,
));


header("Location: ../controleur/Page_capteurs.php?cible=$id_piece");
