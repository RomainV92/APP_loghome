

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
   $id_maison=$_GET['cible'];
   //$id_user=$_SESSION['id_user'];
   $ajout = $bdd->prepare('INSERT INTO pieces(ID_user,ID_maison,Nom,Superficie) VALUES(:ID_user,:ID_maison,:nom,:superficie)');
   // Requête d'insertion,
   $ajout->execute(array(
    'ID_user' => $_SESSION['id_user'],
    'ID_maison' => $id_maison,
    'Nom' => $nom,
    'Superficie' => $superficie,
     
   ));


   header('Location: ../index.php?cible=Page_pieces');
   ?>
