<?php
$userName = $userName ?? 'User';
$activePage = $activePage ?? '';
?>
<style>
    .navbar {
        background: #50C878;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 30px;
        position: relative;
        z-index: 100;
    }
    .logo img { width: 55px; height: 55px; border-radius: 50%; background: white; object-fit: cover; }
    .menu { display: flex; gap: 60px; }
    .menu a { text-decoration: none; color: #1a3c1a; font-weight: bold; font-size: 18px; }
    .menu a.active { color: white; }

    /* DROPDOWN */
    .user-wrapper { position: relative; }
    .user {
        display: flex; align-items: center; gap: 10px;
        background: #a5e6a1; padding: 6px 20px 6px 6px;
        border-radius: 30px; cursor: pointer;
    }
    .user img { width: 40px; height: 40px; border-radius: 50%; }
    .user span { font-weight: bold; font-size: 18px; }

    .dropdown {
        display: none;
        position: absolute;
        top: 60px; right: 0;
        width: 300px;
        background: white;
        box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        padding: 10px 25px;
        z-index: 999;
    }
    .dropdown.show { display: block; }
    .dropdown a {
        display: flex;
        align-items: center;
        gap: 18px;
        text-decoration: none; color: black;
        font-size: 18px; padding: 16px 0;
        border-bottom: 2px solid #0f766e;
    }
    .dropdown a:last-child { border-bottom: none; }

    /* INI BUAT NYA */
    .dropdown a img {
        width: 28px;
        height: 28px;
        object-fit: contain;
    }
</style>

<div class="navbar">
    <div class="logo">
        <img src="../../images/home/logo.png" alt="Logo">
    </div>
    <div class="menu">
        <a href="home.php" class="<?= $activePage === 'home' ? 'active' : '' ?>">Beranda</a>
        <a href="home.php" class="<?= $activePage === 'destinasi' ? 'active' : '' ?>">Destinasi</a>
        <a href="category-pantai.php" class="<?= $activePage === 'kategori' ? 'active' : '' ?>">Kategori</a>
        <a href="package-main.php" class="<?= $activePage === 'paket' ? 'active' : '' ?>">Paket</a>
    </div>

    <div class="user-wrapper">
        <div class="user" onclick="toggleDropdown(event)">
            <img src="../../images/home/user.png" alt="User">
            <span><?= htmlspecialchars($userName) ?></span>
        </div>
        <div class="dropdown" id="userDropdown">
            <a href="profile.php">
                <img src="../../images/home/user.png" alt=""> Profil
            </a>
            <a href="login.php">
                <img src="../../images/home/logout.png" alt=""> Logout
            </a>
            <a href="notification.php">
                <img src="../../images/home/notif.png" alt=""> Notifikasi
            </a>
            <a href="appearance.php">
                <img src="../../images/home/appearance.png" alt=""> Appearance
            </a>
            <a href="privacy.php">
                <img src="../../images/home/privacy.png" alt=""> Privacy & Security
            </a>
        </div>
    </div>
</div>

<script>
    function toggleDropdown(event) {
        event.stopPropagation();
        document.getElementById('userDropdown').classList.toggle('show');
    }
    document.addEventListener('click', function() {
        const dd = document.getElementById('userDropdown');
        if (dd) dd.classList.remove('show');
    });
</script>