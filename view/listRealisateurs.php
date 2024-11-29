<?php ob_start(); 

$realisateurs = $requete->fetchAll();

?>

<h1> Liste Des Réalisateurs</h1>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>NOM</th>
            <th>PRENOM</th>
        </tr>
    </thead>
    <tbody>
        <?php 
             foreach($realisateurs as $realisateur) { 
                ?>
                 <tr>
                    <td><a href="index.php?action=detailRealisateur&id=<?= $realisateur['id_realisateur']?>"><?php echo $realisateur["nom"] ?></a></td>
                    <td><?php echo $realisateur["prenom"] ?></td>
                </tr>
        <?php 
             } 
        ?>
     </tbody>
</table>

<div class="action">
    <a href="index.php?action=addRealisateurForm">Ajouter</a>
</div>

<?php

$titre = "Liste des réalisateurs";
$contenu = ob_get_clean();
require "view/template.php";