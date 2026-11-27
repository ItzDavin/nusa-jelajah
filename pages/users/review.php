<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Putri Island Tropical - Ulasan</title>
  <link rel="stylesheet" href="../../styles/users/review.css">
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
      <a href="package-destination.php" class="tab">Paket</a>
      <a href="review.php" class="tab active">Ulasan</a>
      <a href="booking.php" class="tab">Booking</a>
      <a href="plan.php" class="tab">Alat Rencana</a>
    </div>
  </div>

  <!-- Reviews Content -->
  <main class="reviews-container">
    <h2 class="section-title">Rating Dan Ulasan Pengunjung</h2>
 
    <!-- Rating Summary Card -->
    <div class="summary-card">
      <div class="score-box">
        <div class="score-number">4.5</div>
        <div class="stars">
          <span>★</span><span>★</span><span>★</span><span>★</span><span class="half">★</span>
        </div>
        <div class="total-reviews">Berdasarkan 1.000 Ulasan</div>
      </div>
 
      <div class="bars-box">
        <div class="bar-row">
          <span class="bar-label">Bintang 5</span>
          <div class="progress-track">
            <div class="progress-fill" style="width: 79%;"></div>
          </div>
          <span class="bar-percent">79%</span>
        </div>
        <div class="bar-row">
          <span class="bar-label">Bintang 4</span>
          <div class="progress-track">
            <div class="progress-fill" style="width: 69%;"></div>
          </div>
          <span class="bar-percent">69%</span>
        </div>
        <div class="bar-row">
          <span class="bar-label">Bintang 3</span>
          <div class="progress-track">
            <div class="progress-fill" style="width: 65%;"></div>
          </div>
          <span class="bar-percent">65%</span>
        </div>
        <div class="bar-row">
          <span class="bar-label">Bintang 2</span>
          <div class="progress-track">
            <div class="progress-fill" style="width: 25%;"></div>
          </div>
          <span class="bar-percent">25%</span>
        </div>
        <div class="bar-row">
          <span class="bar-label">Bintang 1</span>
          <div class="progress-track">
            <div class="progress-fill" style="width: 10%;"></div>
          </div>
          <span class="bar-percent">10%</span>
        </div>
      </div>
    </div>
 
    <!-- Reviews List Card -->
    <div class="reviews-list-card">
      <div class="filter-bar">
        <select class="filter-select">
          <option>Semua Rating</option>
          <option>Bintang 5</option>
          <option>Bintang 4</option>
          <option>Bintang 3</option>
          <option>Bintang 2</option>
          <option>Bintang 1</option>
        </select>
 
        <select class="filter-select">
          <option>Terbaru</option>
          <option>Terlama</option>
        </select>
      </div>
 
      <div class="review-items">
        <!-- Review Item 1 -->
        <div class="review-item">
          <div class="reviewer-avatar">👤</div>
          <div class="review-body">
            <div class="review-header">
              <span class="reviewer-name">User</span>
              <span class="review-time">10 Jam Lalu</span>
            </div>
            <p class="review-text">
              Pemandangannya luar biasa dengan pulau-pulau yang indah maupun peginapannya sudah cukup bersih!
            </p>
            <div class="review-actions">
              <button class="like-btn">👍 <span>5</span></button>
              <button class="reply-btn">Reply</button>
            </div>
          </div>
        </div>
 
        <!-- Review Item 2 -->
        <div class="review-item">
          <div class="reviewer-avatar">👤</div>
          <div class="review-body">
            <div class="review-header">
              <span class="reviewer-name">User</span>
              <span class="review-time">2 Jam Lalu</span>
            </div>
            <p class="review-text">
              Penginapannya rapi dan juga bersih di dalam, terutama pengalaman di sebuah pulau sangat luar biasa dan menyenangkan
            </p>
            <div class="review-actions">
              <button class="like-btn">👍 <span>2</span></button>
              <button class="reply-btn">Reply</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
 
</body>
</html>