<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $article['title']?> - <?= $article['created']?></title>
</head>
<body>
    <h1><?= $article['title']?></h1>
    <p><?= $article['content']?></p>
    <a href="/update?id=<?= $article['id']?>">Modifier</a>
</body>
</html>