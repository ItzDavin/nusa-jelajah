<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Paket Wisata</title>
  <link rel="stylesheet" href="../../styles/users/booking.css">
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
      <a href="review.php" class="tab">Ulasan</a>
      <a href="booking.php" class="tab active">Booking</a>
      <a href="plan.php" class="tab">Alat Rencana</a>
    </div>
  </div>

  <!-- Booking Content -->
  <main class="booking-container">
    <h2 class="section-title">Booking Paket Wisata</h2>

    <form class="booking-form" id="bookingForm">
      
      <!-- Jumlah Hari -->
      <div class="form-group">
        <label class="form-label">Pilih jumlah hari</label>
        <div class="counter-box">
          <button type="button" class="counter-btn" id="daysMinus">-</button>
          <span class="counter-value" id="daysCount">0</span>
          <button type="button" class="counter-btn" id="daysPlus">+</button>
        </div>
        <div class="price-info" id="daysPrice">RP: -</div>
      </div>

      <!-- Pilih Tanggal -->
      <div class="form-group">
        <label class="form-label">Pilih Tanggal</label>
        <input type="date" class="date-input" id="bookingDate">
      </div>

      <!-- Jumlah Orang -->
      <div class="form-group">
        <label class="form-label">Jumlah Orang</label>
        <div class="counter-box">
          <button type="button" class="counter-btn" id="personsMinus">-</button>
          <span class="counter-value" id="personsCount">0</span>
          <button type="button" class="counter-btn" id="personsPlus">+</button>
        </div>
        <div class="total-label">Total:</div>
        <div class="price-info" id="totalPrice">RP: -</div>
      </div>

      <!-- Tombol Confirm -->
      <button type="submit" class="btn-confirm">Confirm Booking</button>
    </form>
  </main>

  <!-- POPUP 1 : CALCULATING -->
  <div class="popup-overlay" id="popupCalculating">
    <div class="popup-box">
      <p class="popup-text">Calculating...</p>
      <div class="progress-bar">
        <div class="progress-fill" id="progressFill"></div>
      </div>
    </div>
  </div>

  <!-- POPUP 2 : PEMBAYARAN SELESAI + DETAIL -->
  <div class="popup-overlay" id="popupSuccess">
    <div class="popup-box">
      <p class="popup-title">Pembayaran Selesai</p>

      <!-- Detail Pembayaran, tanpa nama lokasi -->
      <div class="detail-box">
        <div class="detail-row">
          <span>Tanggal</span>
          <span id="detailDate">-</span>
        </div>
        <div class="detail-row">
          <span>Jumlah Hari</span>
          <span id="detailDays">-</span>
        </div>
        <div class="detail-row">
          <span>Jumlah Orang</span>
          <span id="detailPersons">-</span>
        </div>
        <div class="detail-row total-row">
          <span>Total Bayar</span>
          <span id="detailTotal">-</span>
        </div>
      </div>

      <button type="button" class="btn-popup-ok" id="btnPopupOk">OK</button>
    </div>
  </div>

  <script>
    // 1. HARGA DASAR
    const HARGA = 500000;

    // 2. DATA AWAL
    let days = 0;
    let persons = 0;

    // 3. AMBIL ELEMEN DARI HTML
    const daysCount = document.getElementById('daysCount');
    const daysPrice = document.getElementById('daysPrice');
    const personsCount = document.getElementById('personsCount');
    const totalPrice = document.getElementById('totalPrice');
    const bookingDate = document.getElementById('bookingDate');
    const bookingForm = document.getElementById('bookingForm');
    const popupCalculating = document.getElementById('popupCalculating');
    const popupSuccess = document.getElementById('popupSuccess');
    const progressFill = document.getElementById('progressFill');
    const btnPopupOk = document.getElementById('btnPopupOk');

    // Elemen detail di popup sukses
    const detailDate = document.getElementById('detailDate');
    const detailDays = document.getElementById('detailDays');
    const detailPersons = document.getElementById('detailPersons');
    const detailTotal = document.getElementById('detailTotal');

    // 4. FUNGSI FORMAT RUPIAH
    function formatRupiah(angka) {
      if (angka === 0) return "RP: -";
      return "RP: " + angka.toLocaleString('id-ID');
    }

    // 5. FUNGSI HITUNG & TAMPILKAN HARGA
    function hitungHarga() {
      daysCount.textContent = days;
      personsCount.textContent = persons;

      let hargaHari = days * HARGA;
      let total = days * persons * HARGA;

      daysPrice.textContent = formatRupiah(hargaHari);
      totalPrice.textContent = formatRupiah(total);
    }

    // 6. TOMBOL TAMBAH / KURANG HARI
    document.getElementById('daysPlus').onclick = function() {
      days++;
      hitungHarga();
    };
    document.getElementById('daysMinus').onclick = function() {
      if (days > 0) days--;
      hitungHarga();
    };

    // 7. TOMBOL TAMBAH / KURANG ORANG
    document.getElementById('personsPlus').onclick = function() {
      persons++;
      hitungHarga();
    };
    document.getElementById('personsMinus').onclick = function() {
      if (persons > 0) persons--;
      hitungHarga();
    };

    // 8. KETIKA TOMBOL CONFIRM DIKLIK
    bookingForm.onsubmit = function(e) {
      e.preventDefault(); // Biar halaman tidak reload

      // Cek dulu, kalau masih kosong jangan lanjut
      if (days === 0 || persons === 0 || bookingDate.value === '') {
        alert('Pilih tanggal, jumlah hari, dan jumlah orang dulu!');
        return;
      }

      // Isi detail pembayaran ke popup sukses
      let total = days * persons * HARGA;
      detailDate.textContent = bookingDate.value;
      detailDays.textContent = days + ' Hari';
      detailPersons.textContent = persons + ' Orang';
      detailTotal.textContent = formatRupiah(total);

      // Tampilkan popup Calculating
      popupCalculating.classList.add('show');
      progressFill.style.width = '0%';

      // Jalankan bar sampai 100%
      setTimeout(function() {
        progressFill.style.width = '100%';
      }, 50);

      // Setelah 1.5 detik, ganti ke popup Sukses
      setTimeout(function() {
        popupCalculating.classList.remove('show');
        popupSuccess.classList.add('show');
      }, 1500);
    };

    // 9. KETIKA TOMBOL OK DI POPUP DIKLIK
    btnPopupOk.onclick = function() {
      popupSuccess.classList.remove('show');
      window.location.href = 'home.php';
    };
  </script>

</body>
</html>