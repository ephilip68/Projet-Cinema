<?php ob_start(); ?>

<h1>Liste Des Acteurs</h1>

<table>
    <thead>
        <tr>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>DATE DE NAISSANCE</th>
        </tr>
    </thead>
    <tbody>
        <?php 
             foreach($requete->fetchAll() as $acteur) { 

        
                ?>
                 <tr>
                    <td><a href="index.php?action=detailActeur&id=<?= $acteur['id_acteur']?>"><?php echo $acteur["acteur"] ?></a></td>
                </tr>
        <?php 
             } 
        ?>
     </tbody>
</table>

<?php

$titre = "Liste des acteurs";
$contenu = ob_get_clean();
require "view/template.php";