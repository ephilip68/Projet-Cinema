<?php

namespace Controller;
use Model\Connect;

class RealisateurController {

    public function listRealisateurs(){

        $pdo = Connect::seConnecter();

        $requete = $pdo->query(

            "SELECT p.nom, p.prenom,r.id_realisateur
            FROM personne p
            INNER JOIN realisateur r 
            ON p.id_personne = r.id_personne
            ORDER BY nom ASC"

        );

        require "view/listRealisateurs.php";

    }

    // Méthode pour afficher les détails d'un réalisateur
    public function detailRealisateur($id_realisateur){

        $pdo = Connect::seConnecter();

        $requete = $pdo->prepare(

            "SELECT p.prenom, p.nom, p.dateNaissance
            FROM personne p
            INNER JOIN realisateur r 
            ON p.id_personne = r.id_personne
            WHERE r.id_realisateur = :id_realisateur"
        
        );

        $requete->execute([':id_realisateur' => $id_realisateur]);

        
        // Requête pour afficher le nombre de films réalisés par le réalisateur
        $requeteNbFilms = $pdo->prepare(   

            "SELECT f.titre, f.annee
            FROM film f
            INNER JOIN realisateur r 
            ON f.id_realisateur = r.id_realisateur
            JOIN personne p 
            ON r.id_personne = p.id_personne
            WHERE r.id_realisateur = :id_realisateur

        ");
        
        $requeteNbFilms->execute([':id_realisateur' => $id_realisateur]);

        

        require "view/detailRealisateur.php";
    }

    public function addRealisateurForm(){

        require "view/addRealisateurForm.php";

    }

    public function addRealisateur(){

        if(isset($_POST["submit"])){
            
            // La fonction filter_input() permet de valider ou nettoyer chaque donnée transmise par le formulaire en utilisant divers filtres
            // FILTER_SANITIZA_STRING supprime une chaîne de caractère de toute présence de caractères spéciaux et balise HTML potentielle ou encodes
            $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_SPECIAL_CHARS);
            $prenom = filter_input(INPUT_POST, "prenom", FILTER_SANITIZE_SPECIAL_CHARS);
            $sexe = filter_input(INPUT_POST, "sexe", FILTER_SANITIZE_SPECIAL_CHARS);
            $dateNaissance = filter_input(INPUT_POST, "dateNaissance", FILTER_SANITIZE_NUMBER_INT);
            
            $pdo = Connect::seConnecter();

            $requetePersonne = $pdo->prepare(

                "INSERT INTO personne (nom, prenom, sexe, dateNaissance)
                VALUES (:nom, :prenom, :sexe, :dateNaissance)"

            );

            $requetePersonne->execute(["nom" => $nom, "prenom" => $prenom, "sexe" => $sexe, "dateNaissance" => $dateNaissance]);

            // Cette méthode renvoie l’ID de la dernière ligne insérée ou la dernière valeur insérée dans une colonne AUTO_INCREMENT
            $lastId = $pdo->lastInsertId();

            $requete = $pdo->prepare(

                "INSERT INTO realisateur (id_personne)
                VALUES (:id_personne)"

            );

            $requete->execute(["id_personne" => $lastId]);


            header("location:index.php?action=listRealisateurs");
     
        
            //    on récupère et on clean les entrées 


        }
    }
}
