<?php ob_start(); ?>

<h1 class="titleCategory">Liste Des Acteurs</h1>

<table class="uk-table uk-table-striped" id="tableActeur">
    <thead>
        <tr>
            <th>IMG</th>
            <th>NOM</th>
            <th>PRENOM</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach($requete->fetchAll() as $acteur) { 
        
                ?>
                <tr>
                <td><a href="index.php?action=detailActeur&id=<?= $acteur['id_acteur']?>"><?php echo $acteur["img"] ?></a></td>
                    <td><a href="index.php?action=detailActeur&id=<?= $acteur['id_acteur']?>"><?php echo $acteur["nom"] ?></a></td>
                    <td><a href="index.php?action=detailActeur&id=<?= $acteur['id_acteur']?>"><?php echo $acteur["prenom"] ?></a></td>
                </tr>

        <?php 
            } 
        ?>
    </tbody>
</table>


<?php

$titre = "Liste des acteurs";
$contenu = ob_get_clean();
require "view/template/template.php";