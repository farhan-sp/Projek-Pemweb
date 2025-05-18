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
    <div class="house">
      <?php foreach($room as $r) : ?>
        <div class="house-card" onclick="openLightbox('<?= base_url('unit/send/' . $r['nama_ruangan']) ?>')">
          <img 
            src="<?= base_url('unit/send/' . $r['nama_ruangan']) ?>" 
            alt="<?= $r['nama_ruangan'] ?>" 
            title="<?= $r['nama_ruangan'] ?>" />
            <div class="house-desc"><?= $r['nama_ruangan'] ?></div>
          </div>
      <?php endforeach; ?>
    </div>

    <div class="details-wrapper">
      <div class="detail-container">
        <div class="detail-header">Details Rumah</div>
        <ul>
          <!-- Material -->
          <?php foreach($material as $m) : ?>
            <li><?= $m['nama_material'] ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="detail-container">
        <div class="detail-header">Details Fasilitas</div>
        <ul>
          <!-- Fasiltas -->
          <?php foreach($facility as $f) : ?>
            <li><?= $f['nama_fasilitas'] ?></li>
          <?php endforeach; ?>
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