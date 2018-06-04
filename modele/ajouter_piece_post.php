

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


   $ajout = $bdd->prepare('INSERT INTO pieces(ID_maison,Nom,Superficie) VALUES(:ID_maison,:Nom,:Superficie)');
   // Requête d'insertion,
   $ajout->execute(array(
     'ID_maison' => $id_maison,
     'Nom' => $nom,
     'Superficie' => $superficie,

   ));



   header("Location: ../controleur/Page_pieces.php?cible=$id_maison");
   
