<!DOCTYPE html>
<html>
    <head>
        <title>Pièces</title>
        <meta charset= "utf-8">
        <link rel='stylesheet' href='../vue/Pieces.css'>

    </head>

    <body>
    <div class="wrapper">
        <div class="maison" id=conteneur>
          <?php $nom_de_la_maison = $bdd->query('SELECT ID_user,nom FROM maison WHERE  ID=\''.$_GET['cible'].'\'' );
                $nom_maison = $nom_de_la_maison->fetch(); ?>

          <div class='conteneur_nom_maison'>
                <p class='nom_maison'><?php echo 'Vous êtes actuellement dans l\'habitation : '.$nom_maison['nom']; ?></P>
          </div>

          <?php
           bdd_maisons($pieces,$bdd); 
          if($_SESSION['id_user']==$nom_maison['ID_user']){?>


          <!-- Script pour popup ajout maison -->
          <meta name="viewport" content="width=device-width, initial-scale=1">


          <!-- Trigger/Open The Modal -->
          <button id="myBtn" class="ajouter_une_piece"><p>Ajouter une pièce</p><img id="plus_rouge" src="../images/plus_rouge.png" alt="plus_rouge" /></button>
          <?php }?>
          <!-- The Modal -->
          <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">

              <form action="../modele/ajouter_piece_post.php?cible=<?php echo $_GET['cible']?>" method="post" id='myForm'>

                <div class="row">
                  <div class="col-25">
                    <label for="nom">Nom</label>
                  </div>
                  <div class="col-55">
                    <input type="text" name="nom" id="nom" required/>
                    <span class="tooltip">Le nom ne peut pas faire moins de 2 caractères.</span>
<br />
                  </div>
                </div>

                <div class="row">
                  <div class="col-25">
                    <label for="superficie">Superficie (m²)</label>
                  </div>
                  <div class="col-55">
                    <input type="number" name="superficie" id="superficie" required/>
                    <span class="tooltip">La superficie ne peut pas contenir de lettres.</span>
<br />
                  </div>
                </div>


              <input type="submit" value="Ajouter une nouvelle piece" id="button_submit"/>


              </form>
              <span class="close">&times;</span>
            </div>

          </div>
        </div>
    </div>

    
    <div id="msg" class="Modal">
            <div class="modal-content-2">
              <p>
                Etes-vous sûr de vouloir supprimer cette pièce? <br />
                Cette action est irréversible.</p>
                <a id ='valider' class="confirmer" >Confirmer</a>
                <button id="retour" class="confirmer">Retour</button>
              
            </div>
          </div>

          <script type="text/javascript" src='../vue/js/validation_formulaire_pieces.js'> </script>
          <script type="text/javascript" src='../vue/js/modal_page_pieces.js'> </script>

          
      </body>
    </html>
