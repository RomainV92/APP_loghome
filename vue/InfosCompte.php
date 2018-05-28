
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
        $infos = array('Prenom', 'Nom', 'Mail', 'Telephone');
        foreach($infos as $element)
        {
          //Mise accent dans liste, mais ajout regex pour les enlever pour appel bdd
          echo "<tr><td class=\"gauche\">".$element." :</td><td class=\"droite\">".$data[$element]."</td></tr>";
        }
      ?>
        </table>
      </div>
    </div>
  </body>

</html>
