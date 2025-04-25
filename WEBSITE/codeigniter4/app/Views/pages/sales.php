<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSK Properti - Sales Unit</title>
    <style>
        <?= preg_replace('#[\r\n\t ]+#', ' ', file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'css/sales.css')) ?>
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
                <a href="sales" class="active">Sales</a> 
                <a href="contact">Contact</a>
            </div>
        </nav>
    </header>

    <section class="main-content">
        <h2>Unit for Sale</h2>
        <div class="gallery-container">
            <div class="gallery-item" onclick="openLightbox('img/unit1-depan.jpg')">
                <img src="Enscape_2025-03-05-11-28-21.jpg" alt="Tampak Depan">
                <div class="gallery-desc">Tampak Depan Unit</div>
            </div>
            <div class="gallery-item" onclick="openLightbox('img/unit1-samping.jpg')">
                <img src="Enscape_2025-03-05-11-28-21.jpg" alt="Tampak Samping">
                <div class="gallery-desc">Tampak Samping Unit</div>
            </div>
            <div class="gallery-item" onclick="openLightbox('img/unit1-atas.jpg')">
                <img src="Enscape_2025-03-05-11-28-21.jpg" alt="Tampak Atas">
                <div class="gallery-desc">Tampak Atas Unit</div>
            </div>
        </div>

        <h2>Denah Lingkungan Unit</h2>
        <div class="gallery-container">
            <div class="gallery-item" onclick="openLightbox('img/denah1.jpg')">
                <img src="Denah-Komplek-Perumahan-Townhouse-1024x656.jpg" alt="Denah 1">
                <div class="gallery-desc">Denah 1</div>
            </div>
            <div class="gallery-item" onclick="openLightbox('img/denah2.jpg')">
                <img src="Denah-Komplek-Perumahan-Townhouse-1024x656.jpg" alt="Denah 2">
                <div class="gallery-desc">Denah 2</div>
            </div>
            <div class="gallery-item" onclick="openLightbox('img/denah3.jpg')">
                <img src="Denah-Komplek-Perumahan-Townhouse-1024x656.jpg" alt="Denah 3">
                <div class="gallery-desc">Denah 3</div>
            </div>
        </div>

        <h2>Unit Location</h2>
        <div class="maps" style="margin: 30px 0; text-align: center;">
            <iframe src="https://g.co/kgs/d9nsS8j" width="350" height="250" style="border:0; border-radius:10px;" allowfullscreen="" loading="lazy"></iframe>
            <div style="margin-top:10px;">
                <a href="#" style="color:#004080; font-weight:bold;">Lihat di Google Maps</a>
            </div>
        </div>

        <div class="description" style="text-align: center; margin-top: 30px;">
            <a href="unit_description.php" style="font-size:1.1rem; color:#004080; border:1px solid #004080; border-radius:8px; padding:10px 24px; transition:background 0.2s;">About Unit</a>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div class="lightbox" id="lightbox" onclick="closeLightbox()">
        <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
        <img id="lightbox-img" src="" alt="Preview">
    </div>
    <script>
        function openLightbox(src) {
            document.getElementById('lightbox').classList.add('active');
            document.getElementById('lightbox-img').src = src;
        }
        function closeLightbox() {
            document.getElementById('lightbox').classList.remove('active');
            document.getElementById('lightbox-img').src = '';
        }
    </script>
</body>
</html>