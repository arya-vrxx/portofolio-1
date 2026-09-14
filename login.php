<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$username = $_POST['username'];
$password = $_POST['password'];
// asumsi sudah ada proses cek ke database
if ($username == 'admin' && $password == 'W1ndy') {
// simpan data ke session
$_SESSION['is_login'] = true;
$_SESSION['username'] = $username;
$_SESSION['role'] = 'admin';
header('Location: dashboard.php');
exit();
} else {
$error = 'Username atau password salah';
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ini form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
<h2>Login</h2>

    <form action="/login" method="POST">
        <div>
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username">
        </div>
        <br>
        <div>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password">
        </div>
        <br>
        <div>
            <button type="submit">Masuk</button>
        </div>
    </form>

</body>
</html>

