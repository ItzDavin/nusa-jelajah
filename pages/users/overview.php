<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Putri Island Tropical</title>
  <link rel="stylesheet" href="../../styles/users/overview.css">
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
      <a href="#" class="tab active">Overview</a>
      <a href="#" class="tab">Galeri</a>
      <a href="#" class="tab">Lokasi</a>
      <a href="#" class="tab">Paket</a>
      <a href="#" class="tab">Ulasan</a>
      <a href="#" class="tab">Booking</a>
      <a href="#" class="tab">Alat Rencana</a>
    </div>
  </div>
 
  <!-- Main Content -->
  <main class="main-content">
    <div class="left-column">
      <a href="#" class="back-link">Back</a>
      <h1 class="title">Putri Island Tropical</h1>
      <p class="description">
        Putri Island Resort merupakan destinasi wisata bahari yang menawarkan keindahan alam laut, pantai yang memukau, serta suasana yang tenang dan menyegarkan. Pengunjung dapat menikmati pemandangan laut yang jernih, menjelajahi keindahan bawah laut, serta melakukan berbagai aktivitas menarik seperti snorkeling dan bersantai bersama keluarga atau teman. Dengan pesona alamnya yang menawan, Putri Island Resort menjadi pilihan yang tepat bagi wisatawan yang ingin menikmati liburan yang menyenangkan dan berkesan.
      </p>
 
      <div class="tags">
        <span class="tag">PANTAI</span>
        <span class="tag">DANAU</span>
        <span class="tag">BUDAYA</span>
        <span class="tag">ALAM</span>
      </div>
 
      <button class="btn-booking">BOOKING NOW</button>
    </div>
 
    <div class="right-column">
      <div class="image-card">
        <img src="../../images/overview/gambar1.png" alt="Tenda Pantai">
      </div>
      <div class="image-card">
        <img src="../../images/overview/gambar2.png" alt="Pemandangan Alam">
      </div>
    </div>
  </main>
 
</body>
</html>