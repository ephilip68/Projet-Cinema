<?php ob_start(); ?>


<h1 class="titleCategory">AJOUTER UN REALISATEUR</h1>


<div>
    <form action="index.php?action=addRealisateur" method="post">
        <div id="addform">
            <label>Prénom</label>
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
require "view/template/template.php";

?>