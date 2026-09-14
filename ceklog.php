<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$username = $_POST['username'];
$password = $_POST['password'];
// asumsi sudah ada proses cek ke database
if ($username == 'iniadmin' && $password == 'admin13245768') {
// simpan data ke session
$_SESSION['is_login'] = true;
$_SESSION['username'] = $username;
$_SESSION['role'] = 'admin';
header('Location: dashboard.php');
exit();
} else {
echo "Username atau password salah";
$error = 'Username atau password salah';
}
}
?>