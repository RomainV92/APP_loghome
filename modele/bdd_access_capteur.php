<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

<?php
/*function afficher_capteur($nom)
{

}*/
$reponse = $bdd->query('SELECT ID, Num_Serie, Nom, Type FROM capteur ORDER BY ID DESC LIMIT 0, 10');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Capteur</strong> : <?php echo $donnees['Nom']; ?><br />
    ID capteur :<?php echo $donnees['ID']; ?>
    Référence : <?php echo $donnees['Num_Serie']; ?></br>
    Type de Capteur : <?php echo $donnees['Type']; ?><br />
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

$nom=$_POST['namesensor'];
$type=$_POST['sensortype'];
$reference=$_POST['reference'];

//$id_user=$_SESSION['id_user'];
$ajout = $bdd->prepare('INSERT INTO capteur(ID,ID_maison,Num_Serie,Valeur,Nom,Type) VALUES(:ID,:ID_maison,:Num_Serie,:Valeur,:SNom,:Type)');
// Requête d'insertion,
$ajout->execute(array(
  'ID' => $_SESSION['id_user'],
  'ID_maison' => 4,
  'Num_Serie' => $reference,
  'Valeur' => 5,
  'Nom' => $nom,
  'Type' => $type,
));


header('Location: ../index.php?cible=Page_capteurs');
?>

?>
