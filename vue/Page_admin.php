
<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue à la page admninistrateur</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../vue/style_admin.css" />
  </head>


  <body>
  <div id="content">
    <form method="POST" action="../modele/photo_add.php" enctype="multipart/form-data">
    	<input type="hidden" name="size" value="1000000">
    	<div>
    	  <input type="file" name="image">
    	</div>
    	<div>
        <textarea
        	id="text"
        	cols="40"
        	rows="4"
        	name="image_text"
        	placeholder="Say something about this image..."></textarea>
    	</div>
    	<div>
    		<button type="submit" name="upload">POST</button>
    	</div>
    </form>
  </div>




  <a id="delete-button" href="../index.php?cible=deconnexion">Disconnect</a>

<?php Trouver_users($utilisateurs); ?>


</body>
</html>
