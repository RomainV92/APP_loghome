

var shows = document.querySelectorAll('.show'), 
    showsLength = shows.length;
   
$(document).ready(function(){
    
    var  
    id_capteur = shows[0].id,
    link = "../modele/data_capteurs.php?cible=";
   
    
    setInterval(function(){
      for (var i = 0; i < showsLength; i++) {
        id_capteur = shows[i].id;
        $('#'+id_capteur).load(link+id_capteur);
       
      } 
    }, 1000);
    
} );



