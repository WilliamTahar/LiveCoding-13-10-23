<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update - Titre de l'article</title>
</head>
<body>
    <form method="post" action="/update">
        <input type="text" name="title" value="<?= $article['title']?>">
        <textarea name="content"><?= $article['content']?></textarea>
        <input hidden name="id" value="<?= $article['id']?>">
        <button type="submit">modifier</button>
    </form>
</body>
</html>