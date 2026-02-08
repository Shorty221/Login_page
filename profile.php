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
    <title>Profile</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to CSS -->
</head>
<body>

<div class="login-container">
    <h2>Hello <?php echo $_SESSION['username']; ?>, would you like to?</h2>
    <ul style="text-align: left; padding-left: 20px;">
        <li><a href="/under_profile/change_display_name.php">Change display name</a></li>
        <li><a href="#">Change profile picture</a></li>
        <li><a href="#">Set active status</a></li>
        
        <li><a href="dashboard.php">Go back to dashboard</a></li>
    </ul>
</div>

</body>
</html>