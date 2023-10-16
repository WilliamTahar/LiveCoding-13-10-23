<?php
//
require_once 'src/Models/ArticleModel.php';
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
echo $url;
if ($url === '/') {
    $articles = getAllArticles();
    require 'src/view/home.php';
} elseif ($url === '/article'){
    if (!isset($_GET['id'])) { //TODO FAIRE MIEUX
        header('Location: /');
        exit();
    }
    $article = getArticleById($_GET['id']);
    require 'src/view/article.php';
} elseif ($url === '/update') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $article = getArticleById($_GET['id']);
        require 'src/view/update.php';
    } else {
        if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['content'])) {
            updateArticle([
                'id' => $_POST['id'],
                'title' => $_POST['title'],
                'content' => $_POST['content']
            ]);
            header('Location: /article?id=' . $_POST['id'] );
            exit();
        }
        echo "FAUT BOSSER !";
    }
} else {
    require 'src/view/404.php';
}