<?php
    $host = 'yamanote.proxy.rlwy.net';
    $dbname = 'todo_app';
    $username = 'root';
    $password = 'OfUfBxFUkccxQLdbGUpcemhogXpRRNts';
    $port = 35635;

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
?>
