<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GSK Properti</title>
        <style>
            <?= preg_replace('#[\r\n\t ]+#', ' ', file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'css/nav.css')) ?>
        </style>
    </head>
    <body>
        <!-- Tampilan Navigasi -->
        <header>
            <nav>
                <div class="logo-container">
                    <img src="GSK_PROPERTI-removebg-preview.png" alt="Logo Perusahaan" class="logo">
                </div>
                <div class="nav-bar">
                    <a href="home">Home</a>
                    <a href="about">About Us</a>
                    <a href="sales">Sales</a> 
                    <a href="contact" class="active">Contact</a>
                </div>
            </nav>
        </header>
        <!-- Hubungi Melalui Whatsapp -->
        <div class="contact-whatsapp">
            <img src="" alt=""> <!-- Logo Whatsapp -->
            <h1>Kontak Kami</h1>
            <p>Ingin menjalin kerja sama dengan kami, atau tertarik dengan penawaran kami. Hubungi nomor dibawah ini!</p>
            <button>Kirim Pesan</button>
        </div>

        <!-- Feedback Melalui  Gmail -->
        <div class="contact-gmail">
            <img src="" alt=""> <!-- Logo Gmail -->
            <h1>Feedback</h1>
            <p>Berikan masukan dan saran kepada usaha yang kami jalankan!</p>
            <form action="" method="post">
                <label for="">Nama : </label>
                <input type="text">

                <label for="">Email : </label>
                <input type="text">

                <label for="">Pesan : </label>
                <input type="text">
                
            </form>
        </div>

        <!-- Media Sosial dari Usaha -->
        <div class="media-social">
            <h1>Informasi Lainnya</h1>
            <p>Jangan lupa juga berkunjung ke media sosial kami, untuk informasi lainnya!</p>
            <div id="facebook">
                <img src="" alt=""> <!-- Logo Facebook -->
                <a href="">Nama Profile</a>
            </div>
            <div id="instagram">
                <img src="" alt=""> <!-- Logo Instagram -->
                <a href="">Nama Profile</a>
            </div>
            <div id="twitter">
                <img src="" alt=""> <!-- Logo Twitter -->
                <a href="">Nama Profile</a>
            </div>
            <div id="tiktok">
                <img src="" alt=""> <!-- Logo Tiktok -->
                <a href="">Nama Profile</a>
            </div>
        </div>

        <!-- Kontak Promotor, Pemilik, atau Lainnya -->
        <div class="contact-person">
            <h1>Narahubungi</h1>
            <p></p>
            <img src="" alt=""> <!-- Logo -->
        </div>
    </body>
</html>