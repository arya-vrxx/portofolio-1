<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login | ya arya</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="background"></div>
  <div class="background-overlay"></div>

  <header>
    <div class="logo">✦ PORTFOLIO</div>
    <nav><a href="index.html">← Porto</a></nav>
  </header>

  <main style="display: flex; justify-content: center; align-items: center; min-height: 80vh;">
    
    <div style="width: 320px; background: rgba(0, 0, 0, 0.5); border: 1px solid rgba(255, 255, 255, 0.2); padding: 25px; border-radius: 8px;">
      
      <h2 style="text-align: center; margin-bottom: 15px; color: #fff;">Login System</h2>

      <!-- NOTIFIKASI -->
      <?php if (isset($_SESSION['pesan'])): ?>
        <p style="color: #ff8080; font-size: 0.85rem; text-align: center; margin-bottom: 15px;">
          <?php echo $_SESSION['pesan']; unset($_SESSION['pesan']); ?>
        </p>
      <?php endif; ?>

      <form action="ceklog.php" method="POST">
        <label style="color: #ccc; font-size: 0.85rem;">Username</label>
        <input type="text" name="username" required style="width: 100%; padding: 8px; margin: 5px 0 15px; background: rgba(255,255,255,0.05); border: 1px solid #444; color: #fff; box-sizing: border-box;">

        <label style="color: #ccc; font-size: 0.85rem;">Password</label>
        <input type="password" name="password" required style="width: 100%; padding: 8px; margin: 5px 0 20px; background: rgba(255,255,255,0.05); border: 1px solid #444; color: #fff; box-sizing: border-box;">

        <button type="submit" style="width: 100%; padding: 10px; background: rgba(255,255,255,0.1); border: 1px solid #666; color: #fff; cursor: pointer;">MASUK</button>
      </form>

    </div>

  </main>

</body>
</html>