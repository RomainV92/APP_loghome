
<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue chez DOMISEP</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../vue/InfosCompte.css" />
  </head>

  <body>
    <p>
    <?php
      echo "Prénom : ". $data['Prenom'] . "<br />Nom : " . $data['Nom']
      . "<br />Adresse mail : " . $data['Mail'] . "<br />Téléphone : " . $data['Telephone'];
    ?>
    </p>
  </body>

</html>
