<?php ob_start(); 

$roles = $requete->fetchAll();

?>

<table>
    <thead>
        <tr>
            <th>ACTEUR</th>
            <th>NOM PERSONNAGE</th>
            <th>TITRE</th>
            <th>ANNEE</th>
        </tr>
    </thead>
    <tbody>
        <?php 
             foreach($roles as $role) { 
                ?>
                 <tr>
                    <td><?php echo $role["acteur"] ?></a></td>
                    <td><?php echo $role["nom_personnage"] ?></td>
                    <td><?php echo $role["titre"] ?></td>
                    <td><?php echo $role["annee"] ?></td>
                </tr>
        <?php 
             } 
        ?>
     </tbody>
</table>

<?php

$titre = "Liste des rôles";
$contenu = ob_get_clean();
require "view/template.php";