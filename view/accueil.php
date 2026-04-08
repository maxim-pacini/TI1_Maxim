<?php
// view/accueil.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
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
            <h2>Bienvenue sur notre site consacré a Helsinki</h2>
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
                <img src="/img/armoiries.png" alt="">
                <p>
                Helsinki  est la capitale et la plus grande ville de la Finlande avec 642 045 habitants dans la commune et 1 456 619 dans le Grand Helsinki. Helsinki est la capitale la plus septentrionale du monde après Reykjavik, capitale de l'Islande. La ville a la plus forte population immigrée de tout le pays. Il y a plus de 130 nationalités résidant dans la ville d'Helsinki. Elle s'étale sur une presqu'île entourée d'un grand nombre d'îles et est fortement caractérisée par la présence de l'eau. Helsinki est un port marchand ouvert sur le golfe de Finlande.</p>
                <p>
                Ses habitants sont appelés les Helsinkiens ; en finnois helsinkiläiset, en suédois helsingforsare.
                La ville s'appelait à l'origine Helsingfors ([hɛlsiŋ'fɔʂ], qui reste aujourd'hui encore le nom officiel en suédois. Helsingfors proviendrait du nom d'une paroisse voisine Helsinge (qui aurait donné le nom finnois Helsinki) et de fors, rapides en suédois (lesdits rapides auraient traversé le village d'origine). Une autre version attribue le nom aux immigrants suédois venus de la province de Hälsingland.</p>

                <p class="titre-acc">Dans ce site, vous trouverez diverses information concernant:</p>
                <a href="./?p=geographie">Une brève présentation de Helsinki sur son rôle en Finlande et dans le monde</a>
                <br>
                <a href="./?p=histoire">Un rappel historique, de sa fondation à aujourd'hui</a>
                <br>
                <a href="./?p=culture">Un tour d'horizon en matière d'art et culture</a>
                <br>
                <a href="./?p=galerie">Une galerie de photographies</a>
                <br>
                <a href="./?p=contact">Un formulaire pour nous contacter</a>
                <br>
                <a href="./?p=liens">Des liens vers des sites partenaires</a>

                <p class="source">Sources : Wikipédia - Ville d'Helsinki</p>
            </div>
        </div>
            
    </main>
    <script src="js/main.js"></script>
</body>
</html>









