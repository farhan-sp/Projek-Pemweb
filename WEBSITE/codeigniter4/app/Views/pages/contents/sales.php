<?= $this->extend('pages/main-template/main') ?>
<?= $this->section('content')?>

<main>
    <section class="main-content">
        <h2>Unit for Sale</h2>
        <div class="gallery-container">
            <div class="gallery-item" onclick="openLightbox('img/Tampak Rumah 1.jpg')">
                <img src="img/Tampak Rumah 1.jpg" alt="Tampak Depan">
                <div class="gallery-desc">Tampak Depan Unit</div>
            </div>
            <div class="gallery-item" onclick="openLightbox('img/Tampak Rumah 2.jpg')">
                <img src="img/Tampak Rumah 2.jpg" alt="Tampak Samping">
                <div class="gallery-desc">Tampak Samping Unit</div>
            </div>
            <div class="gallery-item" onclick="openLightbox('img/Tampak Rumah 3.jpg')">
                <img src="img/Tampak Rumah 3.jpg" alt="Tampak Atas">
                <div class="gallery-desc">Tampak Atas Unit</div>
            </div>
            <div class="gallery-item" onclick="openLightbox('img/Jalan Umum 1.jpg')">
                <img src="img/Jalan Umum 1.jpg" alt="Tampak Atas">
                <div class="gallery-desc">Tampak Atas Unit</div>
            </div>
            <div class="gallery-item" onclick="openLightbox('img/Jalan Umum 2.jpg')">
                <img src="img/Jalan Umum 2.jpg" alt="Tampak Atas">
                <div class="gallery-desc">Tampak Atas Unit</div>
            </div>
            <div class="gallery-item" onclick="openLightbox('img/Jalan Umum 3.jpg')">
                <img src="img/Jalan Umum 3.jpg" alt="Tampak Atas">
                <div class="gallery-desc">Tampak Atas Unit</div>
            </div>
        </div>

        <h2>Unit Environment</h2>
        <div class="gallery-container">
            <div class="gallery-item" onclick="openLightbox('img/Atas Kiri.jpg')">
                <img src="img/Atas Kiri.jpg" alt="Denah 1">
                <div class="gallery-desc">Denah 1</div>
            </div>
            <div class="gallery-item" onclick="openLightbox('img/Atas Depan.jpg')">
                <img src="img/Atas Depan.jpg" alt="Denah 2">
                <div class="gallery-desc">Denah 2</div>
            </div>
            <div class="gallery-item" onclick="openLightbox('img/Atas Kanan.jpg')">
                <img src="img/Atas Kanan.jpg" alt="Denah 3">
                <div class="gallery-desc">Denah 3</div>
            </div>
        </div>

        <h2>Unit Location</h2>
        <div class="location-section">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1124.7763972733471!2d122.46517687392424!3d-3.975172079256433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zM8KwNTgnMjkuMiJTIDEyMsKwMjcnNTQuMCJF!5e1!3m2!1sen!2sid!4v1745825855588!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="description" style="text-align: center;">
            <a href="unit">About Unit</a>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div class="lightbox" id="lightbox" onclick="closeLightbox()">
        <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
        <img id="lightbox-img" src="" alt="Preview">
    </div>

    <!-- Pop Up Notif -->
    <a href="https://wa.me/6281357758855" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
</main>

<?= $this->endSection()?>