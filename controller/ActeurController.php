<?php

namespace Controller;
use Model\Connect;

class ActeurController {

   
    public function listActeurs(){

        $pdo = Connect::seConnecter();

        $requete = $pdo->query(

            "SELECT CONCAT(p.nom,' ', p.prenom) AS acteur, a.id_acteur
            FROM personne p
            INNER JOIN acteur a 
            ON p.id_personne = a.id_personne"

        );
       
        require "view/listActeurs.php";

    }

    public function detailActeur($id){

        $pdo = Connect::seConnecter();

        $requete = $pdo->prepare(

            "SELECT CONCAT(p.nom,' ', p.prenom) AS acteur, 
            DATE_FORMAT (p.dateNaissance, '%d/%m/%Y') AS dateNaissance, p.sexe
            FROM acteur a
            INNER JOIN personne p
            ON p.id_personne = a.id_personne
            WHERE a.id_acteur = :id"
            
        );
    
        $requete->execute(["id" => $id]);

        $requeteFilm = $pdo->prepare(

            "SELECT f.id_film, f.titre
            FROM film f,acteur a, personne p, jouer j
            WHERE a.id_acteur = j.id_acteur
            AND p.id_personne = a.id_personne
            AND j.id_film = f.id_film
            AND a.id_acteur = :id"
            
        );
    
        $requeteFilm->execute(["id" => $id]);


        require "view/detailActeur.php";

    }
    
}