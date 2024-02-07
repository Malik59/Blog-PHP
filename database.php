<?php


// $user = getenv('DB_USER'); 
// $pwd = getenv('DB_PWD'); --> pour sécuriser: one ne voit pas le nom utilisateur et le mot de passe: il faut les écrire directement dans le terminal lorsque l'on lance le serveur
$user = "root";
$pwd = "M@lik5959";


try {
    $pdo = new PDO("mysql:host=localhost;dbname=blog", $user, $pwd, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    echo "ERROR :" . $e->getMessage();
}

return $pdo;
