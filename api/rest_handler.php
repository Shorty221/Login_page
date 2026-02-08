// api/rest_handler.php
header("Content-Type: application/json");
include '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $stmt = $pdo->query("SELECT * FROM users");
    echo json_encode($stmt->fetchAll());
}