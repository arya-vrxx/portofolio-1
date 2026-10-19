<?php

$databasePath = __DIR__ . '/config/database.php';

if (file_exists($databasePath)) {
    require_once $databasePath;
} else {
    
    require_once __DIR__ . '/../config/database.php';
}

$projects = [];
$error_msg = '';

try {
    if (isset($pdo)) {
        $stmt = $pdo->query("SELECT * FROM iniprojects ORDER BY id DESC");
        $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $error_msg = "Koneksi database (\$pdo) tidak ditemukan.";
    }
} catch (PDOException $e) {
    $error_msg = "Query Error: " . $e->getMessage();
}


require 'inilayout/header.php';
require 'inilayout/sidebar.php';
?>

<main class="main-content">
  <div class="welcome-card">

    <div class="card-header">
      <h1>Project Dashboard</h1>
      <a href="addproject.php" class="btn-add">+ Project Baru</a>
    </div>

    <?php if (!empty($error_msg)): ?>
        <p style="color: #ff4d4d; background: rgba(255,77,77,0.1); padding: 10px; border-radius: 6px;">
            ⚠️ <?php echo htmlspecialchars($error_msg); ?>
        </p>
    <?php endif; ?>

    <?php if (count($projects) === 0): ?>
        <p style="color: #88889e; margin-top: 15px;">Tidak ada project yang ditemukan di database.</p>
    <?php else: ?>
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Teknologi</th>
                    <th>Tautan</th>
                    <th>Tanggal Dibuat</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($projects as $project): ?>
                <tr>
                    <td><?php echo htmlspecialchars($project['namaProject'] ?? ''); ?></td>
                    <td><?php echo htmlspecialchars($project['deskripsi'] ?? ''); ?></td>
                    <td><?php echo htmlspecialchars($project['teknologi'] ?? ''); ?></td>
                    <td>
                        <?php if (!empty($project['link'])): ?>
                            <a href="<?php echo htmlspecialchars($project['link']); ?>" target="_blank">Lihat Project</a>
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>
                    <td><?php echo htmlspecialchars($project['createdAt'] ?? ''); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

  </div>
</main>

<?php require 'inilayout/footer.php'; ?>