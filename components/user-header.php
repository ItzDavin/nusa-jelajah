<?php
$userName = $userName ?? 'User';
$activePage = $activePage ?? '';
?>
<style>
    .menu a.active {
        color: white;
    }
</style>
<div class="navbar">
    <div class="logo">
        <img src="../../images/home/logo.png" alt="Logo">
    </div>

    <div class="menu">
        <a href="home.php" class="<?= ($activePage ?? '') === 'home' ? 'active' : '' ?>">Beranda</a>
        <a href="home.php" class="<?= ($activePage ?? '') === 'destinasi' ? 'active' : '' ?>">Destinasi</a>
        <a href="category-pantai.php" class="<?= ($activePage ?? '') === 'kategori' ? 'active' : '' ?>">Kategori</a>
        <a href="package-main.php" class="<?= ($activePage ?? '') === 'paket' ? 'active' : '' ?>">Paket</a>
    </div>

    <div class="user">
        <img src="../../images/home/user.png" alt="User">
        <span><?= htmlspecialchars($userName) ?></span>
    </div>
</div>