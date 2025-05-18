<?= $this->extend('pages/main-template/main') ?>
<?= $this->section('content')?>

<main>
    <!-- About Content -->
    <section class="main-content">
        <div class="container">
            <!-- Company History -->
            <div class="section history">
                <h2>Our History</h2>
                <p>Perusahaan GSK Properti adalah perusahaan yang bergerak di bidang properti baik jasa dan pengembangan. Perusahaan kami berdiri sejak tahun 2024, sebagai anak perusahaan dari PT. Griya Sultra Konstruksi. Sebelumnya kami telah sukses membangun dan menjual ratusan unit rumah subsidi di Perumahan GSK Residence Puuwatu. Tepatnya di Kota Kendari kami telah memiliki nama dengan bangunan yang berkualitas dan tentunya terpercaya. Segera kunjungi kami dengan produk-produk terbaru yang pasti anda inginkan.</p>
            </div>

            <!-- Vision & Mission -->
            <div class="section visi-misi">
                <div class="vm-card">
                    <div class="vm-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h2>Visi Perusahaan</h2>
                    <p class="visi">"Menjadi pengembang properti terdepan yang menciptakan hunian berkualitas dan terpercaya untuk meningkatkan kualitas hidup masyarakat Indonesia."</p>
                </div>

                <div class="vm-card">
                    <div class="vm-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h2>Misi Perusahaan</h2>
                    <p class="misi">
                        "Membangun properti dengan standar kualitas tinggi, mengutamakan kepuasan pelanggan, berkontribusi pada pembangunan infrastruktur nasional, dan menciptakan nilai tambah bagi seluruh pemangku kepentingan."
                    </p>
                </div>
            </div>

            <!-- Team -->
            <div class="section team">
                <h2>Our Team</h2>
                <div class="team-cards">
                    <div class="team-card">
                        <div class="team-img">
                            <img src="img/Team.jpg" alt="Team">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pop Up Notif -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <a href="https://wa.me/6281357758855" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
</main>

<?= $this->endSection()?>