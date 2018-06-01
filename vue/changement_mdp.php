<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Change password</title>
    <link rel="stylesheet" type="text/css" href="../vue/pageChangementMDP/changement_mdp.css">
</head>
<body>
<?php require('../vue/frequent/menu.php'); ?>
<h1>CHANGE PASSWORD</h1>

<div id="edit">
    <form action="changementMDP.php" method="post">
        <p>Ancien mot de passe</p>
        <input name="ancienPass" type="password" placeholder="Entrez votre ancien mdp">
        <p>Nouveau mot de passe</p>
        <input name="nouveauPass" type="password" placeholder="Entrez votre nouveau mdp" minlength=8 maxlength=24>
        <p>Confirmez le nouveau mot de passe</p>
        <input name="nouveauPass2" type="password" placeholder="Confirmez votre nouveau mdp" minlength=8 maxlength=24>
        <input class="submit" type="submit">
        <?php if(isset($message)){echo $message;} ?>
    </form>
</div>
<?php require('../vue/frequent/footer.php'); ?>
</body>
</html>
