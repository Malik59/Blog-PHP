<?php


try {
    $pdo = new PDO("mysql:host=localhost;dbname=blog", "root", "M@lik5959", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    echo "ERROR :" . $e->getMessage();
}

return $pdo;
