<?= $this->extend('pages/main-template/main') ?>
<?= $this->section('content')?>

<main>
  <h2>Unit Description</h2>
  <section class="main-content">
    <div class="house">
      <?php foreach($room as $r) : ?>
        <div class="house-card">
          <img 
            src="<?= base_url('img/' . $r['gambar']) ?>" 
            alt="<?= $r['nama'] ?>" 
            title="<?= $r['nama'] ?>" />
            <div class="house-desc"><?= $r['nama'] ?></div>
          </div>
      <?php endforeach; ?>
    </div>

    <!-- Gambar Icons -->
    <div class="unit-specs">
      <div class="spec-item">
        <div class="spec-icon"><i class="fas fa-ruler-combined"></i></div>
        <div class="spec-value">77 m²</div>
        <div class="spec-label">Luas Bangunan</div>
      </div>

      <div class="spec-item">
        <div class="spec-icon"><i class="fas fa-vector-square"></i></div>
        <div class="spec-value">105 m²</div>
        <div class="spec-label">Luas Tanah</div>
      </div>

      <div class="spec-item">
        <div class="spec-icon"><i class="fas fa-bed"></i></div>
        <div class="spec-value">2</div>
        <div class="spec-label">Kamar Tidur</div>
      </div>

      <div class="spec-item">
        <div class="spec-icon"><i class="fas fa-bath"></i></div>
        <div class="spec-value">1</div>
        <div class="spec-label">Kamar Mandi</div>
      </div>

      <div class="spec-item">
        <div class="spec-icon"><i class="fas fa-car"></i></div>
        <div class="spec-value">1</div>
        <div class="spec-label">Garasi</div>
      </div>
    </div>

    <div class="details-wrapper">
      <div class="detail-container">
        <div class="detail-header">Details Material Rumah</div>
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

  <!-- Pop Up Notif -->
  <a href="https://wa.me/6281357758855" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
  </a>
</main>
<?= $this->endSection()?>