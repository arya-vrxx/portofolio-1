<?php

require 'inilayout/header.php';
require 'inilayout/sidebar.php';

$current = basename($_SERVER['PHP_SELF']);
?>


<!-- ============================================================ -->
<!-- ✂️ BAGIAN 1: SIMPAN DARI ATAS SAMPAI DI SINI SEBAGAI: header.php -->
<!-- ============================================================ -->


      <!-- MAIN CONTENT (KONTEN UTAMA DITENGAH) -->
      <main class="main-content">
        <div class="welcome-card">
          <small>ADMIN DASHBOARD</small>
          <h2>Selamat datang, <span><?php echo htmlspecialchars($_SESSION['username'] ?? 'User'); ?></span></h2>
          <p>Role: <strong><?php echo htmlspecialchars($_SESSION['role'] ?? 'Guest'); ?></strong></p>
        </div>
      </main>

<!-- ============================================================ -->
<!-- ✂️ BAGIAN 3: BLOK <main> DI ATAS ADALAH ISI: dashboard.php -->
<!-- ============================================================ -->

<?php require 'inilayout/footer.php'; ?>