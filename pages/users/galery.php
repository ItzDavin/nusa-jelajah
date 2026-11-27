<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Putri Island Tropical - Galeri</title>
  <link rel="stylesheet" href="../../styles/users/galery.css">
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
      <a href="galery.php" class="tab active">Galeri</a>
      <a href="location.php" class="tab">Lokasi</a>
      <a href="package-destination.php" class="tab">Paket</a>
      <a href="review.php" class="tab">Ulasan</a>
      <a href="booking.php" class="tab">Booking</a>
      <a href="plan.php" class="tab">Alat Rencana</a>
    </div>
  </div>
 
  <!-- Gallery Section -->
  <main class="gallery-container">
    <div class="slider-wrapper">
      <button class="nav-btn prev-btn" aria-label="Sebelumnya">&#10094;</button>
     
      <div class="gallery-image-box">
        <img src="../../images/galery/kolam.png" alt="Kolam Renang Resort">
      </div>
     
      <button class="nav-btn next-btn" aria-label="Selanjutnya">&#10095;</button>
    </div>
  </main>
 
</body>
</html>