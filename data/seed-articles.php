<?php
$articles = json_decode(file_get_contents("./articles.json"), true);

$pdo = new PDO("mysql:host=localhost;dbname=blog", "root", "M@lik5959");

$statement = $pdo->prepare('INSERT INTO article 
                                        (title, category, content, image) 
                                        VALUES 
                                        (:title, :category, :content, :image)');

foreach ($articles as $article) {
    $statement->bindValue(":title", $article["title"]);
    $statement->bindValue(":category", $article["category"]);
    $statement->bindValue(":content", $article["content"]);
    $statement->bindValue(":image", $article["image"]);
    $statement->execute();
}
