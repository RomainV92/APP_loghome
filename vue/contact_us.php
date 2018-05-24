<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Nous contacter</title>
        <link rel='stylesheet' href='../vue/contact_us.css'>
    </head>

    <body>

         <!--Formulaire-->

        <form action="../modele/contact_us_post.php" method="post">
        <div class="grid">
                    <label for="type">Type de problème :</label>
                
                    <select name="problem_type">
                        <option value="type1">Type 1</option>
                        <option value="type2">Type 2</option>
                        <option value="type3">Type 3</option>
                        <option value="type4">Type 4</option>
                    </select>
                
            

            
                
                    <label for="email">Votre adresse e-mail :</label>
               
                
                    <input type="email" placeholder="mon_email@example.com" name="email" id="email" />
                    <p>Parlez nous de votre problème :</p>
                    <textarea name="message" rows="8" cols="50"></textarea>
                    
            
                    
               
            
        </div>
        
        <div class="row"> <input type="submit" value="Envoyer" /></div>
        


        </form>

     

    </body>
    
</html>
