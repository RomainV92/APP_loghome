<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (\Exception $e) {

  die('Erreur : ' . $e->getmessage() );

}

function Ajout($bdd){
  
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
   
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
