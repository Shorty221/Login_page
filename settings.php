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
    <title>Settings</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to CSS -->
</head>
<body>

<div class="login-container">
    <h2>Settings</h2>
    <ul style="text-align: left; padding-left: 20px;">
    <li>Settings Coming Soon</li>
    <li><a href="dashboard.php">Go back to dashboard</a></li>

    </ul>
</div>

</body>
</html>

