<?php

use Controller\CinemaController;

use Controller\HomeController;

use Controller\ActeurController;

use Controller\RoleController;

use Controller\GenreController;

use Controller\RealisateurController;


spl_autoload_register(function ($class_name){
    include $class_name . '.php';
});

$ctrlCinema = new CinemaController();
$ctrlActeur = new ActeurController ();
$ctrlRealisateur = new RealisateurController();
$ctrlRole = new RoleController();
$ctrlGenre = new GenreController();
$ctrlHome = new HomeController();

$id = (isset($_GET["id"])) ? $_GET["id"] : null;

if(isset($_GET["action"])){

    switch($_GET["action"]){

        // FILMS
        case "listFilms" : 
            $ctrlCinema -> listFilms();
        break;
        case "detailFilm": 
            $ctrlCinema -> detailFilm($id); 
        break;
        case "addFilmForm": 
            $ctrlCinema -> addFilmForm(); 
        break;
        case "addFilm": 
            $ctrlCinema -> addFilm(); 
        break;
        
        // ACTEURS
        case "listActeurs":
            $ctrlActeur->listActeurs();
        break;
        case "detailActeur":
            $ctrlActeur->detailActeur($id);
        break;
        case "addActeur": 
            $ctrlActeur->addActeur(); 
        break;
        
        //REALISATEURS
        case "listRealisateurs":
            $ctrlRealisateur->listRealisateurs();
        break;
        case "detailRealisateur":
            $ctrlRealisateur->detailRealisateur($id);
        break;
        case "addRealisateurForm": 
            $ctrlRealisateur->addRealisateurForm(); 
        break;
        case "addRealisateur": 
            $ctrlRealisateur->addRealisateur(); 
        break;

        // GENRE
        case "listGenres":
            $ctrlGenre->listGenres();
        break;
        case "detailGenre":
            $ctrlGenre->detailGenre($id);
        break;
        case "addGenreForm": 
            $ctrlGenre->addGenreForm(); 
        break;
        case "addGenre": 
            $ctrlGenre->addGenre(); 
        break;
        case "deleteGenre": 
            $ctrlGenre->deleteGenre(); 
        break;
        case "editGenre": 
            $ctrlGenre->editGenre(); 
        break;

        // ROLES
        case "listRoles":
            $ctrlRole->listRoles();
        break;
        case "addRole": 
            $ctrlRole->addRole(); 
        break;

    }

} else {

    $ctrlHome ->index();

}



