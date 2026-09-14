<?php
session_start();
require 'session.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard | ya arya</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="background"></div>
  <div class="background-overlay"></div>

  <header>
    <div class="logo">✦ DASHBOARD</div>
    <nav><a href="logout.php" style="color:#ff4d4d;">Logout</a></nav>
  </header>

  <!-- KONTEN CARD DI TENGAH HALAMAN -->
  <main style="display: flex; justify-content: center; align-items: center; min-height: 75vh; padding: 20px;">
    
    <div style="background: rgba(0, 0, 0, 0.4); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 12px; padding: 30px; text-align: center; max-width: 400px; width: 100%;">
      <small style="color: #a0aec0; letter-spacing: 2px;">WELCOME ADMIN</small>
      
      <h2 style="margin: 10px 0;">
        Halo, <span style="color: #b388ff;"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
      </h2>
      
      <p style="color: #a0aec0; margin-bottom: 0;">
        Role: <strong style="color: #fff;"><?php echo htmlspecialchars($_SESSION['role']); ?></strong>
      </p>
    </div>

  </main>

</body>
</html>