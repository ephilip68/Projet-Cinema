<?php ob_start(); 

$film = $requete->fetch();

$castings = $requeteCasting->fetchAll();

?>

<h1 class="titleCategory">Détail des films</h1>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>TITRE</th>
            <th>ANNEE</th>
            <th>DUREE</th>
            <th>RESUME</th>
            <th>REALISATEURS</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            ?>
            <tr>
                <td><?php echo $film["titre"] ?></td>
                <td><?php echo $film["annee"] ?></td> 
                <td><?php echo $film["dureeFilm"] ?></td> 
                <td><?php echo $film["resume"] ?></td> 
                <td><?php echo $film["realisateur"] ?></td> 
            </tr>
        <?php     
        ?>
     </tbody>
</table>
<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>NOM</th>
            <th>NOM PERSONNAGE</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach($castings as $cast) {
            ?>
            <tr>
                <td><a href="index.php?action=detailActeur&id="><?php echo $cast["acteur"] ?></a></td> 
                <td><?php echo $cast["nom_personnage"] ?></td> 
            </tr>
        <?php 
            }     
        ?>
     </tbody>
</table>


<?php
$titre = "Detail";
$titre_secondaire = "Detail film";
$contenu = ob_get_clean();
require "view/template/template.php";

?>