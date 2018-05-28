<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue chez DOMISEP</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../vue/InfosCompte.css" />
  </head>

  <body>
  <?php
    if(isset($_GET['modif']) && !empty($_GET['modif']))
      $modif = $_GET['modif'];
    if($modif=="Mail" OR $modif=="Telephone")
    {
      echo "<p>".$modif." actuel : ".$data[$modif]."</p>";
    }
    else
    {
      echo "<p>Un problème est survenu, veuillez réessayer</p>";
    }
  ?>
  </body>
</html>
