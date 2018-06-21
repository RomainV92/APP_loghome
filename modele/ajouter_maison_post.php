

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

   $nom=$_POST['nom'];
   $superficie=$_POST['superficie'];
   $adresse=$_POST['adresse'];
   $rue=$_POST['Street'];
   $Postal=$_POST['Postal'];
   $City=$_POST['City'];
   $type_maison=$_POST['type_maison'];
   //$id_user=$_SESSION['id_user'];
   $ajout = $bdd->prepare('INSERT INTO maison(ID_user,nom,superficie,adresse,Street,Postal,City,type_maison) VALUES(:ID_user,:nom,:superficie,:adresse,:Street,:Postal,:City,:type_maison)');
   // Requête d'insertion,
   $ajout->execute(array(
     'ID_user' => $_SESSION['id_user'],
     'nom' => $nom,
     'superficie' => $superficie,
     'adresse' => $adresse,
     'Street' => $rue,
     'Postal' => $Postal,
     'City'   => $City,
     'type_maison' => $type_maison,
   ));


   header('Location: ../index.php?cible=Page_logement');
