<?= $this->extend('pages/main-template/main') ?>
<?= $this->section('content')?>

<main>
    <!-- Main Section -->
    <section class="main">
        <div class="main-content">
            <h1>GSK PROPERTI</h1>
            <p><b>Memberikan pelayanan terbaik untuk kebutuhan Anda dengan dedikasi dan kepercayaan.</b></p>
            <img src="img/highlight GSK.jpg" alt="Highlight GSK" class="main-img">
        </div>
    </section>

    <!-- News Section -->
    <section class="centered-title">
        <div class="news-header">
            <h2>News Update</h2>
        </div>
        <?php if (session()->get('role') === 'admin') :?>
            <div class="edit-button-container">
                <a href="<?= base_url('edit') ?>" class="edit-btn">Edit Berita</a>
            </div>
        <?php endif; ?>
        <section class=" news-carousel">
            <?php foreach($berita as $b) :?>
                <div class=" news-card">
                    <div class="news-img">
                        <img src="<?= base_url('/img/' . $b['gambar']) ?>" alt="news">
                    </div>
                    <div class="news-text">
                        <p><?= $b['keterangan'] ?></p>
                    </div>
                    <div class="date-news">
                        <h3><?= $b['tanggal'] ?></h3>
                    </div>
                </div>
            <?php endforeach; ?>
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