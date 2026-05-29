<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= SITE_NAME ?> - <?= SITE_TAGLINE ?>. A Spirit-filled ministry based in Mbale, Uganda, dedicated to prayer, evangelism, and restoration.">
    <meta name="keywords" content="Restoration Prayer Altar, RPA Ministries, Church Mbale Uganda, Prayer Ministry, Evangelism Uganda, Pastor Davis Wangoolo">
    <meta property="og:title" content="<?= isset($page_title) ? $page_title . ' | ' . SITE_SHORT : SITE_NAME ?>">
    <meta property="og:description" content="<?= SITE_TAGLINE ?>">
    <meta property="og:image" content="assets/images/photo-13.jpg">
    <title><?= isset($page_title) ? htmlspecialchars($page_title) . ' | ' . SITE_SHORT : SITE_NAME ?></title>
    <link rel="icon" type="image/jpeg" href="assets/images/photo-13.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;900&family=Inter:wght@300;400;500;600;700&family=Cinzel:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Top Bar -->
<div class="topbar">
    <div class="container">
        <div class="topbar-left">
            <span><i class="fas fa-map-marker-alt"></i> Mbale, Uganda</span>
            <span><i class="fas fa-phone"></i> <?= SITE_PHONE1 ?></span>
            <span><i class="fas fa-envelope"></i> <?= SITE_EMAIL ?></span>
        </div>
        <div class="topbar-right">
            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
            <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
            <a href="#" aria-label="Telegram"><i class="fab fa-telegram"></i></a>
        </div>
    </div>
</div>

<!-- Navigation -->
<header class="site-header" id="siteHeader">
    <div class="container">
        <div class="nav-brand">
            <a href="index.php" class="brand-link">
                <div class="logo-wrap">
                    <img src="assets/images/photo-13.jpg" alt="RPA Ministries Logo" class="logo-img">
                </div>
                <div class="brand-text">
                    <span class="brand-name">RPA Ministries</span>
                    <span class="brand-full">Restoration Prayer Altar</span>
                </div>
            </a>
        </div>

        <nav class="main-nav" id="mainNav">
            <ul class="nav-list">
                <li><a href="index.php" class="nav-link <?= active_page('index') ?>">Home</a></li>
                <li><a href="about.php" class="nav-link <?= active_page('about') ?>">About Us</a></li>
                <li class="has-dropdown">
                    <a href="ministries.php" class="nav-link <?= active_page('ministries') ?>">Ministries <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="ministries.php#prayer">Prayer & Intercession</a></li>
                        <li><a href="ministries.php#evangelism">Evangelism & Crusades</a></li>
                        <li><a href="ministries.php#women">Women Ministry</a></li>
                        <li><a href="ministries.php#youth">Youth & Discipleship</a></li>
                        <li><a href="ministries.php#worship">Worship & Choir</a></li>
                        <li><a href="ministries.php#bible">Bible College</a></li>
                    </ul>
                </li>
                <li><a href="leadership.php" class="nav-link <?= active_page('leadership') ?>">Leadership</a></li>
                <li><a href="events.php" class="nav-link <?= active_page('events') ?>">Events</a></li>
                <li><a href="gallery.php" class="nav-link <?= active_page('gallery') ?>">Gallery</a></li>
                <li><a href="contact.php" class="nav-link <?= active_page('contact') ?>">Contact</a></li>
            </ul>
        </nav>

        <div class="nav-actions">
            <a href="give.php" class="btn btn-gold">Give Now</a>
            <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>
