<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NusaJelajah - Home</title>

    <link rel="stylesheet" href="../../styles/users/home.css">
</head>

    <?php
    $activePage = 'home';
    $userName = 'User';
    include '../../components/user-header.php';
    ?>

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
                <a href="home.php">GUNUNG</a>
                <a href="home.php">DANAU</a>
                <a href="home.php">BUDAYA</a>
                <a href="home.php">ALAM</a>
            </div>
        </div>
    </div>

    <div class="title">
        <h3>Destinasi Populer</h3>
        <a href="home.php">Lihat Semua</a>
    </div>

    <div class="destination">
        <div class="card">
            <img src="../../images/home/gunung.png" alt="Gunung Bromo">
            <div class="card-info">
                <h4>Gunung Bromo <span class="heart">&hearts;</span></h4>
                <p>Nikmati sunrise terbaik di atas lautan pasir dan kawah yan....</p>
                <small>&#9733; 4.6</small>
            </div>
        </div>

        <div class="card">
            <img src="../../images/home/raja.png" alt="Raja Ampat">
            <div class="card-info">
                <h4>Raja Ampat <span class="heart">&hearts;</span></h4>
                <p>Surga bawah laut dengan air sebening kaca dan pulau-pulau karst yan...</p>
                <small>&#9733; 4.7</small>
            </div>
        </div>

        <div class="card">
            <img src="../../images/home/toba.png" alt="Danau Toba">
            <div class="card-info">
                <h4>Danau Toba <span class="heart">&hearts;</span></h4>
                <p>Danau vulkanik terbesar di Asia Tenggara dengan Pulau Samos...</p>
                <small>&#9733; 4.8</small>
            </div>
        </div>
    </div>

    <div class="title">
        <h3>Destinasi Sekitar</h3>
        <a href="home.php">Lihat Semua</a>
    </div>

    <div class="destination">
        <div class="card">
            <img src="../../images/home/putri.png" alt="Putri Island">
            <div class="card-info">
                <h4>Putri Island Tropical <span class="heart">&hearts;</span></h4>
                <p>Pulau kecil yang cantik dengan pantai pasir putih dan cottage di atas a...</p>
                <small>&#9733; 4.6</small>
            </div>
        </div>

        <div class="card">
            <img src="../../images/home/bali.png" alt="Bali">
            <div class="card-info">
                <h4>Bali <span class="heart">&hearts;</span></h4>
                <p>Pulau Dewata yang selalu punya cerita. Pantai, pura, sawah hijau, dan sun...</p>
                <small>&#9733; 4.7</small>
            </div>
        </div>

        <div class="card">
            <img src="../../images/home/sugi.png" alt="Pulau Sugi">
            <div class="card-info">
                <h4>Pulau Sugi <span class="heart">&hearts;</span></h4>
                <p>Pulau tersembunyi dengan pantai sepi dan pemandangan yang mas...</p>
                <small>&#9733; 4.6</small>
            </div>
        </div>
    </div>

    <div class="title">
        <h3>Rekomendasi</h3>
        <a href="home.php">Lihat Semua</a>
    </div>

    <div class="destination">
        <div class="card">
            <img src="../../images/home/komodo.png" alt="Komodo National Park">
            <div class="card-info">
                <h4>Komodo National Park <span class="heart">&hearts;</span></h4>
                <p>Rumahnya komodo, pantai pink yang langka, dan spot snorkeling kel...</p>
                <small>&#9733; 4.8</small>
            </div>
        </div>

        <div class="card">
            <img src="../../images/home/kari.png" alt="Karimunjawa">
            <div class="card-info">
                <h4>Karimunjawa <span class="heart">&hearts;</span></h4>
                <p>Kepulauan dengan laut turquoise dan pasir putih yang halus. Snorke...</p>
                <small>&#9733; 4.7</small>
            </div>
        </div>

        <div class="card">
            <img src="../../images/home/seribu.png" alt="Kepulauan Seribu">
            <div class="card-info">
                <h4>Kepulauan Seribu <span class="heart">&hearts;</span></h4>
                <p>Liburan singkat dari Jakarta tapi rasanya jauh banget. Pulau-pu....</p>
                <small>&#9733; 4.8</small>
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