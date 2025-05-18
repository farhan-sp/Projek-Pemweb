<?= $this->extend('pages/main-template/main') ?>
<?= $this->section('content')?>

<main>
    <section class="contact-section">
        <div class="container">
            <div class="section-header">
                <h2>Get In Touch</h2>
                <p>We would love to hear your thoughts on the information we have provided. Feel free to contact us if you have any questions or queries.</p>
            </div>

            <div class="contact-form">
                <h3>Send Us a Message</h3>
                <form action="<?= base_url('/contact/send') ?>" method="post" id="kirim-pesan">
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
    </section>
</main>

<?= $this->endSection()?>