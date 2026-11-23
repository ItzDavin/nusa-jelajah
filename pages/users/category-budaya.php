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

    <link rel="stylesheet" href="../../styles/users/category-budaya.css">
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
                <a href="category-danau.php">DANAU</a>
                <a href="category-budaya.php" style="background-color: #A7F3D0;">BUDAYA</a>
                <a href="category-alam.php">ALAM</a>
            </div>
        </div>
    </div>

    <div class="title">
        <h3>Destinasi Budaya</h3>
        <a href="home.php">Back</a>
    </div>

    <div class="destination">
        <div class="card">
            <img src="../../images/cultures/ratenggaro.png" alt="ratenggaro">
            <div class="card-info">
                <h4>Desa Adat Ratenggaro<span class="heart">&hearts;</span></h4>
                <p>Desa adat dengan rumah panggung beratap tinggi dan peman...</p>
                <small>&#9733; 4.6</small>
            </div>
        </div>

        <div class="card">
            <img src="../../images/cultures/gangga.png" alt="gangga">
            <div class="card-info">
                <h4>Istana Tirta Gangga<span class="heart">&hearts;</span></h4>
                <p>Istana air peninggalan kerajaan dengan kolam, patung, dan taman yang can...</p>
                <small>&#9733; 4.7</small>
            </div>
        </div>

        <div class="card">
            <img src="../../images/cultures/sentalu.png" alt="sentalu">
            <div class="card-info">
                <h4>Museum Ullen Sentalu<span class="heart">&hearts;</span></h4>
                <p>Museum budaya Jawa yang menyimpan kisah dan koleksi kerajaan ya...</p>
                <small>&#9733; 4.8</small>
            </div>
        </div>
    </div>

    <div class="destination">
        <div class="card">
            <img src="../../images/cultures/penglipuran.png" alt="penglipuran">
            <div class="card-info">
                <h4>Desa Penglipuran<span class="heart">&hearts;</span></h4>
                <p>Desa terbersih di dunia dengan rumah adat yang rapi dan suasana ya...</p>
                <small>&#9733; 4.6</small>
            </div>
        </div>

        <div class="card">
            <img src="../../images/cultures/indah.png" alt="indah">
            <div class="card-info">
                <h4>Taman Mini Indah<span class="heart">&hearts;</span></h4>
                <p>Miniatur Indonesia dalam satu tempat, dari rumah adat sampai budaya ti...</p>
                <small>&#9733; 4.7</small>
            </div>
        </div>

    </div>

    <?php include '../../components/user-footer.php'; ?>

</body>
</html>