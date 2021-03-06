<?php

function appel_bdd()
{
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');
    return $bdd;
  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }
}

function Ajout_Type_capteurs_bdd($bdd,$Type,$Nom,$AxeX,$AxeY,$Image_url){
  $ajout= $bdd->prepare('INSERT INTO capteur_type(type,Nom,AxeX,AxeY,Image_url) VALUES(:Type,:Nom,:AxeX,:AxeY,:Image_url) ');
  $ajout -> execute(array(
    'Type'=>$Type,
    'Nom'=>$Nom,
    'AxeX'=>$AxeX,
    'AxeY'=>$AxeY,
    'Image_url'=>$Image_url,
));
}

function Verif_type_capteurs($bdd,$type)
{
  $table = $bdd -> prepare('SELECT type FROM capteur_type');
  $table -> execute(array());
  while($e= $table -> fetch()){
    if($e['type']==$type){
      return 1;
    }};
  return 0;

}

function Trouver_types_capteurs($bdd){
  $type_capteur = $bdd->prepare('SELECT * FROM capteur_type');
  $type_capteur -> execute(array());
  return $type_capteur;
}
function Trouver_image_url_capteurs($bdd,$type){
  $Image_url_capteur = $bdd->prepare('SELECT Image_url FROM capteur_type WHERE Nom=\''.$type.'\'' );
  $Image_url_capteur -> execute(array());
  return $Image_url_capteur;
}

function Recup_user($bdd,$pseudo)
{
  $utilisateurs = $bdd->prepare('SELECT * FROM login WHERE Pseudo=:pseudo');
  $utilisateurs -> execute(array('pseudo'=>$pseudo));

  return $utilisateurs;
}



function All_login($bdd)
{
  $utilisateurs = $bdd->prepare('SELECT * FROM login');
  $utilisateurs -> execute(array());
  return $utilisateurs;
}




function info_user($bdd, $id)
{
  $table = $bdd -> prepare('SELECT * FROM login WHERE ID=:id');
  $table -> execute(array('id' => $id));
  return ($table -> fetch());
}



function majInfosUser($bdd, $id, $champModif, $modif)
{
  if($champModif=="Mail")
  {
    $update = $bdd->prepare('UPDATE login SET Mail=:modif WHERE ID=:user');
  }
  else if($champModif=="Telephone")
  {
    $update = $bdd->prepare('UPDATE login SET Telephone=:modif WHERE ID=:user');
  }
  $update->execute(array(
      'modif'=>$modif,
      'user'=>$id,
  ));
}




function validation_identifiants($bdd, $login, $mdp)
{
  $table = $bdd -> prepare('SELECT ID, Password, Nom, Image_url,Mail FROM login WHERE Pseudo=:nom');
  $table -> execute(array('nom' => $login));
  $data = $table -> fetch();
  if(password_verify($mdp, $data['Password']))
  {
    $_SESSION['id_user']=$data['ID'];
    $_SESSION['Nom']=$data['Nom'];
    $_SESSION['Image_url']=$data['Image_url'];
    $_SESSION['Mail']=$data['Mail'];
    $table->closeCursor();
		return $data;
  }
  $table->closeCursor();
  return '0';
}


function changement_mot_de_passe($Password,$ID,$bdd)
{
  $new_password =password_hash($Password, PASSWORD_DEFAULT);
  $update = $bdd->prepare('UPDATE login SET Password=:password WHERE ID=:ID');
  $update->execute(array(
    'password'=>$new_password,
    'ID'=>$ID,
));
  
  
}