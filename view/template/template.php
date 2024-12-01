<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/css/uikit.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>
    
    
    <title><?= $titre ?></title>
</head>
<body>
    <div > 
        <nav class="uk-navbar-container" uk-navbar id="navbar-container">
            <?php include 'navbar.php'; ?>
        </nav>
        <div id="contenu">
           <?= $contenu ?> 
        </div>
    </div>
    <footer>
    <?php include 'footer.php'; ?>
    </footer>
            
        
</body>

<script src="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/js/uikit-icons.min.js"></script>
</html>