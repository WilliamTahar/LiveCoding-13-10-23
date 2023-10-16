<?php
require_once 'config.php';

function getConnection()
{
    return new PDO(DSN, USER, PASS);
}

function getAllArticles(): array {
    $connection = getConnection();
    $statement = $connection->query("SELECT id, title FROM article");
    return $statement->fetchAll();
}

function getArticleById(int $id): array
{
    $connection = getConnection();
    $query = "SELECT id, title, content, created FROM article WHERE id = :id";
    $statement = $connection->prepare($query);
    $statement->bindValue(":id", $id, PDO::PARAM_INT);
    $statement->execute();
    return $statement->fetch();
}

function createArticle(array $article) : bool
{
    $connection = getConnection();
    $query = "INSERT INTO article (title, content) VALUES (:title, :content)";
    $statement = $connection->prepare($query);
    $statement->bindValue(':title', $article['title'], PDO::PARAM_STR);
    $statement->bindValue(':content', $article['content'], PDO::PARAM_STR);
    return $statement->execute();
}

function updateArticle(array $article) :bool
{
    $connection = getConnection();
    $query = "UPDATE article SET title = :title, content = :content WHERE id = :id";
    $statement = $connection->prepare($query);
    $statement->bindValue(':id', $article['id'], PDO::PARAM_INT);
    $statement->bindValue(':title', $article['title'], PDO::PARAM_STR);
    $statement->bindValue(':content', $article['content'], PDO::PARAM_STR);
    return $statement->execute();
}