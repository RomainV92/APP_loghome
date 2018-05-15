<!DOCTYPE html>
<html>
    <head>
        <title>Maison</title>
        <meta charset= "utf-8">
        <link rel='stylesheet' href='1.css'>
    </head>
    
    <body>
        <header >
            <!--Titre principal-->
            <h1>Maison</h1>
            <img class= 'logo' src="../Logo.png" alt="logo">
                           
        </header>
        

        
        <!--Menu-->
        <nav >
            <?php include("menu.php"); ?> 
        </nav>
        <div class="maison">
        <div class="chambre_1">
            <h2>Chambre 1</h2>
            <ul>
                <li ><a href="#">Capteur 1</a></li> 
                <li ><a href="#">Capteur 2</a> </li>
                <li ><a href="#">Capteur 3</a></li>
                <li ><a href="add_sensor">Ajouter un capteur</a></li>   
                
            </ul>
        </div>

        <div class="chambre_2">
            <h2>Chambre 2</h2>
            <ul>
               <li ><a href="#">Capteur 1</a></li> 
                <li ><a href="#">Capteur 2</a> </li>
                <li ><a href="#">Capteur 3</a></li> 
                <li ><a href="add_sensor">Ajouter un capteur</a></li>   
                
            </ul>
        </div>

        <div class="chambre_3">
            <h2>Chambre 3</h2>
            <ul>
                <li ><a href="#">Capteur 1</a></li> 
                <li ><a href="#">Capteur 2</a> </li>
                <li ><a href="#">Capteur 3</a></li>    
                <li ><a href="add_sensor">Ajouter un capteur</a></li>
                
            </ul>
        </div>

         <div class="salon">
           <h2>Salon</h2>
            <ul>
                <li ><a href="#">Capteur 1</a></li> 
                <li ><a href="#">Capteur 2</a> </li>
                <li ><a href="#">Capteur 3</a></li>   
                <li ><a href="add_sensor">Ajouter un capteur</a></li>
                
            </ul>
        </div> 

        <div class="cuisine">
           <h2>Cuisine</h2>
            <ul>
                <li ><a href="#">Capteur 1</a></li> 
                <li ><a href="#">Capteur 2</a> </li>
                <li ><a href="#">Capteur 3</a></li> 
                <li ><a href="add_sensor">Ajouter un capteur</a></li>
            </ul>
        </div>

        <div class="salle_de_bain">
           <h2>Salle de bain</h2>
            <ul>
                <li ><a href="#">Capteur 1</a></li> 
                <li ><a href="#">Capteur 2</a> </li>
                <li ><a href="#">Capteur 3</a></li> 
                <li ><a href="add_sensor">Ajouter un capteur</a></li>
            </ul>
        </div> 

         <div class=ajouter_une_piece>
           <h2><a href="ajouter_pièce">Ajouter une pièce</a></h2>
        </div>     

        </div>
        <!--Footer-->
        <footer ">
            <?php include("footer.php"); ?> 
        </footer>
    </body>
</html>