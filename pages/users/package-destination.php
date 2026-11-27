<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Putri Island Tropical - Paket Wisata</title>
  <link rel="stylesheet" href="../../styles/users/package-destination.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
 
  <!-- Navbar -->
    <?php
    $activePage = 'destinasi';
    $userName = 'User';
    include '../../components/user-header.php';
    ?>
 
  <!-- Hero Banner -->
  <section class="hero-banner">
    <img src="../../images/overview/putri.png" alt="Putri Island Resort">
  </section>
 
  <!-- Sub-Navigation Tabs -->
  <div class="tabs-wrapper">
    <div class="tabs-container">
      <a href="overview.php" class="tab">Overview</a>
      <a href="galery.php" class="tab">Galeri</a>
      <a href="location.php" class="tab">Lokasi</a>
      <a href="package-destination.php" class="tab active">Paket</a>
      <a href="review.php" class="tab">Ulasan</a>
      <a href="booking.php" class="tab">Booking</a>
      <a href="plan.php" class="tab">Alat Rencana</a>
    </div>
  </div>
 
  <!-- Package Content -->
  <main class="package-container">
    <div class="package-header">
      <h2 class="section-title">Paket Wisata</h2>
      <a href="#" class="see-all">Lihat Semua</a>
    </div>
 
    <div class="package-grid">
      <!-- Card 1 -->
      <div class="package-card">
        <div class="card-img">
          <img src="../../images/package/picture1.png" alt="Paket 2 Hari 1 Malam">
        </div>
        <div class="card-body">
          <h3 class="package-title">Paket 2 Hari 1 Malam</h3>
          <ul class="package-features">
            <li>Transportasi</li>
            <li>Resor</li>
            <li>Makan Sarapan Gratis (2 kali)</li>
            <li>1 tiket gratis scuba Diving</li>
          </ul>
          <div class="package-price">Rp 1.250.000 <span class="per-pax">/ orang</span></div>
        </div>
      </div>
 
      <!-- Card 2 -->
      <div class="package-card">
        <div class="card-img">
          <img src="../../images/package/picture2.png" alt="Paket 3 Hari 2 Malam (Keluarga)">
        </div>
        <div class="card-body">
          <h3 class="package-title">Paket 3 Hari 2 Malam (Keluarga)</h3>
          <ul class="package-features">
            <li>Transportasi</li>
            <li>Resor</li>
            <li>Makan Sarapan Gratis (3 kali)</li>
            <li>5 Tiket Gratis Banana Boat</li>
          </ul>
          <div class="package-price">Rp 2.850.000 <span class="per-pax">/ orang</span></div>
        </div>
      </div>
 
      <!-- Card 3 -->
      <div class="package-card">
        <div class="card-img">
          <img src="../../images/package/picture3.png" alt="Paket 1 Hari">
        </div>
        <div class="card-body">
          <h3 class="package-title">Paket 1 Hari</h3>
          <ul class="package-features">
            <li>Transportasi</li>
            <li>Tiket Diskon Sarapan</li>
            <li>1 tiket gratis scuba Diving</li>
            <li>1 Tiket Kolam Renang</li>
          </ul>
          <div class="package-price">Rp 500.000 <span class="per-pax">/ orang</span></div>
        </div>
      </div>
    </div>
  </main>
 
</body>
</html>