<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="Style/style_php.css">
    <meta charset="UTF-8">
    <title>ALGAZY</title>
</head>
<!--#########################################################################################################-->

<body>
    <!--#########################################################################################################-->
    <div class="parent">
        <div class="header">
            <nav>
                <ul>
                    <li><a href="index.php?page=info">A propos</a></li>
                    <li><a href="index.php?page=sondage">Sondages</a></li>
                    <li><a href="index.php?page=article">Article </a></li>
                    <li><a href="index.php?page=statistique">Statistiques</a></li>
                </ul>
            </nav>
        </div>
        <!--#########################################################################################################-->
        <div class="footer">
            <p>Zone basse</p>
        </div>
        <!--#########################################################################################################-->
        <div class="logo">
            <a href="index.php?page=accueil">
                <img alt="Logo du site" class="logo_image" src="Image/logo.png">
            </a>
        </div>
        <!--#########################################################################################################-->
        <div class="left">
            <p>Zone gauche</p>
        </div>
        <div class="main">
            <?php
            $pages = [
                'info' => 'Docs/info.html',
                'sondage' => 'Docs/sondage.html',
                'article' => 'Docs/article.php',
                'statistique' => 'Docs/statistique.html',
                'accueil' => 'Docs/accueil.html',
                'studios' => 'Docs/studios.html',
            ];
            if (isset($_GET['page']) && array_key_exists($_GET['page'], $pages)) {
                include($pages[$_GET['page']]);
            } else {
                include('Docs/accueil.html');
            }
            ?>
        </div>

    </div>
</body>
<!--#########################################################################################################-->

</html>