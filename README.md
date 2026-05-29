# Restoration Prayer Altar Ministries Ltd — Official Website

> **"Prayer Without Ceasing, Faith Without Fainting"** — Luke 18:1

A professional, responsive PHP website for **Restoration Prayer Altar Ministries Ltd (RPA Ministries)**, a Spirit-filled Christian ministry headquartered in Mbale, Uganda, with an international presence in the United Kingdom, Netherlands, and Saudi Arabia.

---

## Organization Overview

| Field | Details |
|---|---|
| **Full Name** | Restoration Prayer Altar Ministries Ltd |
| **Short Name** | RPA Ministries |
| **Formerly Known As** | Victory Prayer Altar |
| **Founded** | 2012 |
| **Founder** | Pastor Davis Wangoolo |
| **Headquarters** | Bukuwa Ward, Nabumali Town Council, Mbale, Uganda |
| **Registration** | Uganda Registration Services Bureau (URSB) |
| **Email** | info@restorationprayeraltar.online |
| **Website** | www.restorationprayeraltar.online |
| **Phone** | +256 782 784 452 / +256 704 690 785 |
| **P.O. Box** | P.O. Box 312608, Mbale, Uganda |

---

## Website Structure

```
RPA/
├── index.php               # Homepage
├── about.php               # About Us — mission, vision, values, history
├── leadership.php          # Pastoral leadership team
├── ministries.php          # All 8 ministry departments
├── events.php              # Upcoming events and crusades
├── gallery.php             # Photo gallery (masonry layout)
├── give.php                # Give / Support the ministry
├── contact.php             # Contact form and location info
│
├── includes/
│   ├── config.php          # Site-wide constants and helpers
│   ├── header.php          # HTML head, topbar, sticky navigation
│   └── footer.php          # Footer with links, contact, social media
│
├── assets/
│   ├── css/
│   │   └── style.css       # Full responsive stylesheet (CSS custom properties)
│   ├── js/
│   │   └── main.js         # Navigation, counters, lightbox, scroll animations
│   └── images/
│       ├── photo-1.jpg     # Ministry/leadership photos (18 total)
│       ├── photo-2.jpg
│       └── ... (photo-3 through photo-18)
│
└── README.md               # This file
```

---

## Pages

| Page | URL | Description |
|---|---|---|
| Home | `index.php` | Hero, stats, welcome, ministries, events, gallery preview, CTA |
| About Us | `about.php` | Ministry history, mission, vision, core values |
| Leadership | `leadership.php` | Founder profile + full pastoral team |
| Ministries | `ministries.php` | All 8 departments with detailed descriptions |
| Events | `events.php` | Upcoming events and past event highlights |
| Gallery | `gallery.php` | Masonry photo gallery with lightbox |
| Give | `give.php` | Giving options (mobile money, bank, international) |
| Contact | `contact.php` | Contact form, office locations, social links |

---

## Technology Stack

| Layer | Technology |
|---|---|
| **Backend** | PHP 7.4+ |
| **Frontend** | HTML5, CSS3 (Custom Properties), Vanilla JavaScript |
| **Fonts** | Google Fonts — Playfair Display, Inter, Cinzel |
| **Icons** | Font Awesome 6 |
| **Images** | Ministry photos (JPEG, optimized) |
| **Deployment** | FTP to shared hosting / cPanel |

---

## Design System

### Color Palette

| Name | Hex | Usage |
|---|---|---|
| Crimson | `#8B0000` | Primary brand color — buttons, accents, headings |
| Dark Crimson | `#6b0000` | Hover states |
| Gold | `#C8A951` | Accent — labels, icons, dividers |
| Dark Navy | `#1a1a2e` | Background dark sections |
| Cream | `#faf7f2` | Section backgrounds |
| White | `#ffffff` | Cards, clean backgrounds |

### Typography

| Font | Usage |
|---|---|
| **Cinzel** | Navigation brand, section labels, badges |
| **Playfair Display** | Headlines, hero titles, quotes |
| **Inter** | Body text, buttons, general UI |

### Key Features

- **Fully Responsive** — Mobile, tablet, and desktop optimized
- **Sticky Navigation** — Scrolls with the page, shrinks on scroll
- **Mobile Hamburger Menu** — Slide-in drawer navigation on mobile
- **Animated Counters** — Stats animate into view when scrolled to
- **Scroll Reveal** — Cards fade up gracefully as they enter viewport
- **Lightbox Gallery** — Click any gallery image to view full-size
- **Contact Form** — Server-side validated, sends email via PHP `mail()`
- **Dropdown Navigation** — Ministry sub-links accessible from nav
- **Back-to-Top Button** — Appears after scrolling 400px

---

## Ministry Departments

1. **Prayer & Intercession** — Monthly all-night prayer vigils, daily altars
2. **Evangelism & Crusades** — Annual Mbale Crusade, village outreaches
3. **Bible College & Church Development** — Led from Netherlands
4. **Women Ministry** — Conferences, mentorship, empowerment
5. **Worship & Choir** — Spirit-led music ministry
6. **Marrieds Department** — Marriage enrichment, pre-marital counseling
7. **Youth & Discipleship** — Campus outreach, youth fellowships
8. **Information & Media** — Live streaming, social media, content

---

## Deployment via FTP

### Pre-Deployment Checklist

- [ ] Update `includes/config.php` with correct live domain/email
- [ ] Verify PHP mail() is enabled on the hosting server
- [ ] Confirm all image paths resolve correctly on server
- [ ] Test contact form with a live email address
- [ ] Set correct file permissions (folders: 755, files: 644)

### FTP Upload Steps

1. **Connect** to your hosting via FTP client (FileZilla recommended)
   - Host: `ftp.restorationprayeraltar.online`
   - Username/Password: from cPanel or hosting dashboard

2. **Navigate** to the server's `public_html` (or `www`) directory

3. **Upload** all files maintaining the directory structure:
   ```
   public_html/
   ├── index.php
   ├── about.php
   ├── leadership.php
   ├── ministries.php
   ├── events.php
   ├── gallery.php
   ├── give.php
   ├── contact.php
   ├── includes/
   ├── assets/
   └── README.md
   ```

4. **Verify** the site loads at `https://www.restorationprayeraltar.online`

### Recommended FTP Client

[FileZilla](https://filezilla-project.org/) — Free, cross-platform FTP client.

---

## Local Development

To run locally, use [XAMPP](https://www.apachefriends.org/), [WAMP](https://www.wampserver.com/), or PHP's built-in server:

```bash
cd /path/to/RPA
php -S localhost:8000
```

Then open `http://localhost:8000` in your browser.

---

## International Contacts

| Country | Contact | Role |
|---|---|---|
| 🇺🇬 Uganda | Pastor Davis Wangoolo | Founder & National Overseer |
| 🇳🇱 Netherlands | Pastor Brian Nehemiah Nsiko | Bible College Director |
| 🇬🇧 United Kingdom | Pastor Yvonne Olwenyi Tumuhairwe | Regional Pastor |
| 🇸🇦 Saudi Arabia | Pastor Florence Nakanajako | Regional Pastor |

---

## Scripture Foundation

> *"Men ought always to pray and not to faint."* — **Luke 18:1**

> *"And I will restore to you the years that the locust hath eaten..."* — **Joel 2:25**

---

**© 2025 Restoration Prayer Altar Ministries Ltd. All Rights Reserved.**  
Built by [Thirdsan](https://thirdsan.com/) — Building the Next Gen Digital Africa
