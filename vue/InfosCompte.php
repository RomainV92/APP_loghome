
<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue chez DOMISEP</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../vue/InfosCompte.css" />
  </head>

  <body>
    <div class="wrapper">
      <img src="../images/image_Log.png" class="avatar">
      <div class="infobox">
        <table>
      <?php
        $infos = array('Prénom', 'Nom', 'Mail', 'Téléphone');
        foreach($infos as $element)
        {
          echo "<tr><td class=\"gauche\">".$element." :</td><td class=\"centre\">".$data[preg_replace("#é+#", "e", $element)]."</td>";
          if($element=="Mail" OR $element=="Téléphone")
            echo "<td class=\"droite\"><a class=\"bouton\" href=\"../index.php?cible=changementInfos&info=".$element."\">Modifier</a></td></tr>";
          else
            echo "<td class=\"droite\">        </td></tr>";
        }
      ?>
        </table>
        <a>Modifier le mot de passe</a>

      </div>
    </div>
  </body>

</html>
