
    <?php
    //session_start();
    // Connexion à la base de données
    /*
    include('../modele/bdd_access.php');
    $bdd=appel_bdd();

   $problem_type=$_POST['problem_type'];
   $email=$_POST['email'];
   $message=$_POST['message'];
   //$id_user=$_SESSION['id_user'];
   $ajout = $bdd->prepare('INSERT INTO message_contact(problem_type,email,message) VALUES(:problem_type,:email,:message)');
   // Requête d'insertion,
   $ajout->execute(array(

     'problem_type' => $problem_type,
     'email' => $email,
     'message' => $message,

   ));
   */

    $subject=$_POST['problem_type'];
    $message=$_POST['message'];
    $headers = 'From:'. $_POST['email'] . "\r\n" .
     'Reply-To:'.$_POST['email'] . "\r\n" .
     'X-Mailer: PHP/' . phpversion();
    $to = 'loghome.g11c@gmail.com';

    // Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
    $message = wordwrap($message, 70, "\r\n");


    if (mail($to, $subject, $message, $headers)) // Envoi du message
    {
        header('location:../index.php?cible=Page_contact_us');
        $subject="Confirmation de réception";
        $message="Nous avons bien reçu votre requête.\r\nNous allons faire au mieux pour résoudre votre problème.\r\n\r\nCordialement,\r\nL'équipe de Log.home";
        $to = $_POST['email'];
        mail($to, $subject, $message);
    }
    else // Non envoyé
    {
        header('location:../index.php?cible=erreur');
    }
