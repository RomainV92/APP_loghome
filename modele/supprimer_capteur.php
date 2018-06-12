
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

    $id_capteur=$_GET['cible'];
    $id_piece=$_GET['cible2'];

    $bdd ->query('DELETE  FROM capteur WHERE ID =\''.$id_capteur.'\'');
   

  

   header("Location: ../controleur/Page_capteurs.php?cible=$id_piece");