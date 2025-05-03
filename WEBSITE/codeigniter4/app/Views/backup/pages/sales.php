<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSK Properti - Sales Unit</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/sales.css">
</head>
<body>
    <!-- Tampilan Navigasi -->
    <header>
            <nav>
                <div class="logo-container">
                    <img src="/img/logo.jpg" alt="Logo Perusahaan" class="logo" style="border-radius: 50px;">
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
        <div class="location-section">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1124.7763972733471!2d122.46517687392424!3d-3.975172079256433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zM8KwNTgnMjkuMiJTIDEyMsKwMjcnNTQuMCJF!5e1!3m2!1sen!2sid!4v1745825855588!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="description" style="text-align: center; margin-top: 30px;">
            <a href="unit" style="font-size:1.1rem; color:#004080; border:1px solid #004080; border-radius:8px; padding:10px 24px; transition:background 0.2s;">About Unit</a>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div class="lightbox" id="lightbox" onclick="closeLightbox()">
        <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
        <img id="lightbox-img" src="" alt="Preview">
    </div>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="/img/logo.jpg" alt="GSK Properti Logo" style="border-radius: 50px;">
                </div>
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="sales.php">Sales</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h3>Contact Us</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Jl. Properti No. 123, Kendari</p>
                    <p><i class="fas fa-phone"></i> +62 812 3456 7890</p>
                    <p><i class="fas fa-envelope"></i> info@gskproperti.com</p>
                </div>
                <div class="footer-social">
                    <h3>Follow Us</h3>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 GSK Properti. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    
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