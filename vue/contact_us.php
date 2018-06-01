<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Nous contacter</title>
        <link rel='stylesheet' href='../vue/contact_us.css'>
    </head>

    <body>
    <div class="wrapper">
         <!--Formulaire-->

        <form action="../modele/contact_us_post.php" method="post">
        <div class="grid">
                    <label for="problem_type">Type de problème :</label>

                    <select name="problem_type">
                        <option value="type1">Problème de capteur</option>
                        <option value="type2">Problème d'installation</option>
                        <option value="type3">Problème à propos du site</option>
                        <option value="type4">Autre problème</option>
                    </select>





                    <label for="email">Votre adresse e-mail :</label>


                    <input type="email" placeholder="mon_email@example.com" name="email" id="email" />
                    <p>Parlez nous de votre problème :</p>
                    <textarea name="message" rows="8" cols="50"></textarea>





        </div>

        <div class="row"> <input type="submit" value="Envoyer" /></div>



        </form>



    </div>
    </body>

</html>
