<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (\Exception $e) {

  die('Erreur : ' . $e->getmessage() );

}

function Ajout($bdd){

    
  $password = $_POST['Password'];
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

   $pseudo = $_POST['Pseudo'];
    
   $requete = $bdd->query("SELECT count(*) as nb FROM login WHERE Pseudo = '".$pseudo."'");
   $resultat = $requete->fetch();         // donne le nombre de personne ayant le même pseudo  qui celui envoyé dans le formulaire
  
   if (isset($resultat['nb']) && $resultat['nb'] == 0) 
         /* Résultat du comptage = 0 pour ce pseudo, on peut donc l'enregistrer */
         {
    $ajout = $bdd->prepare('INSERT INTO login(Nom,Prenom,Pseudo,Password,Telephone,Mail,Question,Answer,Image_url) VALUES(:Nom,:Prenom,:Pseudo,:Password,:Telephone,:Mail,:Question,:Answer,:Image_url)');
    $ajout->execute(array(
      'Nom' => $_POST['Nom'],
      'Prenom' => $_POST['Prenom'],
      'Pseudo' => $_POST['Pseudo'],
      'Password' => $hashed_password,
      'Telephone' => $_POST['Telephone'],
      'Mail' => $_POST['Mail'],
      'Question' => $_POST['Question'],
      'Answer' => $_POST['Answer'],
      'Image_url'=>$_POST['Image_url'],
    ));
    return 1;
  }
  else {
    return 0;
  }

  }
