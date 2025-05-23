<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>GSK Properti - Unit Description</title>
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/unit_description.css">
</head>
<body>
  <!-- Tampilan Navigasi -->
  <header>
    <nav>
        <div class="logo-container">
            <img src="/img/logo.jp" alt="Logo Perusahaan" class="logo" style="border-radius: 50px;">
        </div>
        <div class="nav-bar">
        <a href="home">Home</a>
        <a href="about">About Us</a>
        <a href="sales" class="active">Sales</a> 
        <a href="contact">Contact</a>
        </div>
    </nav>
  </header>

  <h2>Unit Description</h2>

  <section class="main-content">

    <div class="house">
      <div id="TestImage">
        <img src="None" alt="Gambar Map Ruangan" title="Map">
      </div>
      <?php foreach ($room as $r) : ?>
        <div class="house-card">
          <img 
            src="<?= base_url('unit/send/' . $r['nama_ruangan']) ?>" 
            alt="<?= $r['nama_ruangan'] ?>" 
            title="<?= $r['nama_ruangan'] ?>" />
        </div>
      <?php endforeach; ?>
    </div>

    <div class="details">
      <table>
        <thead>
          <tr>
            <th>Details Rumah</th>
            <th>Details Fasilitas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <ul>
                <?php foreach ($material as $m) : ?>
                    <li><?= $m['nama_material'] ?></li>
                <?php endforeach; ?>
              </ul>
            </td>
            <td>
              <ul>
                <?php foreach ($facility as $f) : ?>
                    <li><?= $f['nama_fasilitas'] ?></li>
                <?php endforeach; ?>
              </ul>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  <footer>
      <div class="container">
          <div class="footer-content">
              <div class="footer-logo">
                  <img src="/img/logo.jpg" alt="GSK Properti Logo" style="border-radius: 50px;">
              </div>
              <div class="footer-links">
                  <h3>Quick Links</h3>
                  <ul>
                      <li><a href="home">Home</a></li>
                      <li><a href="about">About Us</a></li>
                      <li><a href="sales">Sales</a></li>
                      <li><a href="contact">Contact</a></li>
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
</body>
</html>