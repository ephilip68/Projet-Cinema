<?php

namespace Controller;
use Model\Connect;

class CinemaController {

    /* Lister les <films></films>*/
    public function listFilms() {

        $pdo = Connect::seConnecter();
        $requete = $pdo->query("
            SELECT id_film,titre, annee, duree, resumes
            FROM film
            ");
     
    // définir PDO 
    // requetes qui recuperent plusieurs enregistrements
    // dans la vue, utilisation de fetch all pour fetch tous les resultats
    // pas besoin de preparer la requete car il n'y a pas de placeholder
 

        require "view/listFilms.php";

    }

    public function detailFilm($id) {

        // definir injection sql 

        // je ne peux utiliser query car j'ai des placeholder donc ça serait dangereux 
        // je prepare et execute la requete, c'est donc une requete préparée

        $pdo = Connect::seConnecter();
        
        $requete = $pdo->prepare(

            "SELECT f.titre, f.annee, round(f.duree/60, 2) as dureeFilm, f.resumes, CONCAT( p.nom,' ',p.prenom) as realisateur
            FROM film f
            INNER JOIN realisateur r 
            ON f.id_realisateur = r.id_realisateur
            INNER JOIN personne p
            ON p.id_personne = r.id_personne
            WHERE f.id_film = :id"

        );

        $requete->execute(["id" => $id]);


        $requeteCasting = $pdo->prepare(

            "SELECT concat(p.nom,' ',p.prenom) AS acteur,  r.nom_personnage
            FROM film f
            INNER JOIN jouer j
            ON j.id_film = f.id_film
            INNER JOIN roles r
            ON r.id_role = j.id_role
            INNER JOIN acteur a
            ON a.id_acteur = j.id_acteur
            INNER JOIN personne p
            ON p.id_personne = a.id_personne
            WHERE f.id_film = :id"

        );
        
        $requeteCasting->execute(["id"=> $id]);

        // la variable requete renvoie un seul enregistrement donc je vais juste fetch dans la vue 
        require "view/detailFilm.php";

    }

    public function addFilmForm(){

        $pdo = Connect::seConnecter();

        $requete = $pdo->query(

            "SELECT p.nom, p.prenom, r.id_realisateur
            FROM personne p
            INNER JOIN realisateur r 
            ON p.id_personne = r.id_personne
            ORDER BY p.nom ASC"

        );

        require "view/addFilmForm.php";
    }

    public function addFilm(){
        if(isset($_POST["submit"])){
            
            // La fonction filter_input() permet de valider ou nettoyer chaque donnée transmise par le formulaire en utilisant divers filtres
            // FILTER_SANITIZA_STRING supprime une chaîne de caractère de toute présence de caractères spéciaux et balise HTML potentielle ou encodes
            $titre = filter_input(INPUT_POST, "titre", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $annee = filter_input(INPUT_POST, "annee", FILTER_SANITIZE_NUMBER_INT);
            $duree = filter_input(INPUT_POST, "duree", FILTER_SANITIZE_NUMBER_INT);
            $resume = filter_input(INPUT_POST, "resumes", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $realisateur = filter_input(INPUT_POST, "realisateur", FILTER_SANITIZE_NUMBER_INT);
            
            $pdo = Connect::seConnecter();

            $requete = $pdo->prepare(

                "INSERT INTO film (titre, annee, duree, resumes, id_realisateur)
                VALUES (:titre, :annee, :duree, :resumes, :id_realisateur)"
    
            ); 
        
            $requete->execute(["titre" => $titre, "annee" => $annee, "duree" => $duree, "resumes" => $resume, "id_realisateur" => $realisateur]);

            header("location:index.php?action=listFilms");

            // $requeteCasting = $pdo->prepare(

            //     "INSERT INTO  ()
            //     VALUES ()"

            // )
     
        
            //    on récupère et on clean les entrées 


        }
    }
}


