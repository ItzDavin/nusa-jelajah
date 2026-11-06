
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Travelly</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../styles/users/contact.css">
</head>

<body>

    <!-- Header -->
    <div class="header">

        <div class="left">
            <a href="login.php">
                <button id="login">LOGIN</button>
            </a>
        </div>

        <div class="right">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="package.php">Tour Package</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php" class="active">Contact Us</a></li>
            </ul>
        </div>

    </div>


    <!-- Contact Section -->
    <div class="contact-container">

        <!-- Contact Form -->
        <div class="contact-form">

            <form action="#" method="POST">

                <div class="input-row">
                    <input type="text" name="nama" placeholder="Name" required>

                    <input type="email" name="email" placeholder="Email" required>
                </div>

                <input type="tel" name="telepon" placeholder="Number Address" required>

                <input type="text" name="keterangan" placeholder="Information">

                <input type="text" name="subject" placeholder="Subject" required>

                <textarea name="pesan" placeholder="Message" required></textarea>

                <button type="submit" class="send-button">
                    Send Message
                </button>

            </form>

        </div>


        <!-- Contact Image -->
        <div class="contact-image">

            <img src="../../images/contact/contact_us_2.jpg" alt="Contact Us">

        </div>

    </div>


    <!-- Footer / Tagline -->
    <div class="footer">

        <p>
            Setiap Pertanyaan Adalah Langkah Awal Baru Menuju Petualangan Baru
        </p>

    </div>

</body>
</html>
