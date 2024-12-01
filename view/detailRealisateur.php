<?php ob_start(); 

$realisateurs = $requete->fetchAll();

$nbFilms = $requeteNbFilms->fetchAll();

?>

<h1 class="titleCategory">Détail des Réalisateurs</h1>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>DATE DE NAISSANCE</th>
        </tr>
    </thead>
    <tbody>
        <?php 
       foreach($realisateurs as $realisateur){
            ?>
            <tr>
                <td><?php echo $realisateur["nom"] ?></td>
                <td><?php echo $realisateur["prenom"] ?></td>
                <td><?php echo $realisateur["dateNaissance"] ?></td>
            </tr>
        <?php 
        }    
        ?>
     </tbody>
</table>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>TITRE</th>
            <th>ANNEE</th>
            
        </tr>
    </thead>
    <tbody>
        <?php 
       foreach($nbFilms as $nbFilm){
            ?>
            <tr>
                <td><?php echo $nbFilm["titre"] ?></td>
                <td><?php echo $nbFilm["annee"] ?></td>
            </tr>
        <?php 
        }    
        ?>
     </tbody>
</table>

<?php

$titre = "Detail realisateur";
$titre_secondaire = "Detail realisateur";
$contenu = ob_get_clean();
require "view/template/template.php";

?>