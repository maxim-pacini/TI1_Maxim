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
       
       <nav>
            <?php include "inc/menu.php";?>
       </nav>
       <div>
            <h2>Bienvenue sur notre site consacré a Helsinki</h2>
            <div class="menu">
                <button id="btn" onclick="toggle()"></button>
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
                <img src="/img/histoire.jpg" alt="">
                <p>
                Helsinki fut fondé sous le nom d'Helsingfors, en 1550, par Gustave Vasa, roi de Suède dans le but de concurrencer Reval (actuellement Tallinn, la capitale d’Estonie), alors ville hanséatique florissante. Le premier village d'Helsinki se situait alors dans le quartier encore appelé Vanhakaupunki (qui signifie en français : Vieille ville), une plaque commémorative indiquant l'emplacement de la première église et du premier cimetière. L'urbanisation récente se traduit en particulier par l'importance des noms de lieux et de quartiers liés à des particularités naturelles et géographiques, comme Koskela (les rapides), Katajanokka (Presqu'île du Genévrier), etc.

                La ville fut incendiée et occupée par les Russes en guerre contre les Suédois pendant la Grande guerre du Nord entre 1713 et 1721, et de nouveau en 1742. Fortifier la ville devint donc une priorité pour se défendre des occupations. La forteresse maritime de Sveaborg (actuellement Suomenlinna en finnois) est construite entre 1748 et 1798, avec l'appui du roi de France Louis XV.

                Après la défaite de la Suède dans sa guerre contre la Russie de 1808-1809, la Finlande est annexée à l'Empire russe. Helsingfors devint le 8 avril 1812 alors la capitale d'un grand-duché autonome, à la place de Turku, jugée trop proche géographiquement et sentimentalement de la Suède. La ville connaît dès lors un développement considérable, le centre-ville est reconstruit selon les plans de Carl Ludwig Engel, l'université de Turku est déplacée vers la nouvelle capitale et deviendra l'université d'Helsinki.

                Pendant la guerre de Crimée, la forteresse de Sveaborg est en partie détruite par une expédition franco-anglaise.

                Contrairement à Tampere, Helsingfors a subi relativement peu de dégâts pendant la guerre civile finlandaise. Après la victoire des blancs, de nombreux ex-rouges ont été mis dans des camps de prisonniers, le plus grand camp avait quelque 13 300 prisonniers et était situé sur l'île forteresse de Sveaborg. Bien que la guerre civile ait laissé une cicatrice considérable dans la société, le niveau de vie dans le pays et la ville a commencé à s'améliorer dans la décennie suivante. Des architectes renommés, comme Eliel Saarinen ont créé des plans pour la ville, mais ils n'ont jamais été pleinement réalisés.

                En 1917, à l'indépendance de la Finlande, Helsinki devient le nouveau nom officiel de la ville qui est aussi capitale de la nouvelle république.

                Durant la guerre d'Hiver puis durant la guerre de Continuation, la ville subit plusieurs bombardements de la part de l'aviation soviétique mais la défense antiaérienne se révèle efficace et les dégâts relativement limités.

                En 1975, la Conférence sur la sécurité et la coopération en Europe (CSCE) adopta à Helsinki l’Acte final de son premier sommet.

                La place du Sénat (Senaatintori) au centre de la ville témoigne encore de ces liens avec la Russie avec une statue du tsar Alexandre II devant la cathédrale et la ressemblance des bâtiments avec la ville de Saint-Pétersbourg et ainsi la ville fut souvent utilisée pour des tournages de cinéma, à l'époque de la guerre froide, afin de représenter l'ancienne capitale impériale, notamment dans des James Bond, du fait de cette ressemblance.

                </p>
            </div>
        </div>
            
    </main>
    <script src="js/main.js"></script>
</body>
</html>









