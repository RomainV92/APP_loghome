<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>DOMISEP</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../vue/style.css" />
  </head>

  <body>

    <p>Bienvenue chez vous, <?php echo($_SESSION['user']); ?></p>
    <a class="button" href="../index.php">Retour menu</a>
  </body>
</html>
