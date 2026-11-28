<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Panel Admin: Dashboard</title>
  <link rel="stylesheet" href="../../styles/admin/admin.css">
</head>
<body>

  <div class="sidebar">
    <h2>Admin</h2>
    <a href="dashboard.php" class="active">Dashboard</a>
    <a href="destinations.php">Kelola Destinasi</a>
    <a href="packages.php">Kelola Paket</a>
    <a href="users.php">Kelola User</a>
    <a href="../users/login.php">Log Out</a>
  </div>

  <div class="content">
    <h2 style="color:white; margin-bottom:15px;">Panel Admin: Dashboard</h2>

    <div class="card-box">
      <h3 style="margin-bottom:15px;">RINGKASAN DATA</h3>
      <div class="top-cards">
        <div class="top-card"><span>Total Destinasi</span><b>24</b></div>
        <div class="top-card"><span>Total Kategori</span><b>6</b></div>
        <div class="top-card"><span>Total Paket</span><b>12</b></div>
        <div class="top-card"><span>Total User</span><b>150</b></div>
      </div>

      <h3>Destinasi Baru</h3>
      <div class="list-item">
        <div class="info">
          <img src="../img/raja-ampat.jpg" alt="Raja Ampat">
          <div>
            <b>Raja Ampat</b><br>
            <small>Papua Barat</small>
          </div>
        </div>
        <span>★ 4.9</span>
      </div>
    </div>
  </div>

</body>
</html>