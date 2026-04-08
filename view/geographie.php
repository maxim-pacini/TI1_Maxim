<?php
// view/accueil.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Géographie</title>
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
            <h2>Parfait mélange entre environnement urbain et naturel</h2>
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
                <img src="/img/geographie.png" alt="">
                <p>
                Construite sur une presqu'île entourée de quelque 330 îles, la ville est fortement caractérisée par la présence de l'eau. La remontée des terres due au phénomène d'isostasie fait que certains lieux autrefois occupés par la mer sont aujourd'hui urbanisés, comme l'ancienne baie du quartier de Kluuvi.
                </p>
                <p>
                La commune d'Helsinki s'étale sur des baies, des péninsules et des îles plus ou moins grandes. Le secteur du centre-ville occupe une péninsule au sud de la commune, ce qui est rarement mentionné par son nom réel "Vironniemi". La densité de la population dans certaines parties du centre-ville d'Helsinki est très élevée, atteignant jusqu'à 16 494 habitants au kilomètre carré dans le quartier de Kallio, mais la densité de population dans l'ensemble d'Helsinki est de 3 050 habitants au kilomètre carré.    
                </p>
                <p>
                Elle est classée comme très peu peuplée en comparaison à d'autres capitales européennes comme Paris, Moscou, Londres ou encore Berlin. Une grande partie d'Helsinki se situe en dehors du centre-ville et se compose de quartiers d'après-guerre séparés les uns des autres par des îlots de forêts.
                </p>
                <p>
                La commune comprend une superficie totale de 715,55 km2, dont seulement 213 km2 de superficie terrestre.   
                </p>
                <p>
                Le climat d'Helsinki est de type continental tempéré par le Gulf Stream et la proximité de la mer. Les températures hivernales y sont relativement élevées compte tenu de la latitude, avec des moyennes d'environ −5 °C en janvier et février. La moyenne des maximales de juin à août oscille quant à elle entre 19 et 21 °C. Les records de température enregistrés sont de 33,2 °C le 28 juillet 20199 et de -35 °C le 10 janvier 1987.
                </p>
                <p>
                En 2012, la commune d'Helsinki comptait 602 200 habitants (10,8 % de la population de la Finlande), la région capitale (avec Espoo, Vantaa et Kauniainen) compte 1 050 819 d’habitants (19,2 % de la population finlandaise) et le Grand Helsinki, regroupant treize communes compte 1 344 757 d’habitants. La population d'Helsinki est essentiellement de langue finnoise (84,3 %) avec une minorité suédophone importante (6,1 %)
                </p>
                <p>
                La ville a la plus forte population immigrée de la Finlande en termes tant absolus que relatifs. Il y a plus de 130 nationalités résidentes dans la ville d'Helsinki. Les communautés les plus importantes sont les Russes, les Estoniens, les Suédois, mais aussi un nombre important de Somaliens, de Serbes, de Chinois, d'Indiens, d'Irakiens et d'Allemands.
                </p>
            </div>
        </div>
            
    </main>
    <script src="js/main.js"></script>
</body>
</html>









