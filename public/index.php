<?php
// on vient chargé les dépendances
require_once "../config.php";

if(!isset($_GET['p'])){

    include CHEMIN."/view/accueil.php";
    
}
elseif(in_array($_GET['p'], PAGES)){

    include CHEMIN."/view/".$_GET['p'].".php";
}
else{
    include CHEMIN."/view/erreur404.php";
}