<?php ob_start(); ?>

<div>
    <h1>AJOUTER UN REALISATEUR</h1>
</div>

<div>
    <form action="index.php?action=addRealisateur" method="post">
        <div>
            <label>Prénom</label>
            <input type="text" name="prenom">
            <label>Nom</label>
            <input type="text" name="nom">
            <label>Sexe</label>
            <input type="text" name="sexe">
            <label>Date de naissance</label>
            <input type="date" name="dateNaissance">
        </div>
            <input type="submit" name= "submit" value="Ajouter"> 
    </form>
</div>

<?php

$titre = "add Réalisateur ";
$titre_secondaire = "add Réalisateur";
$contenu = ob_get_clean();
require "view/template.php";

?>