<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Putri Island Tropical - Lokasi</title>
  <link rel="stylesheet" href="../../styles/users/location.css">
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
      <a href="location.php" class="tab active">Lokasi</a>
      <a href="package-destination.php" class="tab">Paket</a>
      <a href="review.php" class="tab">Ulasan</a>
      <a href="booking.php" class="tab">Booking</a>
      <a href="plan.php" class="tab">Alat Rencana</a>
    </div>
  </div>
  <!-- Location Content -->
  <main class="location-container">
    <div class="map-box">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15883.829086814923!2d106.5518886!3d-5.5924787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41d675c76240b1%3A0xc6829148f8225a19!2sPulau%20Putri%20Resort!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid%22
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
 
    <div class="info-column">
      <div class="info-item">
        <h3 class="info-title">Alamat</h3>
        <p class="info-text">
          java sea, Kepulauan Seribu, Jakarta, Pulau Harapan, Kepulauan Seribu Utara, Kab. Administrasi Kepulauan Seribu, Daerah Khusus Ibukota Jakarta 14540
        </p>
      </div>
 
      <div class="info-item">
        <h3 class="info-title">Jam Operasional</h3>
        <p class="info-text">Setiap Hari, pukul 08.00 – 21.00 WIB</p>
      </div>
 
      <div class="info-item">
        <h3 class="info-title">No Telepon</h3>
        <p class="info-text">0218281093</p>
      </div>
 
      <div class="info-item">
        <h3 class="info-title">Koordinat</h3>
        <p class="info-text">CH46+Q9 Pulau Harapan, Kab. Administrasi Kepulauan Seribu, Daerah Khusus Ibukota Jakarta</p>
      </div>
    </div>
  </main>
 
</body>
</html>