<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>DOMISEP</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../vue/style.css" />
  </head>

  <body>
  <div class="wrapper">
    <p>Bienvenue chez vous, <?php echo $_SESSION['id_user']; ?></p>
    <a class="button" href="../index.php">Retour menu</a>
  </div>
  </body>
</html>
