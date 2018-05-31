

<?php
session_start();
echo $_POST['ID_new_user'];
echo $_POST['ID_maison'];

    // Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$ID_house=$_POST['ID_maison'];
$ID_user=$_POST['ID_new_user'];
//$id_user=$_SESSION['id_user'];
$ajout_util = $bdd->prepare('INSERT INTO util_maisons(ID_maison,ID_utilisateur) VALUES(:ID_maison,:ID_utilisateur)');
// Requête d'insertion,
$ajout_util->execute(array(
 'ID_maison'=>$ID_house,
 'ID_utilisateur'=>$ID_user,
));


header('Location: ../index.php?cible=Page_logement');
