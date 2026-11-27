<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alat Rencana - Booking Paket Wisata</title>
  <link rel="stylesheet" href="../../styles/users/plan.css">
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
      <a href="booking.php" class="tab">Booking</a>
      <a href="plan.php" class="tab active">Alat Rencana</a>
    </div>
  </div>

  <!-- Main Content -->
  <main class="planner-container">

    <!-- Section 1: Itinerary Generator -->
    <section class="planner-section">
      <h2 class="section-title">Itinerary Generator</h2>
      <p class="section-subtitle">Buat Rencanamu secara otomatis sesuai prefensimu</p>

      <div class="form-row">
        <div class="form-group">
          <label class="form-label">Pilih Durasi Hari</label>
          <div class="counter-box">
            <button type="button" class="counter-btn" id="itinMinus">-</button>
            <span class="counter-value" id="itinDays">0</span>
            <button type="button" class="counter-btn" id="itinPlus">+</button>
          </div>
        </div>

        <div class="form-group flex-fill">
          <label class="form-label">Tujuan / Lokasi</label>
          <input type="text" class="text-input" id="itinTujuan" placeholder="Masukan Lokasi Tujuan Mu">
        </div>

        <div class="form-group flex-fill">
          <label class="form-label">Jenis Transportasi</label>
          <div class="custom-dropdown" id="transportDropdown">
            <button type="button" class="dropdown-trigger" id="dropdownTrigger">
              <span id="selectedTransport">Select</span>
              <span class="dropdown-arrow">⌄</span>
            </button>
            <ul class="dropdown-menu" id="dropdownMenu">
              <li class="dropdown-item" data-value="Daratan">Daratan</li>
              <li class="dropdown-item" data-value="Lautan">Lautan</li>
              <li class="dropdown-item" data-value="Udara">Udara</li>
            </ul>
          </div>
        </div>
      </div>

      <button type="button" class="btn-action" id="btnGenerate">GENERATE NOW!</button>
    </section>

    <!-- Section 2: Budget Calculator -->
    <section class="planner-section">
      <h2 class="section-title">Budget Calculator</h2>
      <p class="section-subtitle">Hitung estimasi biaya perjalananmu dengan mudah</p>

      <div class="form-row">
        <div class="form-group">
          <label class="form-label">Pilih Durasi Hari</label>
          <div class="counter-box rounded-counter">
            <button type="button" class="counter-btn" id="budgetDaysMinus">-</button>
            <span class="counter-value" id="budgetDays">0</span>
            <button type="button" class="counter-btn" id="budgetDaysPlus">+</button>
          </div>
        </div>

        <div class="form-group">
          <label class="form-label">Jumlah Orang</label>
          <div class="counter-box rounded-counter">
            <button type="button" class="counter-btn" id="budgetPersonsMinus">-</button>
            <span class="counter-value" id="budgetPersons">0</span>
            <button type="button" class="counter-btn" id="budgetPersonsPlus">+</button>
          </div>
        </div>

        <div class="form-group flex-fill">
          <label class="form-label">Tujuan / Lokasi</label>
          <input type="text" class="text-input" id="budgetTujuan" placeholder="Masukan Lokasi Tujuan Mu">
        </div>

        <div class="form-group flex-fill">
          <label class="form-label">Diskon (Jika ada)</label>
          <input type="number" class="text-input" id="budgetDiskon" placeholder="Masukan Nominal Diskon">
        </div>
      </div>

      <button type="button" class="btn-action" id="btnHitung">HITUNG SEKARANG!</button>
    </section>

  </main>

  <!-- POPUP 1 : CALCULATING - dipakai bareng untuk Generate & Hitung -->
  <div class="popup-overlay" id="popupCalculating">
    <div class="popup-box">
      <p class="popup-text">Calculating...</p>
      <div class="progress-bar">
        <div class="progress-fill" id="progressFill"></div>
      </div>
    </div>
  </div>

  <!-- POPUP 2 : HASIL ITINERARY -->
  <div class="popup-overlay" id="popupItin">
    <div class="popup-box popup-big">
      <p class="popup-title">Rencana Perjalananmu</p>
      <p class="popup-sub" id="itinInfo">-</p>
      <div class="detail-box" id="itinList"></div>
      <button type="button" class="btn-popup-ok" id="btnItinOk">OK</button>
    </div>
  </div>

  <!-- POPUP 3 : HASIL BUDGET -->
  <div class="popup-overlay" id="popupBudget">
    <div class="popup-box">
      <p class="popup-title">Estimasi Budget</p>
      <div class="detail-box">
        <div class="detail-row"><span>Jumlah Hari</span><span id="detailBudgetDays">-</span></div>
        <div class="detail-row"><span>Jumlah Orang</span><span id="detailBudgetPersons">-</span></div>
        <div class="detail-row"><span>Biaya Per Hari / Orang</span><span id="detailBudgetHarga">-</span></div>
        <div class="detail-row"><span>Diskon</span><span id="detailBudgetDiskon">-</span></div>
        <div class="detail-row total-row"><span>Total Bayar</span><span id="detailBudgetTotal">-</span></div>
      </div>
      <button type="button" class="btn-popup-ok" id="btnBudgetOk">OK</button>
    </div>
  </div>

  <script>
    // 1. HARGA DASAR - sama kayak di booking
    const HARGA = 500000;

    // 2. DATA AWAL
    let itinDays = 0;
    let budgetDays = 0;
    let budgetPersons = 0;

    // 3. FUNGSI FORMAT RUPIAH
    function formatRupiah(angka) {
      if (angka === 0) return "RP: -";
      return "RP: " + angka.toLocaleString('id-ID');
    }

    // 4. FUNGSI TAMPILKAN POPUP CALCULATING
    // dipakai untuk Generate & Hitung, biar tidak nulis 2x
    function showCalculating(laluJalankan) {
      let popupCalculating = document.getElementById('popupCalculating');
      let progressFill = document.getElementById('progressFill');

      popupCalculating.classList.add('show');
      progressFill.style.width = '0%';

      setTimeout(function() {
        progressFill.style.width = '100%';
      }, 50);

      // Setelah 1.5 detik, tutup Calculating, jalankan popup hasil
      setTimeout(function() {
        popupCalculating.classList.remove('show');
        laluJalankan();
      }, 1500);
    }

    // 5. TOMBOL ITINERARY - TAMBAH / KURANG HARI
    document.getElementById('itinPlus').onclick = function() {
      itinDays++;
      document.getElementById('itinDays').textContent = itinDays;
    };
    document.getElementById('itinMinus').onclick = function() {
      if (itinDays > 0) itinDays--;
      document.getElementById('itinDays').textContent = itinDays;
    };

    // 6. TOMBOL BUDGET - TAMBAH / KURANG HARI & ORANG
    document.getElementById('budgetDaysPlus').onclick = function() {
      budgetDays++;
      document.getElementById('budgetDays').textContent = budgetDays;
    };
    document.getElementById('budgetDaysMinus').onclick = function() {
      if (budgetDays > 0) budgetDays--;
      document.getElementById('budgetDays').textContent = budgetDays;
    };
    document.getElementById('budgetPersonsPlus').onclick = function() {
      budgetPersons++;
      document.getElementById('budgetPersons').textContent = budgetPersons;
    };
    document.getElementById('budgetPersonsMinus').onclick = function() {
      if (budgetPersons > 0) budgetPersons--;
      document.getElementById('budgetPersons').textContent = budgetPersons;
    };

    // 7. DROPDOWN TRANSPORTASI
    const dropdown = document.getElementById('transportDropdown');
    const trigger = document.getElementById('dropdownTrigger');
    const selectedText = document.getElementById('selectedTransport');
    const items = document.querySelectorAll('.dropdown-item');

    trigger.onclick = function(e) {
      e.stopPropagation();
      dropdown.classList.toggle('open');
    };
    items.forEach(function(item) {
      item.onclick = function() {
        selectedText.textContent = item.getAttribute('data-value');
        dropdown.classList.remove('open');
      };
    });
    document.onclick = function(e) {
      if (!dropdown.contains(e.target)) dropdown.classList.remove('open');
    };

    // 8. TOMBOL GENERATE NOW!
    document.getElementById('btnGenerate').onclick = function() {
      let tujuan = document.getElementById('itinTujuan').value;
      let transport = selectedText.textContent;

      if (itinDays === 0 || tujuan === '' || transport === 'Select') {
        alert('Isi durasi hari, tujuan, dan transportasi dulu!');
        return;
      }

      // Tampilkan Calculating dulu, baru tampilkan hasil
      showCalculating(function() {
        // Isi judul popup
        document.getElementById('itinInfo').textContent = tujuan + ' - ' + transport + ' - ' + itinDays + ' Hari';

        // Buat list per hari otomatis
        let kegiatan = ['Kedatangan & Check-in', 'Jelajah Wisata Utama', 'Aktivitas Air / Alam', 'Kuliner & Belanja Oleh-oleh', 'Bersantai & Check-out'];
        let hasil = '';
        for (let i = 1; i <= itinDays; i++) {
          let isi = kegiatan[(i - 1) % kegiatan.length];
          hasil += '<div class="detail-row"><span>Hari ' + i + '</span><span>' + isi + '</span></div>';
        }
        document.getElementById('itinList').innerHTML = hasil;

        document.getElementById('popupItin').classList.add('show');
      });
    };

    document.getElementById('btnItinOk').onclick = function() {
      document.getElementById('popupItin').classList.remove('show');
    };

    // 9. TOMBOL HITUNG SEKARANG!
    document.getElementById('btnHitung').onclick = function() {
      if (budgetDays === 0 || budgetPersons === 0) {
        alert('Pilih jumlah hari dan jumlah orang dulu!');
        return;
      }

      let diskon = parseInt(document.getElementById('budgetDiskon').value) || 0;
      let total = (budgetDays * budgetPersons * HARGA) - diskon;
      if (total < 0) total = 0;

      showCalculating(function() {
        document.getElementById('detailBudgetDays').textContent = budgetDays + ' Hari';
        document.getElementById('detailBudgetPersons').textContent = budgetPersons + ' Orang';
        document.getElementById('detailBudgetHarga').textContent = formatRupiah(HARGA);
        document.getElementById('detailBudgetDiskon').textContent = formatRupiah(diskon);
        document.getElementById('detailBudgetTotal').textContent = formatRupiah(total);

        document.getElementById('popupBudget').classList.add('show');
      });
    };

    document.getElementById('btnBudgetOk').onclick = function() {
      document.getElementById('popupBudget').classList.remove('show');
    };
  </script>

</body>
</html>