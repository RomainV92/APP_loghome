

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
   
   $requete = $bdd->query("SELECT SUM(Superficie) AS surface_utilisee FROM pieces WHERE ID_maison = '".$id_maison."'");
   $requete2 = $bdd->query("SELECT superficie FROM maison WHERE ID = '".$id_maison."'");
   $resultat = $requete->fetch();         // donne la surface utilisée dans la maison
   $resultat2 = $requete2->fetch();         // donne la superficie de la maison
   
   $surface_utilisee =$resultat['surface_utilisee'];

   if (is_null($surface_utilisee)){
    $surface_utilisee=0;
   }

   if (($surface_utilisee+$superficie) <= $resultat2['superficie'] ) 
         /* Résultat du comptage = 0 pour ce pseudo, on peut donc l'enregistrer */
         {
   $ajout = $bdd->prepare('INSERT INTO pieces(ID_maison,Nom,Superficie) VALUES(:ID_maison,:Nom,:Superficie)');
   // Requête d'insertion,
   $ajout->execute(array(
     'ID_maison' => $id_maison,
     'Nom' => $nom,
     'Superficie' => $superficie,

   ));



   header("Location: ../controleur/Page_pieces.php?cible=$id_maison");
   
    }
    else{
        header("Location: ../controleur/AjoutPiece_Erreur.php?cible=$id_maison");
    }