<?php
include('../modele/bdd_access.php');

$bdd=appel_bdd();
$ver=Verif_type_capteurs($bdd,$_POST['type_capteur']);
if($ver===0){
  if (isset($_POST['image'])) {
    echo "hello";
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text


    // image file directory
    $target = "../images/".basename($image);
    $basename=basename($image);


    //$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
    //execute query


    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";

    }

  Ajout_Type_capteurs_bdd($bdd,$_POST['type_capteur'],$_POST['Nom_capteur'],$_POST['AxeX'],$_POST['AxeY'],$basename);
  header('location:../controleur/Page_administrateur.php');
}
}
  else{
    echo "Ce type de capteur est deja pris veuillez rentrer un nouveau type de capteur";
    echo "<a href='../controleur/Page_administrateur.php'>retour vers la page administrateur</a>";
  }
