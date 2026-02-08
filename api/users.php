<?php
require_once "../config/db.php"; 
header("Content-Type: application/json");

if (!$conn) {
    echo json_encode(["status" => "error", "message" => "Connection failed"]);
    exit;
}

try {
   
    $result = $conn->query("SELECT id, username, email FROM users");
    
    if ($result) {
        echo json_encode([
            "status" => "success",
            "data" => $result->fetch_all(MYSQLI_ASSOC)
        ]);
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => $e->getMessage()]);
}
?>