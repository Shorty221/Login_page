<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit();
}

require "config/db.php";
$result = $conn->query("SELECT username, email FROM users");
?>
<!DOCTYPE html>
<html>
<head>
  <title>User List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card p-4 shadow">
    <h3>Registered Users</h3>

    <table class="table table-bordered">
      <tr>
        <th>Username</th>
        <th>Email</th>
      </tr>

      <?php while ($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= $row['username'] ?></td>
        <td><?= $row['email'] ?></td>
      </tr>
      <?php endwhile; ?>
    </table>

    <a href="dashboard.php">Back to Dashboard</a>
  </div>
</div>

</body>
</html>