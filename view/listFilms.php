<?php ob_start(); ?>

<h1 class="titleCategory">Liste Des Films</h1>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>IMAGE</th>
            <th>TITRE</th>
            <th>ANNEE</th>
            <th>DUREE</th>
            <th>RESUME</th>
        </tr>
    </thead>
    <tbody>
        <?php 
             foreach($requete->fetchAll() as $film) { 
                ?>
                 <tr>
                 <td>
                    <?php if (!empty($film["img"])): ?>
                        <img src="<?= htmlspecialchars($film["img"]) ?>" class="film-image-full">
                    <?php else: ?>
                        <div class="uk-card-body">
                            <p>Aucune image disponible.</p>
                        </div>
                    <?php endif; ?>
                </td>
                    <td><?php echo $film["titre"] ?></td>
                    <td><?php echo $film["annee"] ?></td> 
                    <td><?php echo $film["duree"] ?></td> 
                    <td><?php echo $film["resumes"] ?></td> 
                </tr>
        <?php 
             } 
        ?>
     </tbody>
</table>

<div class="action">
    <a href="index.php?action=addFilmForm">Ajouter</a>
</div>

<?php

$titre = "Liste des films";
$titre_secondaire = "Liste des films";
$contenu = ob_get_clean();
require "view/template/template.php";

