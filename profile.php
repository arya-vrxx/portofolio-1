<?php
session_start();
require 'session.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profile | ya arya</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="background"></div>
  <div class="background-overlay"></div>

  <!-- HEADER / NAVBAR -->
  <header style="display: flex; justify-content: space-between; align-items: center; padding: 20px;">
    <div class="logo">✦ PORTFOLIO</div>
    <nav style="display: flex; gap: 15px;">
      <a href="dashboard.php">Dashboard</a>
      <a href="profile.php" style="color: #b388ff;">Profile</a>
      <a href="logout.php" style="color: #ff4d4d;">Logout</a>
    </nav>
  </header>

  <!-- KONTEN UTAMA -->
  <main style="display: flex; justify-content: center; align-items: center; min-height: 75vh;">
    <div style="width: 350px; background: rgba(0, 0, 0, 0.5); border: 1px solid rgba(255, 255, 255, 0.2); padding: 25px; border-radius: 8px; text-align: center;">
      <small style="color: #a0aec0; letter-spacing: 1.5px; font-size: 0.75rem;">MY PROFILE</small>
      <h2 style="margin: 10px 0 5px 0; color: #fff;">
        Bagus <span style="color: #b388ff;">Arya</span> Wijaya
      </h2>
      <p style="color: #a0aec0; font-size: 0.85rem; margin-bottom: 5px;">@ya_arya</p>
      <p style="color: #fff; font-weight: bold; font-size: 0.9rem; margin-bottom: 15px;">Jr. Web Developer</p>
      
      <p style="font-style: italic; color: #ccc; font-size: 0.8rem; margin-bottom: 15px;">
        "Utter to me what you think is ideal."
      </p>

      <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 15px; font-size: 0.85rem; text-align: left; color: #a0aec0;">
        <p style="margin-bottom: 8px;"><strong>Role:</strong> <?php echo htmlspecialchars($_SESSION['role']); ?></p>
        <p style="margin-bottom: 8px;"><strong>Lokasi:</strong> Samarinda</p>
        <p><strong>Keahlian:</strong> HTML, CSS, JS, Mekanik Sepeda</p>
      </div>
    </div>
  </main>

</body>
</html>