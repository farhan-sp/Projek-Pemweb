<?php
    $currentPage = uri_string() ? : 'home';
?>

<header>
    <nav>
        <div class="logo-container">
            <img src="<?= base_url('img/logo.jpg')?>" alt="GSK Properti" class="logo" style="border-radius: 50px;">
        </div>
        <div class="nav-bar">
            <a href="<?= base_url('home') ?>" class="<?= ($currentPage === 'home') ? 'active' : '' ?>">Home</a>
            <a href="<?= base_url('about') ?>" class="<?= ($currentPage === 'about') ? 'active' : '' ?>">About Us</a>
            <a href="<?= base_url('sales') ?>" class="<?= ($currentPage === 'sales') ? 'active' : '' ?>">Sales</a>
            <a href="<?= base_url('contact') ?>" class="<?= ($currentPage === 'contact') ? 'active' : '' ?>">Contact</a>
            <?php if (session()->get('role') === 'admin') : ?>
                <a style="border: 1px solid; background-color: grey;" href="<?= site_url('logout') ?>">Logout</a>
            <?php else :?>
                <a style="border: 1px solid;" href="<?= site_url('login') ?>">Login</a>
            <?php endif; ?>
        </div>
    </nav>
</header>
