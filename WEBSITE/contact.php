<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - GSK Highlight</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo-container">
                <img src="GSK_PROPERTI_transparent.png" alt="GSK Properti" class="logo">
            </div>
            <div class="nav-bar">
                <a href="home.php">Home</a>
                <a href="about.php">About Us</a>
                <a href="sales.php">Sales</a> 
                <a href="contact.php" class="active">Contact</a>
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
                    <a href="https://wa.me/6281234567890" target="_blank" class="whatsapp-button">Send Message</a>
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
                                <p>Jl. GSK Properti, Jakarta</p>
                            </div>
                        </div>
                        
                        <div class="info-card">
                            <div class="info-icon"><i class="fas fa-phone"></i></div>
                            <div class="info-details">
                                <h3>Call Us</h3>
                                <p>+62 812 3456 7890</p>
                            </div>
                        </div>
                        
                        <div class="info-card">
                            <div class="info-icon"><i class="fas fa-envelope"></i></div>
                            <div class="info-details">
                                <h3>Email Us</h3>
                                <p>info@gskproperti.com</p>
                            </div>
                        </div>
                        
                        <div class="social-links">
                            <h3>Follow Us</h3>
                            <div class="social-icons">
                                <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                                <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="contact-form">
                        <h3>Send Us a Message</h3>
                        <form action="process_form.php" method="post">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Your Message" required></textarea>
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
                    <img src="GSK_PROPERTI_transparent.png" alt="GSK Properti Logo">
                </div>
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="sales.php">Sales</a></li>
                        <li><a href="contact.php">Contact</a></li>
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