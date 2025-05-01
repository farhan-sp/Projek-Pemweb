<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSK Properti</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/contact.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo-container">
                <img src="/img/logo.jpg" alt="GSK Properti" class="logo" style="border-radius: 50px;">
            </div>
            <div class="nav-bar">
                <a href="home">Home</a>
                <a href="about">About Us</a>
                <a href="sales">Sales</a>
                <a href="contact" class="active">Contact</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="contact-whatsapp">
            <div class="container">
                <div class="whatsapp-content">
                    <i class="fab fa-whatsapp"></i>
                    <h2>Let's Connect</h2>
                    <p>Want to collaborate with us? Reach out through WhatsApp for quick responses!</p>
                    <a href="https://wa.me/6281357758855" target="_blank" class="whatsapp-button">Send Message</a>
                </div>
            </div>
        </section>

        <section class="contact-section">
            <div class="container">
                <div class="section-header">
                    <h2>Get In Touch</h2>
                    <p>We'd love to hear from you. Feel free to reach out with any questions or inquiries.</p>
                </div>

                <div class="contact-container">
                    <div class="contact-info">
                        <div class="info-card">
                            <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="info-details">
                                <h3>Visit Us</h3>
                                <p>Jln. Chairil Anwar, Puuwatu Perumahan GSK Residence Blok B, No. 10</p>
                            </div>
                        </div>

                        <a href="https://wa.me/6281357758855" target="_blank" style="text-decoration: none; color : black;">
                            <div class="info-card">
                                <div class="info-icon"><i class="fas fa-phone"></i></div>
                                <div class="info-details">
                                    <h3>Call Us</h3>
                                    <p>+62 813-5775-8855</p>
                                </div>
                            </div>
                        </a>

                        <a href="mailto:gsk.property.id@gmail.com" style="text-decoration: none; color : black;">
                            <div class="info-card">
                                <div class="info-icon"><i class="fas fa-envelope"></i></div>
                                <div class="info-details">
                                    <h3>Email Us</h3>
                                    <p>gsk.property.id@gmail.com</p>
                                </div>
                            </div>
                        </a>

                        <div class="social-links">
                            <h3>Follow Us</h3>
                            <div class="social-icons">
                                <a href="https://web.facebook.com/gskresidence/?locale=id_ID&_rdc=1&_rdr#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/gsk_residence/" title="Instagram"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.youtube.com/@griyasultrakonstruksi" title="YouTube"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="contact-form">
                        <h3>Send Us a Message</h3>
                        <form method="post" id="kirim-pesan">
                            <div class="form-group">
                                <input type="text" name="nama" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <textarea name="pesan" placeholder="Your Message" required></textarea>
                            </div>
                            <button type="submit" class="btn-submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

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

    <script>
        $('#kirim-pesan').submit(function(e) {
            $.ajax({
                url: '/contact',
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    alert("Pesan Berhasil Dikirim!");
                },
                error: function(xhr, status, error) {
                    alert("Pesan Gagal!");
                }
            });
        });
    </script>
</body>

</html>