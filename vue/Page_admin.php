<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue à la page admninistrateur</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../vue/style_admin.css" />
  </head>


  <body>



      <div id="content">
        <h3>Ajouter une image</h3>
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
        	          placeholder="Dîtes quelque chose à propos de cette image...">
                </textarea>
    	       </div>
    	       <div>
    		         <button type="submit" name="upload">Poster</button>
    	       </div>
        </form>
      </div>
    </br>
    </br>
    </br>
    </br>

    <div id="entree">

        <div id="Capteurs" class="tab">
        <a href="../controleur/admin/capteur_admin.php"><h2>Capteurs</h2></a>
      </div>

      <div id="Users" class="tab">
        <a href="../controleur/admin/user_admin.php"><h2>Utilisateurs</h2></a>
      </div>

      <div id="graphe" class="tab">
        <a href="../controleur/admin/graphes_admin.php"><h2>Données</h2></a>
      </div>

    </div>

  </body>
</html>
