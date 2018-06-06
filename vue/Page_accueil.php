
<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue chez DOMISEP</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../vue/style.css" />
  </head>

  <body  class="wrapper">


      <div class="slideshow-container">

      <div class="mySlides fade">

          <h2>Qui sommes nous?</h2>
          <p>
            DOMISEP vous apportera la solution à tous vos tracas du quotidien :
          plus besoin d'ouvrir vos volets, ni même d'allumer/éteindre la lumière,
          tout peut maintenant être automatisé grâce à notre savoir-faire.</br></br>
          Nous travaillons en étroite collaboration avec Log.Home afin d'être en
          mesure de répondre à vos attentes. Essayer nos solutions, c'est les adopter!
          vous allez adorer!
          </p>
          <img class='img_1' src='../images/Connected.jpg' alt='connecté'>

      </div>

      <div class="mySlides fade">

          <h2>Notre système</h2>
          <p> Composé d'un microcontroleur à la pointe de
            la technologie, ainsi que de capteurs d'une qualité inégalée, notre système
            vous permettra d'automatiser certaines parties de votre maison
            comme jamais auparavant. <br /><br />
                En effet, ce système, capable de réagir à un son,
            peut être activé ou désactivé très simplement.
            Vous aurez ainsi la possibilité d'allumer des lumière ou faire tourner
            des moteurs. Sa facilité d'installation vous libérera l'esprit,
            branchez le et il sera prêt à être utilisé.</p>
          <img class='img_1' src='../images/Connected.jpg' alt='connecté'>
      </div>

      <div class="mySlides fade">
          <h2>Contrôler vos appareils</h2>
          <p> Une configuration de base est installée sur notre système,
            mais si vous souhaitez personnaliser votre appareil,
            notre panneau de contrôle, aussi bien destiné aux personnes
            peu expérimentées qu'aux spécialistes de l'informatique,
            vous permettra de modifier vos préférences très simplement.<br /><br />
            Vous pourrez programmer des heures auxquelles lancer
            des taches pour le CeMAC pour synchroniser votre réveil avec
            l'allumage des lumières ou encore la mise en route du moteur
            au moment où vous vous brossez les dents par exemple.</p>
            <img class='img_1' src='../images/Connected.jpg' alt='connecté'>
      </div>
      <br>
      <!-- The dots/circles -->
      <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>








<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

</script>

  </body>
</html>
