<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../Style.css"> <!-- Link to CSS -->
</head>
<body>

<div class="login-container">
    <h2>Change display name</h2>
    <form method="POST" action="../dashboard.php">
        <input type="text" name="name" placeholder="Type name here" required>
        <button type="submit">OK</button>
    </form>
</div>

</body>