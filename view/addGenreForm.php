<?php ob_start(); ?>


<h1 class="titleCategory">AJOUTER UN GENRE</h1>


<div>
    <form action="index.php?action=addGenre" method="post">
        <div>
            <label >
                Saisir Genre
            </label>
                <input type="text" name="nomGenre">
        </div>
        <input type="submit" name="submit" value="Ajouter"></input>
    </form>
</div>

<?php

$titre = "add Genre";
$titre_secondaire = "add Genre";
$contenu = ob_get_clean();
require "view/template/template.php";

?>