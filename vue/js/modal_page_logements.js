
          // Get the modal
          var modal = document.getElementById('myModal');
          // Get the button that opens the modal
          var btn = document.getElementById("myBtn");
          // Get the <span> element that closes the modal
          var span = document.getElementsByClassName("close")[0];
          // When the user clicks the button, open the modal
          btn.onclick = function() {
              modal.style.display = "block";
          }
          // When the user clicks on <span> (x), close the modal
          span.onclick = function() {
              modal.style.display = "none";
          }

          
          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
              if (event.target == modal) {
                  modal.style.display = "none";
              }
              if (event.target == msg)
              {
                  msg.style.display = "none";
              }
              if (event.target == myModal_user)
              {
                myModal_user.style.display = "none";
              }
          }
        


          //Bouton supprimer
          var retour = document.getElementById('retour');
         

          retour.onclick = function()
          {
            msg.style.display = "none";
          }


          function valiDelete(id)
          {
            var id_maison = id,
                link="../modele/supprimer_maison.php?cible=";
        

            var valider = document.getElementById('valider');
            valider.href=link+id_maison;


            var msg = document.getElementById('msg');
            msg.style.display = "block";

          }
        

          //ajout utilisateur

          function ajouter_utilisateur(id)
          
          {
    
                   var Modal_user = document.getElementById('myModal_user');
                   Modal_user.style.display = "block";

                   var span = document.getElementsByClassName("close")[1];

                   var myForm_user = document.getElementById('myForm_user'),
                   id_maison = id,
                   link="../modele/ajouter_utilisateur_post.php?cible=";
                   myForm_user.action=link+id_maison;

              
                   // When the user clicks on <span> (x), close the modal
                   span.onclick = function() {
                   Modal_user.style.display = "none";
                   }

                   

                   
                 

          }