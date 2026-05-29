<?php
$page_title = 'Gallery';
require_once 'includes/header.php';

$photos = [];
for ($i = 1; $i <= 18; $i++) {
    $photos[] = [
        'file'    => "assets/images/photo-$i.jpg",
        'caption' => match(true) {
            $i <= 4  => 'Ministry Leadership',
            $i <= 8  => 'Crusade & Revival Event',
            $i <= 12 => 'Prayer & Worship Gathering',
            $i <= 15 => 'Community Outreach',
            default  => 'Ministry in Action',
        }
    ];
}
?>

<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <span class="section-label" style="color:var(--gold);">Visual Stories</span>
            <h1>Photo Gallery</h1>
            <div class="breadcrumb">
                <a href="/">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>Gallery</span>
            </div>
        </div>
    </div>
</section>

<section class="gallery-page" style="background:var(--cream);">
    <div class="container">
        <div class="section-header centered">
            <span class="section-label">Ministry Moments</span>
            <h2 class="section-title">Captured in Faith</h2>
            <p class="section-subtitle">
                A visual testimony of God's goodness through our crusades, prayer meetings,
                outreaches, and community gatherings.
            </p>
        </div>

        <div class="gallery-masonry">
            <?php foreach ($photos as $photo): ?>
            <div class="gallery-masonry-item" data-lightbox="<?= $photo['file'] ?>">
                <img src="<?= $photo['file'] ?>" alt="<?= htmlspecialchars($photo['caption']) ?>" loading="lazy">
                <div class="gallery-overlay"><i class="fas fa-expand-arrows-alt"></i></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Lightbox -->
<div class="lightbox" id="lightbox">
    <button class="lightbox-close" id="lightboxClose"><i class="fas fa-times"></i></button>
    <img src="" alt="Gallery Image" class="lightbox-img" id="lightboxImg">
</div>

<!-- CTA -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Be Part of the Story</h2>
            <p>Every photo tells a story of restoration. Join us at our next event and experience God's presence firsthand.</p>
            <div class="cta-actions">
                <a href="/events" class="btn btn-gold"><i class="fas fa-calendar-alt"></i> See Upcoming Events</a>
                <a href="/contact" class="btn btn-outline-white"><i class="fas fa-envelope"></i> Contact Us</a>
            </div>
        </div>
    </div>
</section>

<button id="backToTop" style="position:fixed;bottom:28px;right:28px;width:48px;height:48px;background:var(--crimson);color:white;border:none;border-radius:50%;font-size:1.1rem;cursor:pointer;box-shadow:var(--shadow-md);opacity:0;transition:opacity 0.3s ease;display:flex;align-items:center;justify-content:center;z-index:998;" aria-label="Back to top">
    <i class="fas fa-chevron-up"></i>
</button>

<?php require_once 'includes/footer.php'; ?>
