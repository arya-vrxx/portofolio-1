<?php
require_once __DIR__ . '/config/database.php';

// Logika simpan data bawaan kamu (TIDAK DIUBAH)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['namaProject'];
    $deskripsi = $_POST['deskripsi'];
    $teknologi = $_POST['teknologi'];
    $tautan = $_POST['link'];
    $dibuatPada = $_POST['createdAt']; 
    
    $stmt = $pdo->prepare(
        'INSERT INTO iniprojects (namaProject, deskripsi, teknologi, link, createdAt)
        VALUES (:namaProject, :deskripsi, :teknologi, :link, :createdAt)'
    );
    
    $stmt->execute([
        'namaProject' => $judul,
        'deskripsi' => $deskripsi,
        'teknologi' => $teknologi,
        'link' => $tautan,
        'createdAt' => $dibuatPada,
    ]);
    
    header('Location: projects.php');
    exit;
}

require 'inilayout/header.php';
require 'inilayout/sidebar.php';
?>


<main class="main-content">
  <div class="welcome-card" style="max-width: 600px; width: 100%; text-align: left;">

    <div class="card-header">
      <h1>Tambah Project Baru</h1>
      <a href="projects.php" class="btn-add" style="background: rgba(255,255,255,0.08); border-color: rgba(255,255,255,0.2);">← Kembali</a>
    </div>

    <form method="post" class="dashboard-form">
      
      <div class="form-group">
        <label for="namaProject">Judul Project *</label>
        <input type="text" id="namaProject" name="namaProject" required>
      </div>

      <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea id="deskripsi" name="deskripsi" rows="4"></textarea>
      </div>

      <div class="form-group">
        <label for="teknologi">Teknologi</label>
        <input type="text" id="teknologi" name="teknologi" placeholder="Contoh: PHP, MySQL">
      </div>

      <div class="form-group">
        <label for="link">Tautan (Link)</label>
        <input type="url" id="link" name="link" placeholder="https://...">
      </div>

      <div class="form-group">
        <label for="createdAt">Tanggal Dibuat *</label>
        <input type="date" id="createdAt" name="createdAt" required>
      </div>

      <div style="margin-top: 20px; text-align: right;">
        <button type="submit" class="btn-add">Simpan Project</button>
      </div>

    </form>

  </div>
</main>

<?php 
require 'inilayout/footer.php'; 
?>