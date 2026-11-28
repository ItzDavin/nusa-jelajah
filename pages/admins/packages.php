<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Panel Admin: Kelola Paket</title>
  <link rel="stylesheet" href="../../styles/admin/admin.css">
</head>
<body>

  <div class="sidebar">
    <h2>Admin</h2>
    <a href="dashboard.php">Dashboard</a>
    <a href="destinations.php">Kelola Destinasi</a>
    <a href="packages.php" class="active">Kelola Paket</a>
    <a href="users.php">Kelola User</a>
    <a href="../users/login.php">Log Out</a>
  </div>

  <div class="content">
    <h2 style="color:white; margin-bottom:15px;">Panel Admin: Kelola Paket</h2>
    <div class="card-box">
      <h3>Daftar Paket</h3><br>

      <div class="list-item">
        <div class="info">
          <img src="../img/paket1.jpg">
          <div><b>Paket Keluarga</b><br><small>3 Hari 2 Malam | Rp 3.500.000</small></div>
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