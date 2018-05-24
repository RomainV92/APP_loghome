<?php
session_start();
$Error_message='';
$Direction='"controleur/Redirection_creation.php"';
/*$to = "tissotm@hotmail.com";
$subject = "Confirmation Compte LOG.HOME";
$txt = "Votre compte a bien été creé";
$headers = "From: tissotm@hotmail.com" . "\r\n" ;
mail($to,$subject,$txt,$headers);*/
include('../modele/bdd_access.php');
$bdd=appel_bdd();

include('../modele/bdd_access_maison.php');
include('../vue/frequent/menu.php');
include('../vue/Ajout.php');
include('../vue/frequent/footer.php');


/*$reponse = $bdd->Prepare('SELECT ID from login Where Nom=?');
$reponse ->execute(array('Mael'));
echo '<ul>';
while ($variable = $reponse->fetch())
{
  echo '<li>' . $variable['ID'] .'</li>';

}
echo '</ul>';
$reponse ->closeCursor();
*/


?>
