<?php ob_start(); 

$acteurs = $requete->fetchAll();

$acteur = $requete->fetch();

?>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>NOM</th>
            <th>SEXE</th>
            <th>DATE DE NAISSANCE</th>
            <th>TITRE</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach($acteurs as $acteur){
            ?>
            <tr>
                <td><?php echo $acteur["acteur"] ?></td> 
                <td><?php echo $acteur["sexe"] ?></td> 
                <td><?php echo $acteur["dateNaissance"] ?></td> 
            </tr>
        <?php 
            }    
        ?>
   <?php 
            foreach($requeteFilm->fetchAll() as $film){
            ?>
            <tr>
                <td><?php echo $film["titre"] ?></td> 
            </tr>
        <?php 
            }    
        ?>

     </tbody>
</table>


<?php

$titre = "Detail Acteur";
$titre_secondaire = "Detail Acteurs";
$contenu = ob_get_clean();
require "view/template.php";

?>