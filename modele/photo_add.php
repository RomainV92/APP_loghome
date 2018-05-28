<?php
  // Create database connection



  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text


  	// image file directory
  	$target = "../images/".basename($image);

  	//$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
  	//execute query
  

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }

?>
