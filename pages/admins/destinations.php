<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Panel Admin: Kelola Destinasi</title>
  <link rel="stylesheet" href="../../styles/admin/admin.css">
</head>
<body>

  <div class="sidebar">
    <h2>Admin</h2>
    <a href="dashboard.php">Dashboard</a>
    <a href="destinations.php" class="active">Kelola Destinasi</a>
    <a href="packages.php">Kelola Paket</a>
    <a href="users.php">Kelola User</a>
    <a href="../users/login.php">Log Out</a>
  </div>

  <div class="content">
    <h2 style="color:white; margin-bottom:15px;">Panel Admin: Kelola Destinasi</h2>
    <div class="card-box">
      <h3>Daftar Destinasi</h3><br>

      <div class="list-item">
        <div class="info">
          <img src="../img/raja-ampat.jpg">
          <div><b>Raja Ampat</b><br><small>Papua Barat | Rp 2.500.000</small></div>
        </div>
        <div>
          <button class="btn btn-green">Edit</button>
          <button class="btn btn-red">Hapus</button>
        </div>
      </div>

      <div class="list-item">
        <div class="info">
          <img src="../img/danau-toba.jpg">
          <div><b>Danau Toba</b><br><small>Sumatera Utara | Rp 1.200.000</small></div>
        </div>
        <div>
          <button class="btn btn-green">Edit</button>
          <button class="btn btn-red">Hapus</button>
        </div>
      </div>

      <div class="btn-row">
        <button class="btn btn-green">Previous</button>
        <button class="btn btn-green">Next</button>
      </div>
    </div>
  </div>

</body>
</html>