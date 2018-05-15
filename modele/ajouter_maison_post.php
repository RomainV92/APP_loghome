

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
   //$id_user=$_SESSION['id_user'];
   $ajout = $bdd->prepare('INSERT INTO maison(ID_user,nom,superficie,adresse,Street,Postal) VALUES(:ID_user,:nom,:superficie,:adresse,:Street,:Postal)');
   // Requête d'insertion,
   $ajout->execute(array(
     'ID_user' => $_SESSION['id_user'],
     'nom' => $nom,
     'superficie' => $superficie,
     'adresse' => $adresse,
     'Street' => 'hey',
     'Postal' => '75015',
   ));


   header('Location: ../index.php?cible=Page_logement');
   ?>
