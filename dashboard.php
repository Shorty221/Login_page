<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit();
}

// Data from your dashboard snippet
$name = $_SESSION['username'];
$age = 19;
$height = 5.9;
$skills = ["HTML", "CSS", "PHP"];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <div class="row">
    <div class="col-md-7">
      <div class="card p-4 shadow-sm mb-4">
        <h2>Welcome, <?= htmlspecialchars($name); ?>! 👋</h2>
        <hr>
        <h5>Dashboard Menu</h5>
        <div class="list-group">
  
          <a href="profile.php" class="list-group-item list-group-item-action">Profile</a>
          <a href="settings.php" class="list-group-item list-group-item-action">Settings</a>
          <a href="logout.php" class="list-group-item list-group-item-action text-danger">Logout</a>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="card p-4 shadow-sm">
        <h5>Quick Stats</h5>
        <ul class="list-unstyled mt-3">
          <li><strong>Name:</strong> <?= htmlspecialchars($name) ?></li>
          <li><strong>Age:</strong> <?= $age ?> (age not dynamic for now)</li>
          <li><strong>Height:</strong> <?= $height ?>(Height not dynamic)</li>
          <li><strong>Skills:</strong> <?= implode(", ", $skills) ?></li>
          <li><strong>Status:</strong> <span class="badge bg-success">Online</span></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</body>
</html>