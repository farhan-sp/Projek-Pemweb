<?php
    $currentPage = uri_string() ? : 'home';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?= strtoupper($currentPage) ?> | GSK Properti</title>
        <link rel="shortcut icon" href="<?= base_url('favicon.ico') ?>" type="image/x-icon">        
        <link rel="stylesheet" href="<?= base_url('css/nav.css') ?>">
        <link rel="stylesheet" href="<?= base_url('css/' . $currentPage . '.css')?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </head>
    <body>
        <!-- Header -->
        <?= view('pages/layout/header') ?>

        <!-- Main Content -->
        <?= $this->renderSection("content") ?>

        <!-- Footer -->
        <?= view('pages/layout/footer') ?>
    </body>
</html>
