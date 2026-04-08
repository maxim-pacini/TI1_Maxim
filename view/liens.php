<?php
// view/accueil.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liens</title>
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
            <h2>Quelques liens vers nos partenaires</h2>
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
            <div>
                <img src="/img/liens.jpg" alt="">
                <div class="link">
                    <p class="titre-liens">D'autres capitales se sont associées à notre site.</p>
                    <div>
                    <a href="#">Berlin</a>
                    <a href="#">Vienne</a>
                    <a href="#">Paris</a>
                    <a href="#">Madrid</a>
                    <a href="#">Rome</a>
                    <a href="#">Londres</a>
                    </div>
                    <div>
                    <a href="#">Lisbonne</a>
                    <a href="#">Prague</a>
                    <a href="#">Amerstam</a>
                    <a href="#">Copenhague</a>
                    <a href="#">Dublin</a>
                    <a href="#">Athènes</a>
                    </div>
                    <div>
                    <a href="#">Sofia</a>
                    <a href="#">Varsovie</a>
                    <a href="./">helsinki</a>
                    <a href="#">Oslo</a>
                    <a href="#">Budapest</a>
                    <a href="#">Stockholm</a>

                    </div>
                    
                </div>
                
            </div>
        </div>
            
    </main>
    <script src="js/main.js"></script>
</body>
</html>









