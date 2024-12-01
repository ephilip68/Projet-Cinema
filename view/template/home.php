<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/css/uikit.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title><?= $titre ?></title>
</head>

<body class="page">
    <div class="uk-text-left" uk-grid>
        <div class="uk-width-auto@m" id="navMenu">
            <div class="uk-width-1-2@s uk-width-2-5@m">
                <h3>MENU</h3>
                <ul class="uk-nav uk-nav-default" id="listNav">
                    <li class="listContent"><a href="index.php"><i class="fa-solid fa-house"></i></a>HOME</li>
                    <li class="listContent"><a href="index.php?action=listFilms"><i class="fa-solid fa-video"></i></a>FILMS</li>
                    <li class="listContent"><a href="index.php?action=listRealisateurs"><i class="fa-solid fa-users"></i></a>REALISATEURS</li>
                    <li class="listContent"><a href="index.php?action=listGenres"><i class="fa-solid fa-ticket"></i></a>GENRES</li>
                    <li class="listContent"><a href="index.php?action=listActeurs"><i class="fa-solid fa-users"></i></a>ACTEURS</li>
                    <li class="listContent"><a href="index.php?action=listRoles"><i class="fa-solid fa-users"></i></a>ROLES</li>
                    <li class="divider"></li>
                    <li class="listContent2"><a href="#"><i class="fa-solid fa-gear"></i></a>Setting</li>
                    <li class="listContent2"><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>Search</li>
                    <li class="listContent2"><a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>Exit</li>
                </ul>
            </div>
        </div>
        
        <div class="uk-width-1-3@m" id="navList">
            <div class="title">
                <h3>Treanding Movie</h3>
                <img src="img/fire.png" alt="">
            </div>
            <div class="treanding">
                <div class="treandingtFigure mySlides">
                    <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
                    <figure class="imgPosition">
                        <img src="img/timeCut.webp" alt="image film">
                    </figure>
                    <div class="treandingFilm">
                        <h4>Time Cut</h4>
                        <span>30/10/2024 | 1h 30min</span>
                        <p>Sans le vouloir, une ado de 2024 remonte le temps jusqu'en 2003, quelques jours avant le meurtre de sa sœur par un tueur masqué. Peut-elle changer le passé sans détruire l'avenir?</p>
                        <div class="treandingGenre">
                            <article class="genre1">
                                <span>Epouvente-Horreur</span>
                            </article>
                            <article class="genre2">
                                <span >Thriller</span>
                            </article> 
                        </div>
                        <div class="treandingBtn">
                            <article class="btn1">                                
                                <a href=""><button class="btn-1">Trailler</button></a>
                            </article>
                            <article class="btn2">
                                <a href=""><button class="btn-2">Wacth Movie</button></a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="treandingtFigure2 mySlides">
                <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
                <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
                <div class="treanding">
                    <figure class="imgPosition">
                        <img src="img/Plateforme2.webp" alt="image film">
                    </figure>
                    <div class="treandingFilm">
                        <h4>La Plateforme 2</h4>
                        <span>04/10/2024 | 1h 39min</span>
                        <p>Pensez-vous qu’on puisse faire régner l’ordre dans l’enfer de la Plateforme ? Et si c’est le cas, qui peut s’en charger ?</p>
                        <div class="treandingGenre">
                            <article class="genre1">
                                <span>Epouvente-Horreur</span>
                            </article>
                            <article class="genre3">
                                <span >Science Fiction</span>
                            </article> 
                        </div>
                        <div class="treandingBtn">
                            <article class="btn1">                                
                                <a href=""><button class="btn-1">Trailler</button></a>
                            </article>
                            <article class="btn2">
                                <a href=""><button class="btn-2">Wacth Movie</button></a>
                            </article>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="treandingtFigure3 mySlides">
                <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
                <div class="treanding">
                    <figure class="imgPosition">
                        <img src="img/xxx.jpg" alt="image film">
                    </figure>
                    <div class="treandingFilm">
                        <h4>xXx : Reactivated</h4>
                        <span>18/01/2017 | 1h 47min</span>
                        <p>Xander Cage, sportif de l’extrême devenu agent d'élite, sort de l’exil qu’il s’était imposé, pour affronter le redoutable guerrier alpha Xiang et son équipe. Il entre dans une course impitoyable afin de récupérer une arme de destruction massive connue sous le nom de Boîte de Pandore. </p>
                        <div class="treandingGenre">
                            <article class="genre2">
                                <span>Action</span>
                            </article>
                            <article class="genre2">
                                <span >Thriller</span>
                            </article> 
                        </div>
                        <div class="treandingBtn">
                            <article class="btn1">                                
                                <a href=""><button class="btn-1">Trailler</button></a>
                            </article>
                            <article class="btn2">
                                <a href=""><button class="btn-2">Wacth Movie</button></a>
                            </article>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="listRated">
                <div class="titleRated">
                    <h3>Top Rated</h3>
                    <img src="img/star.png" alt="">
                </div>
                <div class="rated">
                    <img src="img/babyboy.jpg" alt="image film">
                    <img src="img/fast&furious.jpg" alt="image film">
                    <img src="img/l'ombreRebelle.webp" alt="image film">
                    <img src="img/interstellar.jpg" alt="image film">
                </div>    
            </div>
        </div>

        <div class="uk-width-expand@m " id="navMovie">
            <div class="titleUp">
                <h3>Upcomming Movie</h3>
                <img src="img/popcorn.png" alt="">
            </div>
            <div class="movie">
                <img src="img/braquage.jpg" alt="image film">
                <p>Un policier à la retraite décide de rendre justice à ceux qui sont à l'origine d'un braquage de banque.</p>
                <img src="img/toutLacher.webp" alt="image film">
                <p>Stella vit sa vie bien réglée, à l'exception du besoin d'attention constant de son jeune garçon, des sautes d'humeur de sa fille ado et de son mari émotionnellement absent. La famille est au bord de l'implosion lorsque Stella reçoit un message qui change tout. Elle décide de partir en voyage avec les siens pour réaliser l'impossible : ressouder sa famille.</p>
            </div>
        </div>
    </div>
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
        showDivs(slideIndex += n);
        }

        function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        x[slideIndex-1].style.display = "block";  
        }
    </script>  
</body>

<script src="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/js/uikit-icons.min.js"></script>
</html>
      
<?php

$titre = "homepage";
$titre_secondaire = "homepgae";
$contenu = ob_get_clean();
require "view/template/template.php";