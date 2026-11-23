<?php
$userName = 'User';
$activePage = 'kategori';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NusaJelajah - Home</title>

    <link rel="stylesheet" href="../../styles/users/category-danau.css">
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

            <div class="category">
                <a href="category-pantai.php">PANTAI</a>
                <a href="category-gunung.php">GUNUNG</a>
                <a href="category-danau.php" style="background-color: #A7F3D0;" >DANAU</a>
                <a href="category-budaya.php">BUDAYA</a>
                <a href="category-alam.php">ALAM</a>
            </div>
        </div>
    </div>

    <div class="title">
        <h3>Destinasi Danau</h3>
        <a href="home.php">Back</a>
    </div>

    <div class="destination">
        <div class="card">
            <img src="../../images/lakes/toba.png" alt="toba">
            <div class="card-info">
                <h4>Danau Toba<span class="heart">&hearts;</span></h4>
                <p>Danau vulkanik terbesar di Asia Tenggara dengan Pulau Samo...</p>
                <small>&#9733; 4.6</small>
            </div>
        </div>

        <div class="card">
            <img src="../../images/lakes/twin.png" alt="twin">
            <div class="card-info">
                <h4>The Twin Lake<span class="heart">&hearts;</span></h4>
                <p>Dua danau kembar yang berdampingan dengan pemandangan hijau ya...</p>
                <small>&#9733; 4.7</small>
            </div>
        </div>

        <div class="card">
            <img src="../../images/lakes/talang.png" alt="talang">
            <div class="card-info">
                <h4>Danau Talang<span class="heart">&hearts;</span></h4>
                <p>Danau tersembunyi dengan air yang tenang dan suasana yang mas...</p>
                <small>&#9733; 4.8</small>
            </div>
        </div>
    </div>

    <div class="destination">
        <div class="card">
            <img src="../../images/lakes/laguna.png" alt="laguna">
            <div class="card-info">
                <h4>Danau Laguna<span class="heart">&hearts;</span></h4>
                <p>Danau cantik dikelilingi perbukitan hijau dengan sunset yang bikin melo...</p>
                <small>&#9733; 4.6</small>
            </div>
        </div>
    </div>

    <footer>
        <div class="left">
            <div class="logo-footer">
                <img src="../../images/footer/logo.jpg" alt="">
            </div>
            <div class="social">
                <img src="../../images/footer/youtube.png" alt="">
                <img src="../../images/footer/twitter.png" alt="">
                <img src="../../images/footer/tiktok.png" alt="">
                <img src="../../images/footer/instagram.png" alt="">
            </div>
            <div class="left-text" style="margin-left: 50px; color: white;">
                <p>2026 NusaJelajah. Semua hak dilindungi.</p>
            </div>
        </div>
        <div class="middle">
            <a href="">Bantuan</a>
            <a href="">FAQ</a>
            <a href="">Panduan</a>
            <a href="">Kebijakan Privasi</a>
            <a href="">Syarat dan Ketentuan</a>
            <a href="">Hubungi Kami</a>
        </div>
        <div class="right">
            <p>Support@nusajelajah.id</p>
            <p>+62 895 3355 93100</p>
            <p>Jl. Danau Sentarum Gg. <br>Haji Rademan Pontianak/ <br>Kalimatan Barat</p>
            <p>Ikuti Perkembangan Kami</p>
            <div class="search-box">
                <span class="search-icon">
                    🔍
                </span>
                <input type="text" placeholder="Masukan Email">
            </div>
        </div>
    </footer>

</body>
</html>