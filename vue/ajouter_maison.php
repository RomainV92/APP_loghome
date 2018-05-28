<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Ajouter une maison</title>
        <link rel='stylesheet' href='../vue/ajouter_maison.css'>
    </head>

    <body>
    <div class="wrapper">
         <div class="modal-content">
        <form action="../modele/ajouter_maison_post.php" method="post">

        <div class="row">
            <div class="col-25">
                <label for="nom">Nom</label>
            </div>

            <div class="col-25">
                <input type="text" name="nom" id="nom" /><br />
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="superficie">Superficie (m²)</label>
            </div>
            <div class="col-10">
                <input type="number" name="superficie" id="superficie" /><br />
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="adresse">Adresse</label>
            </div>
            <div class="col-55">
                <input type="text" name="adresse" id="adresse" /><br />
            </div>
        </div>
        <span class="close">fermer</span>
        <input type="submit"  class= "mylink" value="Ajouter une nouvelle maison" id="mylink" />


        </form>

    </div>
</div>
    </body>

</html>
