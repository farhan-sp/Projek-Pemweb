<?php
    $currentPage = uri_string(); // contoh: "home", "about", etc.
?>

<header>
    <nav>
        <div class="logo-container">
            <img src="/img/logo.jpg" alt="GSK Properti" class="logo" style="border-radius: 50px;">
        </div>
        <div class="nav-bar">
            <a href="<?= base_url('home') ?>" class="<?= ($currentPage === 'home') ? 'active' : '' ?>">Home</a>
            <a href="<?= base_url('about') ?>" class="<?= ($currentPage === 'about') ? 'active' : '' ?>">About Us</a>
            <a href="<?= base_url('sales') ?>" class="<?= ($currentPage === 'sales') ? 'active' : '' ?>">Sales</a>
            <a href="<?= base_url('contact') ?>" class="<?= ($currentPage === 'contact') ? 'active' : '' ?>">Contact</a>
        </div>
    </nav>
</header>
