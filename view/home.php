<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/css/uikit.min.css" />
    <title><?= $titre ?></title>
</head>

<body class="home">
    <nav>
        <h1>LOGO</h1>
        <ul>
            <li>HOME</li>
            <li>FILMS</li>
        </ul>
    </nav>
    <div class="uk-text-left" uk-grid>
        <div class="uk-width-auto@m">
            <ul>
                <h3>MENU</h3>
                <li><a href="index.php">HOME</a></li>
                <li><a href="index.php?action=listFilms">FILMS</a></li>
                <li><a href="index.php?action=listGenres">GENRES</a></li>
                <li><a href="index.php?action=listRealisateurs">REALISATEURS</a></li>
                <li><a href="index.php?action=listActeurs">ACTEURS</a></li>
                <li><a href="index.php?action=listRoles">ROLES</a></li>
            </ul>
        </div>
        
        <div class="uk-width-1-3@m">
            <h3>Treanding Movie</h3>
            <div>
                <figure>
                    <img src="img/timeCut.webp" alt="image film">
                </figure>
                <figure>
                    <img src="img/Plateforme2.webp" alt="image film">
                </figure>
            </div>
            <h3>Top Rated</h3>
            <div>
                <figure>
                    <img src="img/babyboy.jpg" alt="image film">
                </figure>
                <figure>
                    <img src="img/fast&furious.jpg" alt="image film">
                </figure>
                <figure>
                    <img src="img/l'ombreRebelle.webp" alt="image film">
                </figure>
                <figure>
                    <img src="img/interstellar.jpg" alt="image film">
                </figure> 
            </div>
        </div>

        <div class="uk-width-expand@m">
            <h3>Upcoming Movie</h3>
            <div>
                <figure>
                    <img src="img/braquage.jpg" alt="image film">
                </figure>
                <figure>
                    <img src="img/toutLacher.webp" alt="image film">
                </figure>
            </div>
        </div>
    </div>
      
<?php

$titre = "homepage";
$titre_secondaire = "homepgae";
$contenu = ob_get_clean();
require "view/template.php";