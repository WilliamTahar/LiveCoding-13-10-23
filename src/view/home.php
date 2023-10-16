<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home page</title>
</head>
<body>
    <h1>TOUS LES ARTICLES !!!</h1>
    <?php
        foreach ($articles as $article) :
    ?>
    <div>
        <h2><?= $article['title'] ?></h2>
        <a href="/article?id=<?= $article['id']?>">voir l'article</a>
    </div>
    <?php endforeach; ?>
</body>
</html>