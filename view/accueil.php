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
       <?php include "inc/menu.php";?>
       <nav>
            <li><a href="./" >Accueil</a></li>
            <li><a href="./?p=geographie">Géographie</a></li>
            <li><a href="./?p=histoire">Histoire</a></li>
            <li><a href="./?p=culture">Culture</a></li>
            <li><a href="./?p=galerie">Galerie</a></li>
            <li><a href="./?p=contact">Contact</a></li>
            <li><a href="./?p=liens">Liens</a></li>
       </nav>
       <div class="content">
            <h2>Bienvenue sur notre site consacré a Helsinki</h2>
            <div>
                <img src="/img/armoiries.png" alt="">
                <p>
                Helsinki  est la capitale et la plus grande ville de la Finlande avec 642 045 habitants dans la commune et 1 456 619 dans le Grand Helsinki. Helsinki est la capitale la plus septentrionale du monde après Reykjavik, capitale de l'Islande. La ville a la plus forte population immigrée de tout le pays. Il y a plus de 130 nationalités résidant dans la ville d'Helsinki. Elle s'étale sur une presqu'île entourée d'un grand nombre d'îles et est fortement caractérisée par la présence de l'eau. Helsinki est un port marchand ouvert sur le golfe de Finlande.

                Ses habitants sont appelés les Helsinkiens ; en finnois helsinkiläiset, en suédois helsingforsare.
                La ville s'appelait à l'origine Helsingfors ([hɛlsiŋ'fɔʂ], qui reste aujourd'hui encore le nom officiel en suédois. Helsingfors proviendrait du nom d'une paroisse voisine Helsinge (qui aurait donné le nom finnois Helsinki) et de fors, rapides en suédois (lesdits rapides auraient traversé le village d'origine). Une autre version attribue le nom aux immigrants suédois venus de la province de Hälsingland.</p>
            </div>
        </div>
            
    </main>
</body>
</html>