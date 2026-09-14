<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$username = $_POST['username'];
$password = $_POST['password'];
// asumsi sudah ada proses cek ke database
if ($username == 'iniadmin' && $password == '13245768') {
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

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Gagal | ya arya</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="background"></div>
  <div class="background-overlay"></div>

  <header>
    <div class="logo">✦ PORTFOLIO</div>
    <nav><a href="login.php">← Coba Lagi</a></nav>
  </header>

  <main style="display: flex; justify-content: center; align-items: center; min-height: 80vh; padding: 20px;">
    
    <!-- CARD PESAN ERROR -->
    <div style="width: 350px; background: rgba(0, 0, 0, 0.4); border: 1px solid rgba(255, 77, 77, 0.4); padding: 30px; border-radius: 12px; backdrop-filter: blur(8px); text-align: center;">
      
      <small style="color: #ff4d4d; letter-spacing: 1.5px; font-size: 0.75rem;">ERROR ACCESS</small>
      
      <h2 style="margin: 15px 0; font-size: 1.1rem; color: #fff;">
        <?php echo isset($error) ? $error : 'Akses Ditolak'; ?>
      </h2>

      <p style="color: #a0aec0; font-size: 0.85rem; margin-bottom: 20px;">
        Periksa kembali username dan password yang kamu masukkan.
      </p>

      <a href="login.php" style="text-decoration: none;">
        <button type="button" 
          style="width: 100%; padding: 12px; background: rgba(255, 77, 77, 0.2); border: 1px solid #ff4d4d; color: #fff; border-radius: 8px; cursor: pointer; font-family: 'Orbitron', sans-serif; font-size: 0.85rem; font-weight: 500; transition: 0.3s;"
          onmouseover="this.style.background='#ff4d4d';" 
          onmouseout="this.style.background='rgba(255, 77, 77, 0.2)';" >
          KEMBALI KE LOGIN
        </button>
      </a>

    </div>

  </main>

</body>
</html>