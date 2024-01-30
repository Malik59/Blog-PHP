<?php
$filename = __DIR__ . "/data/articles.json";
$articles = [];

if (file_exists($filename)) {
    $articles = json_decode(file_get_contents($filename), true) ?? [];
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once __DIR__ . "/includes/head.php" ?>
    <link rel="stylesheet" href="public/css/index.css">
    <title>Blog Version 1</title>
</head>

<body>
    <div class="container">
    <?php require_once __DIR__ . "/includes/header.php" ?>
        
    <div class="content">
        <div class="articles-container">
            <?php foreach ($articles as $a): ?>
                <div class="article block">
                    <div class="overflow">
                        <div class="img-container" style="background-image:url(<?= $a["image"] ?>);"></div>
                    </div>
                    <h2><?= $a["title"] ?></h2>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php require_once __DIR__ . "/includes/footer.php" ?>
    
        
    </div>

</body>
</html>