<?php
session_start();
try {
  $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (\Exception $e) {

  die('Erreur : ' . $e->getmessage() );

}
  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text


  	// image file directory
  	$target = "../images/".basename($image);
    $basename=basename($image);;
    $_SESSION['Image_url']=basename($image);
    $update=$bdd->prepare('UPDATE login SET Image_url=:Image_url WHERE ID=:id');
    $update->execute(array(
      'Image_url' => $basename,
      'id' => $_SESSION['id_user'],
    ));

  	//$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
  	//execute query


  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
header('location:../index.php?cible=InfosCompte');
