<?php ob_start(); 

$realisateurs = $requete->fetchAll();

?>


<h1 class="titleCategory">AJOUTER UN FILM</h1>


<div>
    <form action="index.php?action=addFilm" method="post" enctype="multipart/form-data">
        <div>
            <label>Image</label>
            <input type="file" name="img" id="img">
            <label >Titre</label>
            <input type="text" name="titre">
            <label>Année</label>
            <input type="date" name="annee">
            <label>Durée</label>
            <input type="number" name="duree" min="0">
            <label>Resume</label>
            <textarea name="resumes" id="resumes" cols="30" rows="10"></textarea>
        </div>

        <!-- Menu déroulant pour selectionner un realisateur existant -->
        <div>
            <label>Choix du Realisateur</label>
            <select name="realisateur">
                <option>Choisir un realisateur</option>
                
                <?php
                foreach ($realisateurs as $realisateur) { ?>

                    <option value="<?= $realisateur["id_realisateur"] ?>"><?= $realisateur["nom"] . " " . $realisateur["prenom"] ?></option>

                <?php
                } ?>
            </select>
        </div>
        <input type="submit" name="submit" value="Ajouter"></input>
    </form>
</div>

<?php

$titre = "add Film ";
$titre_secondaire = "add Film";
$contenu = ob_get_clean();
require "view/template/template.php";

?>