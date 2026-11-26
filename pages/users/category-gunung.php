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

    <link rel="stylesheet" href="../../styles/users/category-gunung.css">
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
                <a href="category-gunung.php" style="background-color: #A7F3D0;" >GUNUNG</a>
                <a href="category-danau.php">DANAU</a>
                <a href="category-budaya.php">BUDAYA</a>
                <a href="category-alam.php">ALAM</a>
            </div>
        </div>
    </div>

    <div class="title">
        <h3>Destinasi Gunung</h3>
        <a href="home.php">Back</a>
    </div>

    <div class="destination">
        <div class="card">
            <img src="../../images/mountains/bromo.png" alt="bromo">
            <div class="card-info">
                <h4>Gunung Bromo<span class="heart">&hearts;</span></h4>
                <p>unrise terbaik di atas lautan pasir dan kawah yang ikonik. Dingin, ma...</p>
                <small>&#9733; 4.6</small>
            </div>
        </div>

        <div class="card">
            <img src="../../images/mountains/krakatau.png" alt="krakatau">
            <div class="card-info">
                <h4>Gunung krakatau <span class="heart">&hearts;</span></h4>
                <p>Gunung berapi legendaris yang lahir dari letusan dahsyat. Pemand...</p>
                <small>&#9733; 4.7</small>
            </div>
        </div>

        <div class="card">
            <img src="../../images/mountains/rejani.png" alt="rejani">
            <div class="card-info">
                <h4>Gunung Renjani<span class="heart">&hearts;</span></h4>
                <p>Danau Segara Anak yang cantik di puncak dan jalur pendakian yan...</p>
                <small>&#9733; 4.8</small>
            </div>
        </div>
    </div>

    <div class="destination">
        <div class="card">
            <img src="../../images/mountains/jayawijaya.png" alt="jayawijaya">
            <div class="card-info">
                <h4>Gunung jayawijaya<span class="heart">&hearts;</span></h4>
                <p>Puncak tertinggi di Indonesia dengan salju abadi di atasnya. Megah, lang...</p>
                <small>&#9733; 4.6</small>
            </div>
        </div>

        <div class="card">
            <img src="../../images/mountains/semeru.png" alt="semeru">
            <div class="card-info">
                <h4>Gunung semeru<span class="heart">&hearts;</span></h4>
                <p>unung tertinggi di Pulau Jawa dengan Puncak Mahameru yang legen...</p>
                <small>&#9733; 4.7</small>
            </div>
        </div>

        <div class="card">
            <img src="../../images/mountains/kerinci.png" alt="kerinci">
            <div class="card-info">
                <h4>Gunung kerinci<span class="heart">&hearts;</span></h4>
                <p>Gunung berapi tertinggi di Sumatra dengan kebun teh yang hij...</p>
                <small>&#9733; 4.6</small>
            </div>
        </div>
    </div>

    <?php include '../../components/user-footer.php'; ?>

</body>
</html>