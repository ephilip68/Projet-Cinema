<?php ob_start(); 
     
$genres = $requete->fetchAll();

$films = $requeteFilmGenre->fetchAll();

?>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>TITRE</th>
            <th>ANNEE</th>
            <th>DUREE</th>
        </tr>
    </thead>
    <tbody>
        <?php 
       foreach($films as $film){
            ?>
            <tr>
                <td><?php echo $film["titre"] ?></td>
                <td><?php echo $film["annee"] ?></td>
                <td><?php echo $film["duree"] ?></td>
            </tr>
        <?php 
        }    
        ?>
     </tbody>
</table>

<?php

$titre = "Detail genre";
$titre_secondaire = "Detail genres";
$contenu = ob_get_clean();
require "view/template.php";

?>