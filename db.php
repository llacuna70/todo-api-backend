<?php
    $host = 'yamanote.proxy.rlwy.net';
    $port = 35635;  // use your Railway port
    $dbname = 'todo_app'; // check your DB name on Railway
    $username = 'root';  // or whatever username Railway gave
    $password = 'OfUfBxFUkccxQLdbGUpcemhogXpRRNts'; // paste it exactly

    try {
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
?>
