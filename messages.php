<?php
session_start();

// protect page
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit;
}
?>



<!DOCTYPE html>

<html>
<head>
    <title>Message</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to CSS -->
</head>
<body>

<div class="login-container">
    <h2>Message</h2>
    <ul style="text-align: left; padding-left: 20px;">
    <li>No message for U</li>
    <li><a href="dashboard.php">Go back to dashboard</a></li>

    </ul>
</div>

</body>
</html>
