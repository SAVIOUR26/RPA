<?php
$page_title = 'Home';
require_once 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-badge">
                <i class="fas fa-cross"></i>
                Welcome to RPA Ministries
            </div>
            <h1 class="hero-title">
                Restoration Prayer
                <span class="highlight">Altar Ministries</span>
            </h1>
            <p class="hero-subtitle">
                A Spirit-filled ministry dedicated to raising relentless intercessors,
                restoring lives, families, and destinies through the power of prayer,
                worship, and the uncompromised Word of God.
            </p>
            <div class="hero-verse">
                <i class="fas fa-bible"></i>
                "Men ought always to pray and not to faint." — Luke 18:1
            </div>
            <div class="hero-actions">
                <a href="about.php" class="btn btn-crimson">
                    <i class="fas fa-church"></i> Discover Our Ministry
                </a>
                <a href="events.php" class="btn btn-outline-white">
                    <i class="fas fa-calendar-alt"></i> Upcoming Events
                </a>
            </div>
        </div>
    </div>
    <div class="hero-scroll">
        <span>Scroll Down</span>
        <div class="arrow"><i class="fas fa-chevron-down" style="font-size:0.7rem;"></i></div>
    </div>
</section>

<!-- Stats Bar -->
<section class="stats-bar">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-number" data-target="12" data-suffix="+">0</div>
                <div class="stat-label">Years of Ministry</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-target="4" data-suffix="">0</div>
                <div class="stat-label">Nations Reached</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-target="8" data-suffix="+">0</div>
                <div class="stat-label">Ministry Departments</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-target="300" data-suffix="+">0</div>
                <div class="stat-label">Lives Transformed</div>
            </div>
        </div>
    </div>
</section>

<!-- Welcome Section -->
<section class="welcome-section">
    <div class="container">
        <div class="welcome-grid">
            <div class="welcome-images">
                <div class="welcome-img-main">
                    <img src="assets/images/photo-12.jpg" alt="RPA Ministry Crusade" loading="lazy">
                </div>
                <div class="welcome-img-accent">
                    <img src="assets/images/photo-2.jpg" alt="Prayer gathering" loading="lazy">
                </div>
                <div class="welcome-badge-float">
                    <span class="number">2012</span>
                    <span class="label">Est. in Faith</span>
                </div>
            </div>
            <div class="welcome-content">
                <div class="section-header">
                    <span class="section-label">Who We Are</span>
                    <h2 class="section-title">A Ministry Built on Prayer &amp; Restoration</h2>
                    <p class="section-subtitle">
                        Restoration Prayer Altar Ministries Ltd (RPA) is a Christ-centered,
                        Spirit-filled ministry officially incorporated in Uganda, with an
                        international presence across Uganda, the United Kingdom, the Netherlands,
                        and Saudi Arabia.
                    </p>
                </div>
                <p style="color:var(--gray-600); line-height:1.75; margin-bottom:24px;">
                    Founded on the timeless truth of Luke 18:1 and Joel 2:25, we believe in
                    the restorative power of God to mend broken lives, rebuild fractured families,
                    and revive destinies. Our ministry is anchored in passionate prayer,
                    uncompromised Gospel preaching, and devoted discipleship.
                </p>
                <div class="welcome-features">
                    <div class="feature-chip"><i class="fas fa-pray"></i> Prayer Altars</div>
                    <div class="feature-chip"><i class="fas fa-bullhorn"></i> Evangelism</div>
                    <div class="feature-chip"><i class="fas fa-book-open"></i> Bible Teaching</div>
                    <div class="feature-chip"><i class="fas fa-users"></i> Discipleship</div>
                    <div class="feature-chip"><i class="fas fa-globe"></i> Missions</div>
                    <div class="feature-chip"><i class="fas fa-music"></i> Worship</div>
                </div>
                <a href="about.php" class="btn btn-crimson">
                    <i class="fas fa-arrow-right"></i> Learn More About Us
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Ministries Section -->
<section class="ministries-section">
    <div class="container">
        <div class="section-header centered">
            <span class="section-label">What We Do</span>
            <h2 class="section-title">Our Ministry Departments</h2>
            <p class="section-subtitle">
                We are structured into focused departments, each serving a vital role
                in advancing God's kingdom and transforming communities.
            </p>
        </div>
        <div class="ministries-grid">
            <div class="ministry-card">
                <div class="ministry-icon"><i class="fas fa-pray"></i></div>
                <h3>Prayer &amp; Intercession</h3>
                <p>Establishing strong prayer altars across communities. We believe persistent prayer is the engine of spiritual transformation and revival.</p>
                <a href="ministries.php#prayer" class="ministry-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="ministry-card">
                <div class="ministry-icon"><i class="fas fa-bullhorn"></i></div>
                <h3>Evangelism &amp; Crusades</h3>
                <p>Taking the Gospel to the streets, communities, and nations through powerful crusades, revival meetings, and mission outreaches.</p>
                <a href="ministries.php#evangelism" class="ministry-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="ministry-card">
                <div class="ministry-icon"><i class="fas fa-bible"></i></div>
                <h3>Bible College</h3>
                <p>Equipping believers and leaders with solid biblical foundation, theological training, and practical ministry skills for kingdom service.</p>
                <a href="ministries.php#bible" class="ministry-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="ministry-card">
                <div class="ministry-icon"><i class="fas fa-female"></i></div>
                <h3>Women Ministry</h3>
                <p>Empowering women through the Word of God, prayer, mentorship, and fellowship to walk in their God-given purpose and calling.</p>
                <a href="ministries.php#women" class="ministry-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="ministry-card">
                <div class="ministry-icon"><i class="fas fa-music"></i></div>
                <h3>Worship &amp; Choir</h3>
                <p>Creating an atmosphere of heartfelt worship and praise, leading the congregation into the presence of God through Spirit-led music.</p>
                <a href="ministries.php#worship" class="ministry-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="ministry-card">
                <div class="ministry-icon"><i class="fas fa-heart"></i></div>
                <h3>Marrieds Department</h3>
                <p>Strengthening marriages and families through biblical teaching, counseling, and fellowship — building God-honoring homes.</p>
                <a href="ministries.php#marriage" class="ministry-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="text-center mt-32">
            <a href="ministries.php" class="btn btn-outline-crimson">
                <i class="fas fa-th-large"></i> View All Ministries
            </a>
        </div>
    </div>
</section>

<!-- Scripture Banner -->
<section class="scripture-banner">
    <div class="container">
        <div class="scripture-content">
            <span class="section-label" style="justify-content:center; color:var(--gold);">Our Foundation</span>
            <p class="scripture-text">
                "And I will restore to you the years that the locust hath eaten, the cankerworm,
                and the caterpillar, and the palmerworm..."
            </p>
            <div class="scripture-ref">— Joel 2:25 (KJV)</div>
        </div>
    </div>
</section>

<!-- Upcoming Events -->
<section class="events-section">
    <div class="container">
        <div class="section-header">
            <span class="section-label">What's Happening</span>
            <h2 class="section-title">Upcoming Events</h2>
            <p class="section-subtitle">
                Join us for life-changing gatherings, crusades, and ministry events
                across Uganda and beyond.
            </p>
        </div>
        <div class="events-grid">
            <div class="event-card">
                <div class="event-img">
                    <img src="assets/images/photo-14.jpg" alt="Mbale Crusade" loading="lazy">
                    <div class="event-date-badge">
                        <span class="day">29</span>
                        <span class="month">Dec</span>
                    </div>
                </div>
                <div class="event-body">
                    <span class="event-type">Crusade &amp; Revival</span>
                    <h3>Mbale Cross-Over Crusade 2025</h3>
                    <div class="event-meta">
                        <span><i class="fas fa-calendar"></i> Dec 29 – 31, 2025</span>
                        <span><i class="fas fa-map-marker-alt"></i> Mbale, Uganda</span>
                        <span><i class="fas fa-clock"></i> 6:00 PM onwards</span>
                    </div>
                    <p>A powerful three-day crusade and cross-over service to welcome the New Year in prayer, worship, and the presence of God.</p>
                    <a href="events.php" class="btn btn-crimson" style="padding:10px 22px; font-size:0.82rem;">
                        <i class="fas fa-info-circle"></i> Event Details
                    </a>
                </div>
            </div>
            <div class="event-card">
                <div class="event-img">
                    <img src="assets/images/photo-5.jpg" alt="Online Church Service" loading="lazy">
                    <div class="event-date-badge">
                        <span class="day">07</span>
                        <span class="month">Jan</span>
                    </div>
                </div>
                <div class="event-body">
                    <span class="event-type">Online Service</span>
                    <h3>Weekly Online Church Fellowship</h3>
                    <div class="event-meta">
                        <span><i class="fas fa-calendar"></i> Every Sunday</span>
                        <span><i class="fas fa-globe"></i> Online / Live Stream</span>
                        <span><i class="fas fa-clock"></i> 10:00 AM EAT</span>
                    </div>
                    <p>Join our vibrant online community every Sunday for worship, the Word, prayer, and fellowship from wherever you are in the world.</p>
                    <a href="events.php" class="btn btn-crimson" style="padding:10px 22px; font-size:0.82rem;">
                        <i class="fas fa-video"></i> Join Online
                    </a>
                </div>
            </div>
            <div class="event-card">
                <div class="event-img">
                    <img src="assets/images/photo-16.jpg" alt="Prayer Meeting" loading="lazy">
                    <div class="event-date-badge">
                        <span class="day">15</span>
                        <span class="month">Jan</span>
                    </div>
                </div>
                <div class="event-body">
                    <span class="event-type">Prayer & Intercession</span>
                    <h3>Monthly Corporate Prayer Night</h3>
                    <div class="event-meta">
                        <span><i class="fas fa-calendar"></i> 3rd Friday Monthly</span>
                        <span><i class="fas fa-map-marker-alt"></i> Nabumali, Mbale</span>
                        <span><i class="fas fa-clock"></i> 9:00 PM – 5:00 AM</span>
                    </div>
                    <p>An all-night prayer and intercession service where we storm heaven together, seeking God's face for personal, national, and global transformation.</p>
                    <a href="events.php" class="btn btn-crimson" style="padding:10px 22px; font-size:0.82rem;">
                        <i class="fas fa-info-circle"></i> Event Details
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center mt-32">
            <a href="events.php" class="btn btn-outline-crimson">
                <i class="fas fa-calendar-alt"></i> View All Events
            </a>
        </div>
    </div>
</section>

<!-- Leadership Preview -->
<section class="leadership-section">
    <div class="container">
        <div class="section-header centered">
            <span class="section-label">Our Leaders</span>
            <h2 class="section-title">Meet Our Leadership</h2>
            <p class="section-subtitle">
                Guided by Spirit-filled men and women of God committed to serving
                with integrity, humility, and a passion for souls.
            </p>
        </div>
        <div class="leaders-grid">
            <div class="leader-card">
                <div class="leader-photo">
                    <img src="assets/images/photo-1.jpg" alt="Pastor Davis Wangoolo" loading="lazy">
                </div>
                <h3>Pastor Davis Wangoolo</h3>
                <div class="leader-role">Founder &amp; National Overseer</div>
                <div class="leader-location"><i class="fas fa-map-marker-alt"></i> Mbale, Uganda</div>
            </div>
            <div class="leader-card">
                <div class="leader-photo">
                    <img src="assets/images/photo-3.jpg" alt="Pastor Brian Nsiko" loading="lazy">
                </div>
                <h3>Pastor Brian Nehemiah Nsiko</h3>
                <div class="leader-role">Bible College Director</div>
                <div class="leader-location"><i class="fas fa-map-marker-alt"></i> Netherlands</div>
            </div>
            <div class="leader-card">
                <div class="leader-photo">
                    <img src="assets/images/photo-6.jpg" alt="Pastor Yvonne Olwenyi" loading="lazy">
                </div>
                <h3>Pastor Yvonne Olwenyi Tumuhairwe</h3>
                <div class="leader-role">Regional Pastor</div>
                <div class="leader-location"><i class="fas fa-map-marker-alt"></i> United Kingdom</div>
            </div>
            <div class="leader-card">
                <div class="leader-photo">
                    <img src="assets/images/photo-4.jpg" alt="Pastor Florence Nakanajako" loading="lazy">
                </div>
                <h3>Pastor Florence Nakanajako</h3>
                <div class="leader-role">Regional Pastor</div>
                <div class="leader-location"><i class="fas fa-map-marker-alt"></i> Saudi Arabia</div>
            </div>
        </div>
        <div class="text-center mt-32">
            <a href="leadership.php" class="btn btn-outline-crimson">
                <i class="fas fa-users"></i> Meet All Leaders
            </a>
        </div>
    </div>
</section>

<!-- Gallery Preview -->
<section class="gallery-section">
    <div class="container">
        <div class="section-header">
            <span class="section-label" style="color:var(--gold);">Our Gallery</span>
            <h2 class="section-title">Ministry in Action</h2>
            <p class="section-subtitle">Glimpses of lives touched, crusades held, and God's presence manifested.</p>
        </div>
        <div class="gallery-grid">
            <div class="gallery-item" data-lightbox="assets/images/photo-12.jpg">
                <img src="assets/images/photo-12.jpg" alt="RPA Crusade" loading="lazy">
                <div class="gallery-overlay"><i class="fas fa-expand"></i></div>
            </div>
            <div class="gallery-item" data-lightbox="assets/images/photo-14.jpg">
                <img src="assets/images/photo-14.jpg" alt="Ministry Event" loading="lazy">
                <div class="gallery-overlay"><i class="fas fa-expand"></i></div>
            </div>
            <div class="gallery-item" data-lightbox="assets/images/photo-15.jpg">
                <img src="assets/images/photo-15.jpg" alt="Prayer Gathering" loading="lazy">
                <div class="gallery-overlay"><i class="fas fa-expand"></i></div>
            </div>
            <div class="gallery-item" data-lightbox="assets/images/photo-16.jpg">
                <img src="assets/images/photo-16.jpg" alt="Worship Service" loading="lazy">
                <div class="gallery-overlay"><i class="fas fa-expand"></i></div>
            </div>
            <div class="gallery-item" data-lightbox="assets/images/photo-18.jpg">
                <img src="assets/images/photo-18.jpg" alt="Evangelism" loading="lazy">
                <div class="gallery-overlay"><i class="fas fa-expand"></i></div>
            </div>
            <div class="gallery-item" data-lightbox="assets/images/photo-5.jpg">
                <img src="assets/images/photo-5.jpg" alt="Community Outreach" loading="lazy">
                <div class="gallery-overlay"><i class="fas fa-expand"></i></div>
            </div>
        </div>
        <div class="text-center mt-32">
            <a href="gallery.php" class="btn btn-gold">
                <i class="fas fa-images"></i> View Full Gallery
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <span class="section-label" style="justify-content:center; color:var(--gold-lt);">Join Us</span>
            <h2>Partner With Us in This Great Commission</h2>
            <p>Your prayers, presence, and financial support help us reach more souls, plant more churches, and restore more lives across Uganda and the world.</p>
            <div class="cta-actions">
                <a href="give.php" class="btn btn-gold">
                    <i class="fas fa-hand-holding-heart"></i> Support Our Ministry
                </a>
                <a href="contact.php" class="btn btn-outline-white">
                    <i class="fas fa-envelope"></i> Get in Touch
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Lightbox -->
<div class="lightbox" id="lightbox">
    <button class="lightbox-close" id="lightboxClose"><i class="fas fa-times"></i></button>
    <img src="" alt="Gallery Image" class="lightbox-img" id="lightboxImg">
</div>

<!-- Back to Top -->
<button id="backToTop" style="position:fixed;bottom:28px;right:28px;width:48px;height:48px;background:var(--crimson);color:white;border:none;border-radius:50%;font-size:1.1rem;cursor:pointer;box-shadow:var(--shadow-md);opacity:0;transition:opacity 0.3s ease;display:flex;align-items:center;justify-content:center;z-index:998;" aria-label="Back to top">
    <i class="fas fa-chevron-up"></i>
</button>

<?php require_once 'includes/footer.php'; ?>
