<?php
    // Allow requests from any origin (frontend)
    header("Access-Control-Allow-Origin: *");

    // Allow specific HTTP methods
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

    // Allow specific headers (especially for JSON requests)
    header("Access-Control-Allow-Headers: Content-Type");

    // Handle preflight OPTIONS request  // comment this if there's a problem
    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        http_response_code(200);
        exit();
    }

    // header("Access-Control-Allow-Origin: *");
    // header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
    // header("Access-Control-Allow-Headers: Content-Type");

    require 'db.php';

    $method = $_SERVER['REQUEST_METHOD'];

    switch ($method) {
        case 'GET':
            $stmt = $pdo->query("SELECT * FROM todos ORDER BY id DESC");
            echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
            break;

        case 'POST':
            $data = json_decode(file_get_contents("php://input"), true);
            $task = $data['task'];
            $stmt = $pdo->prepare("INSERT INTO todos (task) VALUES (?)");
            $stmt->execute([$task]);
            echo json_encode(['message' => 'Added']);
            break;

        case 'PUT':
            parse_str($_SERVER['QUERY_STRING'], $params);
            $id = $params['id'];
            $data = json_decode(file_get_contents("php://input"), true);
            $task = $data['task'];
            $completed = $data['completed'];
            $stmt = $pdo->prepare("UPDATE todos SET task=?, completed=? WHERE id=?");
            $stmt->execute([$task, $completed, $id]);
            echo json_encode(['message' => 'Updated']);
            break;

        case 'DELETE':
            parse_str($_SERVER['QUERY_STRING'], $params);
            $id = $params['id'];
            $stmt = $pdo->prepare("DELETE FROM todos WHERE id=?");
            $stmt->execute([$id]);
            echo json_encode(['message' => 'Deleted']);
            break;
    }
?>
