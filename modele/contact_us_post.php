
    <?php
    //session_start();
        // Connexion à la base de données
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

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
        echo 'Votre message a bien été envoyé ';
    }
    else // Non envoyé
    {
        echo "Votre message n'a pas pu être envoyé";
    }
    
    



   ?>