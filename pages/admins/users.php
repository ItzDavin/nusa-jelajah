<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Panel Admin: Kelola User</title>
  <link rel="stylesheet" href="../../styles/admin/admin.css">
</head>
<body>

  <div class="sidebar">
    <h2>Admin</h2>
    <a href="dashboard.php">Dashboard</a>
    <a href="destinations.php">Kelola Destinasi</a>
    <a href="packages.php">Kelola Paket</a>
    <a href="users.php" class="active">Kelola User</a>
    <a href="../users/login.php">Log Out</a>
  </div>

  <div class="content">
    <h2 style="color:white; margin-bottom:15px;">Panel Admin: Kelola User</h2>
    <div class="card-box">
      <h3>Daftar Pengguna</h3><br>

      <!-- User Aktif -->
      <div class="list-item">
        <div class="info">
          <div>
            <b>Andi Pratama</b><br>
            <small>andi@gmail.com</small><br>
            <span class="status-active">Aktif</span>
          </div>
        </div>
        <button class="btn btn-red">Ban User</button>
      </div>

      <!-- User Sudah Di-ban -->
      <div class="list-item">
        <div class="info">
          <div>
            <b>Budi Santoso</b><br>
            <small>budi@gmail.com</small><br>
            <span class="status-banned">Di-ban</span>
          </div>
        </div>
        <button class="btn btn-green">Unban</button>
      </div>

      <!-- User Aktif -->
      <div class="list-item">
        <div class="info">
          <div>
            <b>Siti Rahma</b><br>
            <small>siti@gmail.com</small><br>
            <span class="status-active">Aktif</span>
          </div>
        </div>
        <button class="btn btn-red">Ban User</button>
      </div>

      <div class="btn-row">
        <button class="btn btn-green">Previous</button>
        <button class="btn btn-green">Next</button>
      </div>
    </div>
  </div>

</body>
</html>