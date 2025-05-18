<?= $this->extend('pages/main-template/main') ?>
<?= $this->section('content')?>

<main>
    <!-- Main Section -->
    <section class="main">
        <div class="main-content">
            <h1>GSK PROPERTI</h1>
            <p>Memberikan pelayanan terbaik untuk kebutuhan Anda dengan dedikasi dan kepercayaan.</p>
            <img src="img/highlight GSK.jpg" alt="Highlight GSK" class="main-img">
        </div>
    </section>

    <!-- News Section -->
    <section class="centered-title">
        <h2>News Update</h2>
        <button>Edit</button>
        <section class=" news-carousel">
            <div class=" news-card">
                <!-- NEWS 1 -->
                <div class="news-img">
                    <img src="img/Tampak Rumah 3.jpg" alt="news">
                </div>
                <div class="news-text">
                    "News pembangunana di laksanakan pada tanggal 22 agustus tahun 2023"
                </div>
                <div class="date-news">
                    <h3>News: 22/08/2023</h3>
                </div>
            </div>
                <!-- NEWS 2 -->
            <div class="news-card">
                <div class="news-img">
                    <img src="img/Atas Depan.jpg" alt="news">
                </div>
                <div class=" news-text">
                    "Rumah subsidi yang layak dan bagus untuk dimiliki, lokasi cukup strategis dikota Kendari. telah berdasarkan regulasi pemeritah telah terbangun sebanyak 98 unit rumah subsidi. pembangunan terus di laksanakan hingga 200 unit rumah subsidi."
                </div>
                <div class="date-news">
                    <h3>News: 19/12/2023</h3>
                </div>
            </div>
                <!-- NEWS 3 -->
            <div class="news-card">
                <div class="news-img">
                    <img src="img/Tampak Rumah 2.jpg" alt="news">
                </div>
                <div class="news-text">
                    "Perumahan yangtelah telah terjual sebanyak 98 unit dari 112 unit tersedia✨"
                </div>
                <div class="date-news">
                    <h3>News: 02/01/2024</h3>
                </div>
            </div>
        </section>
    </section>

    <!-- Testimonials Section -->
    <section class="centered-title">
        <h2>Customer Reviews</h2>
        <section class="testimonial-carousel">
            <div class="testimonial-card">
                <div class="client-img">
                    <img src="img/Profile.png" alt="Client">
                </div>
                <div class="testimonial-text">
                    "Bersih, rapih tata bangunannya, kurang nya jln masuk menuju komplex perumahan masih tanah, pos security dan tempat pembuangan sampah tdk ada..."
                </div>
                <div class="client-name">Rolly Kakahis</div>
            </div>

            <div class="testimonial-card">
                <div class="client-img">
                    <img src="img/Profile.png" alt="Client">
                </div>
                <div class="testimonial-text">
                    "Rumah subsidi yang layak dan bagus untuk dimiliki, lokasi cukup strategis dikota Kendari"
                </div>
                <div class="client-name">Zuhri Rohamsyah</div>
            </div>

            <div class="testimonial-card">
                <div class="client-img">
                    <img src="img/Profile.png" alt="Client">
                </div>
                <div class="testimonial-text">
                    "Perumahan Dengan Kualitas Premium😍✨"
                </div>
                <div class="client-name">Elmawar Sulfitri</div>
            </div>
        </section>
    </section>

    <!-- Brosur Section -->
    <section class="centered-section">
        <h2>Information</h2>
        <div class="card">
            <div class="card-plus">
                <img src="img/Brosur.jpg" alt="brosur 1">
            </div>
        </div>
    </section>


    <!-- Stakeholders Section -->
    <section class="centered-section">
        <h2>Our Partners</h2>
        <div class="partner-logos">
            <img src="img/btn.png" alt="Partner 1">
            <img src="img/btns.png" alt="Partner 2">
            <img src="img/bsi.png" alt="Partner 3">
            <img src="img/pabrik_gsk.png" alt="Partner 4" style="max-height: 100px;">
        </div>
    </section>

    <!-- Pop Up Notif -->
    <a href="https://wa.me/6281357758855" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
</main>

<?= $this->endSection()?>