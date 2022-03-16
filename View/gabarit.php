<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <!-- <link rel="stylesheet" href="Contenu/style.css" />  -->
    <title><?= $title ?></title>
    <!--boostap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cairo:wght@800&family=Comforter&family=Pacifico&family=Playfair+Display:wght@900&family=Redressed&family=Roboto:wght@900&display=swap" rel="stylesheet">
</head>

<body style="background-image: url('books-2596809_1920.jpg');">
    <div id="global">
        <header>
            <a href="index.php" style="text-decoration: none;">
                <h1 id="titreBlog" style="  font-size: 72px;color: #FDAC53;text-align:center;font-family:  'Pacifico', cursive; margin-bottom:50px; margin-top:50px">Gestion des étudiants</h1>
            </a>
        </header>
        <div id="content">
            <?= $content ?>
        </div> <!-- #contenu -->
        <footer id="piedBlog" style="margin-top:5px;  font-size: 30px;color: #FDAC53;font-family:  'Pacifico', cursive;">
            Blog réalisé avec PHP, HTML5 et CSS.

        </footer>
    </div> <!-- #global -->
</body>

</html>