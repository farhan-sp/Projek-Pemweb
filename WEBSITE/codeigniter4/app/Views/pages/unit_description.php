<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>GSK Properti - Unit Description</title>
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/unit_description.css">
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <!-- Tampilan Navigasi -->
  <header>
        <nav>
            <div class="logo-container">
                <img src="img/logo.jpg" alt="Logo Perusahaan" class="logo" style="border-radius: 50px;">
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
      <?php foreach($room as $r) : ?>
        <div class="house-card">
          <img 
            src="<?= base_url('unit/send/' . $r['nama_ruangan']) ?>" 
            alt="<?= $r['nama_ruangan'] ?>" 
            title="<?= $r['nama_ruangan'] ?>" />
            <div class="house-desc"><?= $r['nama_ruangan'] ?></div>
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
                <!-- Material -->
                <?php foreach($material as $m) : ?>
                  <li><?= $m['nama_material'] ?></li>
                <?php endforeach; ?>
              </ul>
            </td>
            <td
              <ul>
                <!-- Fasiltas -->
                <?php foreach($facility as $f) : ?>
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
          <p><i class="fas fa-map-marker-alt"></i>Jln. Chairil Anwar, Puuwatu Perumahan GSK Residence Blok B, No. 10</p>
          <p><i class="fas fa-phone"></i>+62 813-5775-8855</p>
          <p><i class="fas fa-envelope"></i>gsk.property.id@gmail.com</p>
        </div>
        <div class="footer-social">
          <h3>Follow Us</h3>
          <div class="social-icons">
            <a href="https://web.facebook.com/gskresidence/?locale=id_ID&_rdc=1&_rdr#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/gsk_residence/" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/@griyasultrakonstruksi" title="YouTube"><i class="fab fa-youtube"></i></a>
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