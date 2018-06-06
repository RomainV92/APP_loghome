
<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue chez DOMISEP</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../vue/InfosCompte.css" />
  </head>
  <?php
  if(isset($data['Image_url'])){
    $image=$data['Image_url'];}
  else{
    $image='image_Log.png';
    }
   ?>

  <body>
    <div class="wrapper">
      <img src="../images/<?php echo $image ?>" class="avatar">
      <div class="infobox">
        <table>
      <?php
        $infos = array('Prénom', 'Nom', 'Mail', 'Téléphone');
        foreach($infos as $element)
        {
          $sansAccent = preg_replace("#é+#", "e", $element);
          echo "<tr><td class=\"gauche\">".$element." :</td><td class=\"centre\">".$data[$sansAccent]."</td>";
          if($element=="Mail" OR $element=="Téléphone")
            echo "<td class=\"droite\"><a class=\"bouton\" href=\"../index.php?cible=changementInfos&info=".$sansAccent."\">Modifier</a></td></tr>";
          else
            echo "<td class=\"droite\">        </td></tr>";
        }
      ?>
        </table>

        <a href="../index.php?cible=changementMDP">Modifier le mot de passe</a>
        <button id="myBtn">Changer la Photo de profil</button>
        <!-- The Modal -->
        <div id="myModal" class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <div id="content">
              <form method="POST" action="../modele/photo_add.php" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">
                <div>
                  <input type="file" name="image">
                </div>
                <div>
                  <button type="submit" name="upload">POST</button>
                </div>
              </form>
            </div>
          </div>


      </div>
    </div>
    <script>
    // Get the modal
    var modal = document.getElementById('myModal');
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>

  </body>


</html>
