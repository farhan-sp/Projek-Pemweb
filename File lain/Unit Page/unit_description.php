<?= $this->extend('pages/main-template/main') ?>
<?= $this->section('content')?>

<main>
  <!-- Navigasi -->
  <header>
    <nav>
      <div class="logo-container">
        <img src="img/logo.jpg" alt="Logo Perusahaan" class="logo" style="border-radius: 50px;">
      </div>
      <div class="nav-bar">
        <a href="home">Home</a>
        <a href="about">About Us</a>
        <a href="sales">Sales</a>
        <a href="contact">Contact</a>
      </div>
    </nav>
  </header>

  <h2>Unit Description</h2>
  <section class="main-content">
    <!-- Gambar Ruangan -->
    <div class="house">
      <div class="house-card">
         <img src="/img/Kamar 1.jpg" alt="kamar">
         <div class="house-desc">Kamar</div>
      </div>
      <div class="house-card">
         <img src="/img/kamar 2.jpg" alt="kamar">
         <div class="house-desc">Kamar</div>
      </div>
      <div class="house-card">
         <img src="/img/Kamar Mandi.jpg" alt="kamar">
         <div class="house-desc">Kamarr</div>
      </div>
      <div class="house-card">
         <img src="/img/ruang dapur.jpg" alt="kamar">
         <div class="house-desc">Kamar</div>
      </div>
    </div>
    <!-- Detail Fasilitas dan Material -->
    <div class="details-wrapper">
      <div class="detail-container">
        <div class="detail-header">Details Rumah</div>
        <ul>
          <!-- Material -->
          <li>Beton</li>
          <li>Kapur</li>
          <li>Pasir</li>
        </ul>
      </div>
      <div class="detail-container">
        <div class="detail-header">Details Fasilitas</div>
        <ul>
          <!-- Fasiltas -->
          <li>Lapangan</li>
          <li>Masjid</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Whatsapp -->
  <section class="contact-whatsapp">
      <div class="container">
          <div class="whatsapp-content">
              <i class="fab fa-whatsapp"></i>
              <h2>Let's Connect</h2>
              <p>Want to collaborate with us? Contact us via WhatsApp to get a quick response!</p>
              <h3><i>"Always remember Must Have a Home Now !!!"</i></h3>
              <a href="https://wa.me/6281357758855" target="_blank" class="whatsapp-button">Send Message</a>
          </div>
      </div>
  </section>
  
  <!-- Lightbox Modal -->
  <div class="lightbox" id="lightbox" onclick="closeLightbox()">
      <span class="lightbox-close" onclick="closeLightbox()"></span>
      <img id="lightbox-img">
  </div>

  <!-- Pop Up Notif -->
  <a href="https://wa.me/6281357758855" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
  </a>
</main>
<?= $this->endSection()?>