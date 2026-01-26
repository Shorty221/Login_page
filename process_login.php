<?php
session_start();
require "config/db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare(
    "SELECT * FROM users WHERE username = ?"
);
$stmt->bind_param("s", $username);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $user['username'];
    header("Location: dashboard.php");
    exit();
}

echo "Invalid login credentials";