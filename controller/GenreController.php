<?php

namespace Controller;
use Model\Connect;

class GenreController {

    public function listGenres(){

        $pdo = Connect::seConnecter();

        $requete = $pdo->query(

            "SELECT  id_genre, g.nom_genre
            FROM genre g
            ORDER BY nom_genre ASC"

        );

        require "view/listGenres.php";

    }

    // Méthode pour afficher les détails d'un genre
    public function detailGenre($id_genre){

        $pdo = Connect::seConnecter();

        $requete = $pdo->prepare(

            "SELECT id_genre, g.nom_genre
            FROM genre g
            WHERE g.id_genre = :id_genre"
            
        );

        $requete->execute(["id_genre" => $id_genre]);

        // Requête pour afficher les films du genre
        $requeteFilmGenre = $pdo->prepare(

            "SELECT DISTINCT f.titre, f.annee, f.duree 
            FROM genre g 
            INNER JOIN appartenir a 
            ON a.id_genre = g.id_genre
            INNER JOIN film f 
            ON a.id_film = f.id_film
            WHERE g.id_genre  = :id_genre
            ORDER BY titre ASC"

        );

        $requeteFilmGenre->execute(["id_genre" => $id_genre]);

        require "view/detailGenre.php";
    }

    public function addGenreForm(){

    
        require "view/addGenreForm.php";

    }

    public function addGenre(){

        
        if(isset($_POST["submit"])){
            
            // La fonction filter_input() permet de valider ou nettoyer chaque donnée transmise par le formulaire en utilisant divers filtres
            // FILTER_SANITIZA_STRING supprime une chaîne de caractère de toute présence de caractères spéciaux et balise HTML potentielle ou encodes
            $nomGenre = filter_input(INPUT_POST, "nomGenre", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            // var_dump($nomGenre);
            // die;
            
            $pdo = Connect::seConnecter();

            $requete = $pdo->prepare(

                "INSERT INTO genre (nom_genre)
                VALUES (:nomGenre)"
    
            );
        
            $requete->execute([ "nomGenre" => $nomGenre]);

            header("location:index.php?action=listGenres");
     
        
    //    on récupère et on clean les entrées 


        } else{
            echo "erreur";
        }
    }
}