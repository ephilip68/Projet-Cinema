<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/css/uikit.min.css" />
    
    <title><?= $titre ?></title>
</head>
<body>
    <!-- <div class="uk-text-center" uk-grid>
        <div class="uk-width-auto@m">
            <ul>
                <h3>MENU</h3>
                <li><a href="index.php">HOME</a></li>
                <li><a href="index.php?action=listFilms">FILMS</a></li>
                <li><a href="index.php?action=listGenres">GENRES</a></li>
                <li><a href="index.php?action=listRealisateurs">REALISATEURS</a></li>
                <li><a href="index.php?action=listActeurs">ACTEURS</a></li>
                <li><a href="index.php?action=listRoles">ROLES</a></li>
            </ul>
        </div>
    </div> -->
    <div class="uk-width-expand@m">
        <div id="wrapper" class="uk-container uk-container-expand">
            <main>
                <div id="contenu"> 
                    <?= $contenu ?>     
                </div>
            </main>          
        </div>
    </div>          
</body>

<script src="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/js/uikit-icons.min.js"></script>
</html>