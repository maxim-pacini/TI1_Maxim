<?php
// view/accueil.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="top">

    <header>
        <?php include "inc/entete.php";?>
    </header>
    <main>
       <nav class="nav-bar">
            <?php include "inc/menu.php";?>
       </nav>
       <div>
            <h2>Pour nous contacter</h2>
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
                <img src="/img/contacts.jpg" alt="">
            </div>
            <h3 class="titre-contact">Pour laisser un commentaire ou pour obtenir un renseignement complémentaire, remplissez le formulaire ci-dessous :</h3>
            <div class="formulaire">
                <div class="champ">
                    <label for="">Nom : </label>
                    <input type="text">
                </div>
                
                <div class="champ">
                    <label for="">Prenom : </label>
                    <input type="text">
                </div>

                <div class="champ">
                    <label for="">Ville : </label>
                    <input type="text">
                </div>

                <div class="champ">
                    <label for="">E-Mail : </label>
                    <input type="text">
                </div>
                <div class="champ">
                    <label for="" >Votre message : </label>
                    <textarea name="a" id=""></textarea>
                </div>
                <button class="send">Envoyer votre message</button>
            </div>
            
        </div>
            
    </main>
    <script src="js/main.js"></script>
</body>
</html>









