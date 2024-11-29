<?php ob_start(); 

$genres = $requete->fetchAll();

?>
<h1>Liste Des Genres</h1>

<table>
    <thead>
        <tr>
            <th>NOM GENRE</th>
        </tr>
    </thead>
    <tbody>
        <?php 
             foreach($genres as $genre) { 
                ?>
                 <tr>
                    <td><a href="index.php?action=detailGenre&id=<?= $genre['id_genre']?>"><?php echo $genre["nom_genre"] ?></a></td>
                </tr>
        <?php 
             } 
        ?>
     </tbody>
</table>
<div class="action">
    <a href="index.php?action=addGenreForm">Ajouter</a>
    <a href="index.php?action=editGenre">Modifier</a>
    <a href="index.php?action=deleteGenre">Supprimer</a>
 </div>  


<?php

$titre = "Liste des genres";
$contenu = ob_get_clean();
require "view/template.php";