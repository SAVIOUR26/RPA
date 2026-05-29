// RPA Ministries - Main JavaScript

document.addEventListener('DOMContentLoaded', () => {

    // ── Sticky header scroll effect ──────────────────────────
    const header = document.getElementById('siteHeader');
    const onScroll = () => {
        if (header) header.classList.toggle('scrolled', window.scrollY > 60);
    };
    window.addEventListener('scroll', onScroll, { passive: true });

    // ── Mobile nav toggle ─────────────────────────────────────
    const hamburger = document.getElementById('hamburger');
    const mainNav   = document.getElementById('mainNav');
    if (hamburger && mainNav) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('open');
            mainNav.classList.toggle('open');
            document.body.style.overflow = mainNav.classList.contains('open') ? 'hidden' : '';
        });

        // Close on outside click
        document.addEventListener('click', (e) => {
            if (!hamburger.contains(e.target) && !mainNav.contains(e.target)) {
                hamburger.classList.remove('open');
                mainNav.classList.remove('open');
                document.body.style.overflow = '';
            }
        });

        // Dropdown toggle on mobile
        document.querySelectorAll('.has-dropdown').forEach(item => {
            const link = item.querySelector('.nav-link');
            if (link) {
                link.addEventListener('click', (e) => {
                    if (window.innerWidth <= 768) {
                        e.preventDefault();
                        item.classList.toggle('open');
                    }
                });
            }
        });
    }

    // ── Animated counters ─────────────────────────────────────
    const animateCounter = (el) => {
        const target = parseInt(el.dataset.target, 10);
        const duration = 1800;
        const step = target / (duration / 16);
        let current = 0;
        const timer = setInterval(() => {
            current = Math.min(current + step, target);
            el.textContent = Math.floor(current) + (el.dataset.suffix || '');
            if (current >= target) clearInterval(timer);
        }, 16);
    };

    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.dataset.animated) {
                entry.target.dataset.animated = 'true';
                animateCounter(entry.target);
            }
        });
    }, { threshold: 0.4 });

    document.querySelectorAll('[data-target]').forEach(el => counterObserver.observe(el));

    // ── Scroll reveal ─────────────────────────────────────────
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll('.ministry-card, .leader-card, .event-card, .value-card, .team-card, .give-card')
        .forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            revealObserver.observe(el);
        });

    document.addEventListener('animationend', () => {}, false);

    // Override: when revealed class added, apply visible styles
    const styleReveal = new MutationObserver((mutations) => {
        mutations.forEach(m => {
            if (m.attributeName === 'class' && m.target.classList.contains('revealed')) {
                m.target.style.opacity = '1';
                m.target.style.transform = 'translateY(0)';
            }
        });
    });
    document.querySelectorAll('.ministry-card, .leader-card, .event-card, .value-card, .team-card, .give-card')
        .forEach(el => styleReveal.observe(el, { attributes: true }));

    // ── Lightbox ──────────────────────────────────────────────
    const lightbox  = document.getElementById('lightbox');
    const lbImg     = document.getElementById('lightboxImg');
    const lbClose   = document.getElementById('lightboxClose');

    if (lightbox && lbImg) {
        document.querySelectorAll('[data-lightbox]').forEach(item => {
            item.addEventListener('click', () => {
                lbImg.src = item.dataset.lightbox;
                lightbox.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });

        const closeLightbox = () => {
            lightbox.classList.remove('active');
            document.body.style.overflow = '';
        };

        if (lbClose) lbClose.addEventListener('click', closeLightbox);
        lightbox.addEventListener('click', (e) => { if (e.target === lightbox) closeLightbox(); });
        document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeLightbox(); });
    }

    // ── Contact form ──────────────────────────────────────────
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const btn = contactForm.querySelector('[type="submit"]');
            const origText = btn.textContent;
            btn.textContent = 'Sending…';
            btn.disabled = true;
            setTimeout(() => {
                btn.textContent = '✓ Message Sent!';
                btn.style.background = '#2d6a4f';
                contactForm.reset();
                setTimeout(() => {
                    btn.textContent = origText;
                    btn.style.background = '';
                    btn.disabled = false;
                }, 3500);
            }, 1200);
        });
    }

    // ── Back to top ───────────────────────────────────────────
    const btt = document.getElementById('backToTop');
    if (btt) {
        window.addEventListener('scroll', () => {
            btt.style.opacity = window.scrollY > 400 ? '1' : '0';
            btt.style.pointerEvents = window.scrollY > 400 ? 'auto' : 'none';
        }, { passive: true });
        btt.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    }
});
