<?php ob_start(); ?>

<div>
    <h1>AJOUTER UN GENRE</h1>
</div>

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
require "view/template.php";

?>