
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

    $id_maison=$_GET['cible'];

    $bdd ->query('DELETE pieces, capteur
                    FROM pieces
                    LEFT JOIN capteur
                    ON pieces.ID = capteur.ID_piece
                    WHERE pieces.ID_maison =\''.$id_maison.'\'');
   

  
    $bdd->query('DELETE FROM maison WHERE ID = \''.$id_maison.'\'');
   // Requête d'insertion,

   header('Location: ../index.php?cible=Page_logement');
