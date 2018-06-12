
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

    $id_piece=$_GET['cible'];
    $id_maison=$_GET['cible2'];

    $bdd ->query('DELETE pieces, capteur
                    FROM pieces
                    LEFT JOIN capteur
                    ON pieces.ID = capteur.ID_piece
                    WHERE pieces.ID =\''.$id_piece.'\'');
   

  

   header("Location: ../controleur/Page_pieces.php?cible=$id_maison");