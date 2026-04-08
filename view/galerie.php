<?php
// view/accueil.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histoire</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <?php include "inc/entete.php";?>
    </header>
    <main>
       
       <nav class="nav-bar">
            <?php include "inc/menu.php";?>
       </nav>
       <div>
            <h2>Galerie d'images</h2>
            <div class="menu">
                <button id="btn" onclick="toggle()">
                    <span></span>
                    <span></span>
                    <span></span>
                    
                </button>
                <p>MENU</p>
            </div>
            <div id="nav2">
                <a href="./" >Accueil</a>
                <a href="./?p=geographie">Géographie</a>
                <a href="./?p=histoire">Histoire</a>
                <a href="./?p=culture">Culture</a>
                <a href="./?p=galerie">Galerie</a>
                <a href="./?p=contact">Contact</a>
                <a href="./?p=liens">Liens</a>
            </div>
            <div class="galerie">
                 <figure>
                    <img src="img/480px_Mittsommernacht-in-helsinki.jpg" alt="">
                    <figcaption>Mittsommernacht in helsinki</figcaption>
                </figure>
                <figure>
                    <img src="img/480px_Finnish_National_Theatre.jpg" alt="">
                    <figcaption>Finnish National Theatre</figcaption>
                </figure>
                <figure>
                    <img src="img/480px_Lutheran_Cathedral_and_the_statue.jpg" alt="">
                    <figcaption>Lutheran Cathedral and the statue</figcaption>
                </figure>
                <figure>
                    <img src="img/480px_Marine_Helsinki.jpg" alt="">
                    <figcaption>Marine Helsinki</figcaption>
                </figure>
                <figure>
                    <img src="img/480px_Ateneum.jpg" alt="">
                    <figcaption>Ateneum</figcaption>
                </figure>
                

                <figure>
                    <img src="img/480px_Uspenski_Cathedral_Helsinki.jpg" alt="">
                    <figcaption>Uspenski Cathedral Helsinki</figcaption>
                </figure>
            </div>
            
            
            
            
            
            
        </div>
            
    </main>
    <script src="js/main.js"></script>
</body>
</html>









