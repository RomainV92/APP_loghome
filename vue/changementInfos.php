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
  ?>
      <form method="post" action="../controleur/appliquerModifsInfos.php">
        <p>
        <?php
          if($modif=="Mail")
          {
            echo "Veuillez entrer votre nouvelle adresse mail :";
          }
          else if($modif=="Telephone")
          {
            echo "Veuillez entrer votre nouveau numéro de téléphone :";
          }
        ?>
        </p>
        <input id="chgmt" type="text" name="chgmt" required />
        <input type="submit" value="Enregistrer" />
      </form>
  <?php
    }
    else
    {
      echo "<p>Un problème est survenu, veuillez réessayer</p>";
      // Ajouter lien retour page InfosCompte
    }
  ?>
  </body>
</html>
