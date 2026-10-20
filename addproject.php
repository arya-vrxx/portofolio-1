<?php
require_once __DIR__ . '/config/database.php';

$error_msg = []; // buat nampung error


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $judul = trim($_POST['namaProject'] ?? '');
  $deskripsi = trim($_POST['deskripsi'] ?? '');
  $teknologi = trim($_POST['teknologi'] ?? '');
  $tautan = trim($_POST['link'] ?? '');
  $dibuatPada = trim($_POST['createdAt'] ?? '');

  if ($judul === '') {
    $error_msg[] = "Judul Project wajib diisi.";
  }

  if ($dibuatPada === '') {
    $error_msg[] = "Tanggal Dibuat wajib diisi.";
  }

  if (empty($error_msg)) {
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
}

require 'inilayout/header.php';
require 'inilayout/sidebar.php';
?>


<main class="main-content">
  <div class="welcome-card" style="max-width: 600px; width: 100%; text-align: left;">

    <div class="card-header">
      <h1>Tambah Project Baru</h1>
      <a href="projects.php" class="btn-add"
        style="background: rgba(255,255,255,0.08); border-color: rgba(255,255,255,0.2);">← Kembali</a>
    </div>

    <?php if (!empty($errors)): ?>
      <ul style="color: red;">
        <?php foreach ($errors as $pesan): ?>
          <li><?= htmlspecialchars($pesan) ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <form method="post" class="dashboard-form">

      <div class="form-group">
        <label for="namaProject">Judul Project *</label>
        <input type="text" id="namaProject" name="namaProject" required value="<?= htmlspecialchars($judul ?? '')?>">
      </div>

      <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea id="deskripsi" name="deskripsi" rows="4"><?= htmlspecialchars($deskripsi ?? '') ?></textarea>
      </div>

      <div class="form-group">
        <label for="teknologi">Teknologi</label>
        <input type="text" id="teknologi" name="teknologi" placeholder="Contoh: PHP, MySQL" value="<?= htmlspecialchars($teknologi ?? '') ?>">
      </div>

      <div class="form-group">
        <label for="link">Tautan (Link)</label>
        <input type="url" id="link" name="link" placeholder="https://..." value="<?= htmlspecialchars($tautan ?? '') ?>">
      </div>

      <div class="form-group">
        <label for="createdAt">Tanggal Dibuat *</label>
        <input type="date" id="createdAt" name="createdAt" required value="<?= htmlspecialchars($dibuatPada ?? '') ?>">
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