<?php

namespace Controller;
use Model\Connect;

class RoleController {

    public function listRoles(){
        $pdo = Connect::seConnecter();

        $requete = $pdo->query(

            "SELECT CONCAT(p.nom,' ', p.prenom) AS acteur, r.nom_personnage, f.titre, f.annee
            FROM film f
            INNER JOIN jouer j
            ON j.id_film = f.id_film
            INNER JOIN roles r
            ON r.id_role = j.id_role
            INNER JOIN acteur a
            ON a.id_acteur = j.id_acteur
            INNER JOIN personne p
            ON p.id_personne = a.id_personne
            WHERE j.id_role
            ORDER BY acteur ASC"

        );

        require "view/listRoles.php";

    }

    // public function addRoles(){

    //     $pdo = Connect::seConnecter();
        
    //     $requete = $pdo->prepare(


    //     )

    // }


}