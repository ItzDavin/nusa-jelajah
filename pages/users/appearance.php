<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NusaJelajah - Appearance</title>

    <link rel="stylesheet" href="../../styles/users/appearance.css">
</head>

<body>

    <div class="profile-container">
        <div class="edit-card top-card">
            <a href="home.php" class="back-btn">Back</a>

            <h2>Text Size & Density</h2>
            <p class="section-desc">Kostumisasi tampilan ukuran teks sendiri</p>

            <div class="pref-row first-row">
                <span class="pref-label">Font Size:</span>
                <div class="radio-group">
                    <label class="radio-label">
                        <input type="radio" name="font_size" value="small"> Small
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="font_size" value="medium"> Medium (Default)
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="font_size" value="large"> Large
                    </label>
                </div>
            </div>

            <div class="pref-row">
                <span class="pref-label">Card Layout:</span>
                <div class="radio-group">
                    <label class="radio-label">
                        <input type="radio" name="card_layout" value="comfortable"> Comfortable
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="card_layout" value="compact"> Compact
                    </label>
                </div>
            </div>
        </div>

        <div class="edit-card">
            <h2>Travel Display Preferences</h2>
            <p class="section-desc">Kostumisasi tampilanmu sendiri</p>
            
            <div class="notif-item">
                <div class="notif-info">
                    <h4>Redupkan foto destinasi yang terlalu terang dalam Mode Gelap</h4>
                    <p>Melunakkan foto pantai dan salju yang sangat silau saat dilihat di malam hari (tingkat kecerahan 90%).</p>
                </div>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>

            <div class="notif-item">
                <div class="notif-info">
                    <h4>Alihkan peta interaktif ke Tema Gelap secara otomatis</h4>
                    <p>Menyesuaikan peta rute dan penanda hotel dengan mode tema yang Anda pilih.</p>
                </div>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>

            <div class="notif-item">
                <div class="notif-info">
                    <h4>Tampilan boarding pass & tiket dengan kontras tinggi</h4>
                    <p>Memaksa latar belakang putih cerah pada kode QR agar lebih mudah dipindai di bandara.</p>
                </div>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>

            <div class="form-actions">
                <a href="appearance.php" class="reset-btn">Reset Default</a>
                <button type="submit" class="save-btn">Save</button>
            </div>
        </div>
    </div>

</body>
</html>