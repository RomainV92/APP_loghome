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
          }


          
          var retour = document.getElementById('retour');
         

          retour.onclick = function()
          {
            msg.style.display = "none";
          }


          function valiDelete(id,id2)
          {
            var id_piece = id,
                id_maison = id2,
                link="../modele/supprimer_piece.php?cible=",
                link2="&cible2=";

            var valider = document.getElementById('valider');
            valider.href=link+id_piece+link2+id_maison;


            var msg = document.getElementById('msg');
            msg.style.display = "block";

          }
