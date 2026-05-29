<?php
$page_title = 'Contact Us';
require_once 'includes/header.php';

$success = false;
$errors  = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim(htmlspecialchars($_POST['name']    ?? ''));
    $email   = trim(htmlspecialchars($_POST['email']   ?? ''));
    $phone   = trim(htmlspecialchars($_POST['phone']   ?? ''));
    $subject = trim(htmlspecialchars($_POST['subject'] ?? ''));
    $message = trim(htmlspecialchars($_POST['message'] ?? ''));

    if (empty($name))    $errors[] = 'Name is required.';
    if (empty($email) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        $errors[] = 'A valid email address is required.';
    if (empty($message)) $errors[] = 'Message is required.';

    if (empty($errors)) {
        $to      = SITE_EMAIL;
        $subj    = '[RPA Website] ' . ($subject ?: 'New Message from Website');
        $body    = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\n\nMessage:\n$message";
        $headers = "From: $email\r\nReply-To: $email\r\n";
        @mail($to, $subj, $body, $headers);
        $success = true;
    }
}
?>

<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <span class="section-label" style="color:var(--gold);">Reach Out</span>
            <h1>Contact Us</h1>
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>Contact</span>
            </div>
        </div>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="contact-grid">

            <!-- Info Card -->
            <div class="contact-info-card">
                <h3>Get in Touch</h3>
                <p>We'd love to hear from you. Whether you need prayer, want to connect with the ministry, or have questions — we are here.</p>

                <div class="contact-detail">
                    <div class="contact-detail-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="contact-detail-text">
                        <strong>Our Location</strong>
                        <p>Bukuwa Ward, Nabumali Town Council<br>Mbale, Eastern Uganda</p>
                    </div>
                </div>
                <div class="contact-detail">
                    <div class="contact-detail-icon"><i class="fas fa-phone"></i></div>
                    <div class="contact-detail-text">
                        <strong>Phone Numbers</strong>
                        <p><?= SITE_PHONE1 ?><br><?= SITE_PHONE2 ?></p>
                    </div>
                </div>
                <div class="contact-detail">
                    <div class="contact-detail-icon"><i class="fas fa-envelope"></i></div>
                    <div class="contact-detail-text">
                        <strong>Email Address</strong>
                        <p><?= SITE_EMAIL ?></p>
                    </div>
                </div>
                <div class="contact-detail">
                    <div class="contact-detail-icon"><i class="fas fa-mail-bulk"></i></div>
                    <div class="contact-detail-text">
                        <strong>Postal Address</strong>
                        <p><?= SITE_POBOX ?></p>
                    </div>
                </div>
                <div class="contact-detail">
                    <div class="contact-detail-icon"><i class="fas fa-globe"></i></div>
                    <div class="contact-detail-text">
                        <strong>Website</strong>
                        <p><?= SITE_URL ?></p>
                    </div>
                </div>

                <div class="contact-social">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" aria-label="Telegram"><i class="fab fa-telegram"></i></a>
                </div>
            </div>

            <!-- Form -->
            <div class="contact-form-wrap">
                <h3>Send Us a Message</h3>
                <p>Fill in the form below and our team will get back to you within 24–48 hours.</p>

                <?php if ($success): ?>
                <div style="background:#d4edda;border:1px solid #c3e6cb;color:#155724;padding:16px 20px;border-radius:var(--radius-sm);margin-bottom:24px;display:flex;align-items:center;gap:10px;">
                    <i class="fas fa-check-circle" style="color:#28a745;font-size:1.2rem;"></i>
                    <span>Thank you! Your message has been sent. We'll get back to you shortly.</span>
                </div>
                <?php elseif (!empty($errors)): ?>
                <div style="background:#f8d7da;border:1px solid #f5c6cb;color:#721c24;padding:16px 20px;border-radius:var(--radius-sm);margin-bottom:24px;">
                    <strong><i class="fas fa-exclamation-circle"></i> Please fix the following:</strong>
                    <ul style="margin-top:8px;padding-left:20px;">
                        <?php foreach ($errors as $err): ?><li><?= $err ?></li><?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>

                <form method="POST" id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" placeholder="John Doe" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" placeholder="john@example.com" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="+256 700 000 000" value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <select id="subject" name="subject">
                                <option value="">Select a subject</option>
                                <option <?= ($_POST['subject']??'')==='Prayer Request'?'selected':'' ?>>Prayer Request</option>
                                <option <?= ($_POST['subject']??'')==='Ministry Partnership'?'selected':'' ?>>Ministry Partnership</option>
                                <option <?= ($_POST['subject']??'')==='Event Inquiry'?'selected':'' ?>>Event Inquiry</option>
                                <option <?= ($_POST['subject']??'')==='Giving & Support'?'selected':'' ?>>Giving & Support</option>
                                <option <?= ($_POST['subject']??'')==='Bible College'?'selected':'' ?>>Bible College</option>
                                <option <?= ($_POST['subject']??'')==='General Inquiry'?'selected':'' ?>>General Inquiry</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message *</label>
                        <textarea id="message" name="message" placeholder="Write your message here..." required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-crimson" style="width:100%;justify-content:center;">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- International Presence -->
<section style="padding:80px 0; background:var(--white);">
    <div class="container">
        <div class="section-header centered">
            <span class="section-label">Our Reach</span>
            <h2 class="section-title">International Presence</h2>
            <p class="section-subtitle">RPA Ministries operates in multiple countries. Connect with a representative near you.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:24px;">
            <?php
            $offices = [
                ['flag'=>'🇺🇬','country'=>'Uganda','label'=>'Headquarters','contact'=>SITE_PHONE1,'desc'=>'Nabumali, Mbale, Eastern Uganda'],
                ['flag'=>'🇳🇱','country'=>'Netherlands','label'=>'European Hub','contact'=>'Pastor Brian Nsiko','desc'=>'Dutch Chapter — Bible College'],
                ['flag'=>'🇬🇧','country'=>'United Kingdom','label'=>'UK Chapter','contact'=>'Pastor Yvonne Tumuhairwe','desc'=>'UK Regional Ministry'],
                ['flag'=>'🇸🇦','country'=>'Saudi Arabia','label'=>'Middle East','contact'=>'Pastor Florence Nakanajako','desc'=>'Diaspora Ministry'],
            ];
            foreach ($offices as $o): ?>
            <div style="background:var(--cream);border-radius:var(--radius-md);padding:28px 24px;text-align:center;border:1px solid var(--gray-200);">
                <div style="font-size:3rem;margin-bottom:12px;"><?= $o['flag'] ?></div>
                <h3 style="font-size:1.1rem;font-weight:700;color:var(--dark);margin-bottom:4px;"><?= $o['country'] ?></h3>
                <div style="font-size:0.78rem;text-transform:uppercase;letter-spacing:0.08em;color:var(--crimson);font-weight:600;margin-bottom:10px;"><?= $o['label'] ?></div>
                <p style="font-size:0.85rem;color:var(--gray-600);line-height:1.5;"><?= $o['contact'] ?><br><?= $o['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>We'd Love to Connect With You</h2>
            <p>Whether you're in Uganda or anywhere in the world — there is a community waiting for you in RPA Ministries.</p>
            <div class="cta-actions">
                <a href="give.php" class="btn btn-gold"><i class="fas fa-hand-holding-heart"></i> Partner With Us</a>
                <a href="events.php" class="btn btn-outline-white"><i class="fas fa-calendar-alt"></i> See Events</a>
            </div>
        </div>
    </div>
</section>

<button id="backToTop" style="position:fixed;bottom:28px;right:28px;width:48px;height:48px;background:var(--crimson);color:white;border:none;border-radius:50%;font-size:1.1rem;cursor:pointer;box-shadow:var(--shadow-md);opacity:0;transition:opacity 0.3s ease;display:flex;align-items:center;justify-content:center;z-index:998;" aria-label="Back to top">
    <i class="fas fa-chevron-up"></i>
</button>

<?php require_once 'includes/footer.php'; ?>
