<?php 
session_start();
require 'inilayout/session.php';
$current = basename($_SERVER['PHP_SELF']);


?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="side.css">
</head>
<body>

  <div class="background"></div>
  <div class="background-overlay"></div>

  <div class="dashboard-wrapper">
    
    <!-- HEADER -->
    <header class="dashboard-header">
      <div class="logo">+ DASHBOARD</div>
      <nav>
        <a href="dashboard.php" class="active">Dashboard</a>
        <a href="meprofile.php">Profile</a>
        <a href="logout.php" class="logout">Logout</a>
      </nav>
    </header>
