

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

   $nom=$_POST['Nom_user'];
   $prenom=$_POST['Prenom_user'];
   $pseudo=$_POST['Pseudo_user'];
   $id_maison=$_GET['cible'];
   
   $requete = $bdd->query("SELECT ID FROM login WHERE Pseudo = '".$pseudo."' AND Prenom ='".$prenom."' AND Nom ='".$nom."' ");
   $resultat = $requete->fetch();         
   $id_user=$resultat['ID'];
   if (isset($resultat['ID']) && $resultat['ID'] != 0 && $resultat['ID'] != $_SESSION['id_user']) 
    
         {


            $ajout = $bdd->prepare('INSERT INTO utilisateurs_maison(ID_user,ID_maison) VALUES(:ID_user,:ID_maison)');
            // Requête d'insertion,
            $ajout->execute(array(
                'ID_user' => $resultat['ID'],
                'ID_maison' => $id_maison,
                
            ));


            header('Location: ../index.php?cible=Page_logement');
         
         }
    else {
        header('Location: ../index.php?cible=AjoutUtilisateur_Erreur');
    }