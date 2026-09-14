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

  <!-- HEADER / NAVBAR -->
  <header style="display: flex; justify-content: space-between; align-items: center; padding: 20px;">
    <div class="logo">✦ DASHBOARD</div>
    <nav style="display: flex; gap: 15px;">
      <a href="dashboard.php" style="color: #b388ff;">Dashboard</a>
      <a href="profile.php">Profile</a>
      <a href="logout.php" style="color: #ff4d4d;">Logout</a>
    </nav>
  </header>

  <!-- KONTEN UTAMA -->
  <main style="display: flex; justify-content: center; align-items: center; min-height: 75vh;">
    <div style="width: 320px; background: rgba(0, 0, 0, 0.5); border: 1px solid rgba(255, 255, 255, 0.2); padding: 25px; border-radius: 8px; text-align: center;">
      <small style="color: #a0aec0; letter-spacing: 1.5px; font-size: 0.75rem;">ADMIN DASHBOARD</small>
      <h2 style="margin: 15px 0 10px 0; font-size: 1.2rem; color: #fff;">
        Selamat datang, <span style="color: #b388ff;"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
      </h2>
      <p style="color: #a0aec0; font-size: 0.9rem;">
        Role: <strong style="color: #fff;"><?php echo htmlspecialchars($_SESSION['role']); ?></strong>
      </p>
    </div>
  </main>

</body>
</html>