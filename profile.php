<?php
require "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Profile</h1>

    <p>Selamat datang, <?php echo $_SESSION['username']; ?>!</p>
    <p>Role: <?php echo $_SESSION['role']; ?></p>

    <p><a href="dashboard.php">Kembali ke Dashboard</a></p>
    <p><a href="logout.php">Logout</a></p>

</body>
</html>