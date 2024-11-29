<?php ob_start(); 

$realisateurs = $requete->fetchAll();

$nbFilms = $requeteNbFilms->fetchAll();

?>

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
require "view/template.php";

?>