<?php
$userName = 'User';
$activePage = 'home';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NusaJelajah - Home</title>

    <link rel="stylesheet" href="../../styles/users/home.css">
</head>


    <!-- NAVBAR -->
    <?php include '../../components/user-header.php'; ?>

    <div class="banner">
        <p class="subtitle">Jelajahi keindahan indonesia</p>
        <h2>Temukan Destinasi Impianmu</h2>
        <p class="desc">
            Dari pantai ekstosis hingga yang menakjubkan<br>
            temukan berbagai destinasi wisata terbaik di seluruh indonesia
        </p>

        <div class="search-and-category">
            <div class="search-box">
                <span class="search-icon">
                    🔍
                </span>
                <input type="text" placeholder="CARI DESTINASI">
            </div>
        </div>
    </div>

    <div class="title">
        <h3>Rekomendasi Paket</h3>
        <a href="home.php">Lihat Semua</a>
    </div>

    <div class="destination">
        <div class="card">
            <img src="../../images/package/picture1.png" alt="Pulau Indah">
            <div class="card-info">
                <h4>Paket 2 Hari 1 Malam</h4>
                <p class="destination-name">Destinasi: Pulau Indah</p>
                <ul class="card-list">
                    <li><p>Transportasi</p></li>
                    <li><p>Resort</p></li>
                    <li><p>Makan Sarapan Gratis (2 kali)</p></li>
                    <li><p>1 tiket gratis scuba Diving</p></li>
                </ul>
                <p class="price">Rp 1.250.000</p>
            </div>
        </div>

        <div class="card">
            <img src="../../images/package/picture2.png" alt="Pulau Indah">
            <div class="card-info">
                <h4>Paket 3 Hari 2 Malam (Keluarga)</h4>
                <p class="destination-name">Destinasi: Pulau Indah</p>
                <ul class="card-list">
                    <li><p>Transportasi</p></li>
                    <li><p>Resort</p></li>
                    <li><p>Makan Sarapan Gratis (3 kali)</p></li>
                    <li><p>5 Tiket Gratis Banana Boat</p></li>
                </ul>
                <p class="price">Rp 2.850.000</p>
            </div>
        </div>

        <div class="card">
            <img src="../../images/package/picture3.png" alt="Pulau Indah">
            <div class="card-info">
                <h4>Paket 1 Hari</h4>
                <p class="destination-name">Destinasi: Pulau Indah</p>
                <ul class="card-list">
                    <li><p>Transportasi</p></li>
                    <li><p>Tiket Diskon Sarapan</p></li>
                    <li><p>1 Tiket gratis scuba Diving</p></li>
                    <li><p>1 Tiket Kolam Renang</p></li>
                </ul>
                <p class="price">Rp 500.000</p>
            </div>
        </div>
    </div>

    <div class="destination">
        <div class="card">
            <img src="../../images/package/picture4.png" alt="Raja Ampat">
            <div class="card-info">
                <h4>Paket 4 Hari 3 malam</h4>
                <p class="destination-name">Destinasi: Raja Ampat</p>
                <ul class="card-list">
                    <li><p>Transportasi</p></li>
                    <li><p>Tiket Diskon Sarapan</p></li>
                    <li><p>1 Tiket gratis scuba Diving</p></li>
                    <li><p>1 Tiket Kolam Renang</p></li>
                </ul>
                <p class="price">Rp 4.350.000</p>
            </div>
        </div>

        <div class="card">
            <img src="../../images/package/picture5.png" alt="Bali">
            <div class="card-info">
                <h4>Paket 1 Hari</h4>
                <p class="destination-name">Destinasi: Bali</p>
                <ul class="card-list">
                    <li><p>Transportasi</p></li>
                    <li><p>Tiket Diskon Sarapan</p></li>
                    <li><p>1 Tiket gratis scuba Diving</p></li>
                    <li><p>1 Tiket surfing</p></li>
                </ul>
                <p class="price">Rp 700.000</p>
            </div>
        </div>

        <div class="card">
            <img src="../../images/package/picture6.png" alt="Kepulauan Seribu">
            <div class="card-info">
                <h4>Paket 2 Hari 1 malam</h4>
                <p class="destination-name">Destinasi: Kepulauan Seribu</p>
                <ul class="card-list">
                    <li><p>Transportasi</p></li>
                    <li><p>Tiket Diskon Sarapan</p></li>
                    <li><p>1 Tiket gratis scuba Diving</p></li>
                    <li><p>1 Tiket Kolam Renang</p></li>
                </ul>
                <p class="price">Rp 2.145.000</p>
            </div>
        </div>
    </div>

    <div class="destination">
        <div class="card">
            <img src="../../images/package/picture7.png" alt="Gunung Bromo">
            <div class="card-info">
                <h4>Paket 3 Hari 2 malam (keluarga)</h4>
                <p class="destination-name">Destinasi: Gunung Bromo</p>
                <ul class="card-list">
                    <li><p>Transportasi</p></li>
                    <li><p>Tiket Diskon Sarapan</p></li>
                    <li><p>1 Tiket gratis scuba Diving</p></li>
                    <li><p>1 pemandu pendakian</p></li>
                </ul>
                <p class="price">Rp 3.456.000</p>
            </div>
        </div>

        <div class="card">
            <img src="../../images/package/picture8.png" alt="Danau Toba">
            <div class="card-info">
                <h4>Paket 4 Hari 3 malam</h4>
                <p class="destination-name">Destinasi: Danau Toba</p>
                <ul class="card-list">
                    <li><p>Transportasi</p></li>
                    <li><p>Tiket Diskon Sarapan</p></li>
                    <li><p>1 Tiket gratis scuba Diving</p></li>
                    <li><p>1 Tiket Speedboat + Kapal</p></li>
                </ul>
                <p class="price">Rp 2.500.000</p>
            </div>
        </div>

        <div class="card">
            <img src="../../images/package/picture9.png" alt="Putri Island Tropical">
            <div class="card-info">
                <h4>Paket 1 Hari</h4>
                <p class="destination-name">Destinasi: Putri Island Tropical</p>
                <ul class="card-list">
                    <li><p>Transportasi</p></li>
                    <li><p>Tiket Diskon Sarapan</p></li>
                    <li><p>1 Tiket gratis scuba Diving</p></li>
                    <li><p>1 Tiket tempat istirahat</p></li>
                </ul>
                <p class="price">Rp 900.000</p>
            </div>
        </div>
    </div>

    <?php include '../../components/user-footer.php'; ?>

</body>
</html>