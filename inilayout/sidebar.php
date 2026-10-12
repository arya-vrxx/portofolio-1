    <!-- DASHBOARD BODY (CONTAINER DUA KOLOM) -->
    <div class="dashboard-body">
      
      <!-- SIDEBAR KIRI -->
      <aside class="sidebar">
        <div class="sidebar-menu">
          <a href="dashboard.php" class="sidebar-link <?php echo ($current == 'dashboard.php') ? 'active' : ''; ?>">Dashboard</a>
          <a href="meprofile.php" class="sidebar-link <?php echo ($current == 'meprofile.php') ? 'active' : ''; ?>">Profile</a>
          <a href="projects.php" class="sidebar-link <?php echo ($current == 'projects.php') ? 'active' : ''; ?>">Projects</a>
          <a href="index.html" class="sidebar-link <?php echo ($current == 'index.html') ? 'active' : ''; ?>">Portofolio</a>
        </div>
        <a href="logout.php" class="sidebar-link logout-link">Logout</a>
      </aside>