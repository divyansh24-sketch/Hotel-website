<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Traditional INN | Heritage Luxury &amp; Reserve</title>
    
    <!-- Google Fonts: Cormorant Garamond (Serif Luxury) & Plus Jakarta Sans (Modern Minimal) -->
   <!-- Google Fonts: Cormorant Garamond (Serif Luxury) & Spline Sans (Regular) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=Spline+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    :root {
        --bg-ivory: #FBF9F5;
        --bg-glass: rgba(251, 249, 245, 0.85);
        --bg-glass-strong: rgba(251, 249, 245, 0.92);
        --text-dark: #1A1A1A;
        --text-muted: #6B6760;
        --gold-accent: #C5A880;
        --shadow-float: 0 24px 50px -12px rgba(18, 20, 24, 0.22);
        --font-serif: 'Cormorant Garamond', Georgia, serif;
        --font-sans: 'Spline Sans', -apple-system, BlinkMacSystemFont, sans-serif;
        --ease-out-expo: cubic-bezier(0.16, 1, 0.3, 1);
    }

        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
            font-size: 16px;
            -webkit-font-smoothing: antialiased;
        }

           body {
        font-family: var(--font-sans);
        font-weight: 400; /* Spline Sans Regular */
        background-color: var(--bg-ivory);
        color: var(--text-dark);
        overflow-x: hidden;
        line-height: 1.5;
    }
        a {
            text-decoration: none;
            color: inherit;
        }

        button {
            cursor: pointer;
            border: none;
            background: none;
            font-family: inherit;
        }

        /* 2. STICKY NAVBAR WITH SCROLL-UP GLASSMORPHISM */
        .luxury-navbar {
            position: fixed; /* Permanently sticky at top */
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            padding: 1.35rem 3.5rem;
            transition: padding 0.35s ease,
                        background 0.35s ease,
                        backdrop-filter 0.35s ease,
                        border-color 0.35s ease,
                        box-shadow 0.35s ease;
            will-change: background, backdrop-filter, box-shadow, padding;
        }

        /* At Page Top: Clean, warm minimal aesthetic */
        .luxury-navbar.at-top {
            background: #FBF9F5;
            box-shadow: none;
            border-bottom: 1px solid rgba(0, 0, 0, 0.04);
            padding: 1.35rem 3.5rem;
        }

        /* Sticky Scrolled State: Active Glassmorphism */
        .luxury-navbar.is-sticky {
            background: var(--bg-glass);
            backdrop-filter: blur(20px) saturate(190%);
            -webkit-backdrop-filter: blur(20px) saturate(190%);
            border-bottom: 1px solid rgba(255, 255, 255, 0.65);
            box-shadow: 0 10px 30px -8px rgba(0, 0, 0, 0.08);
            padding: 0.95rem 3.5rem;
        }

        /* Scroll Up: Enhanced Frosted Glass Highlight */
        .luxury-navbar.scrolled-up {
            background: var(--bg-glass-strong);
            backdrop-filter: blur(25px) saturate(200%);
            -webkit-backdrop-filter: blur(25px) saturate(200%);
            border-bottom: 1px solid rgba(255, 255, 255, 0.9);
            box-shadow: 0 14px 40px -10px rgba(0, 0, 0, 0.12);
        }

        .nav-container {
            max-width: 1440px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .nav-brand {
            display: flex;
            align-items: center;
            gap: 0.9rem;
            color: var(--text-dark);
            transition: opacity 0.3s ease;
        }

        .nav-brand:hover {
            opacity: 0.85;
        }

        .brand-crest {
            width: 36px;
            height: 36px;
            color: #2A2825;
            flex-shrink: 0;
            transition: transform 0.4s var(--ease-out-expo);
        }

        .nav-brand:hover .brand-crest {
            transform: rotate(6deg) scale(1.05);
        }

        .brand-text {
            display: flex;
            flex-direction: column;
        }

        .brand-title {
            font-family: var(--font-serif);
            font-size: 1.45rem;
            font-weight: 600;
            line-height: 1.1;
            color: #171614;
            letter-spacing: -0.01em;
        }

        .brand-tagline {
            font-size: 0.58rem;
            font-weight: 600;
            letter-spacing: 0.18em;
            color: #7A746B;
            margin-top: 2px;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            list-style: none;
            gap: 2.3rem;
        }

        .nav-link {
            font-size: 0.76rem;
            font-weight: 600;
            letter-spacing: 0.14em;
            color: #2D2A26;
            position: relative;
            padding: 0.4rem 0;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0%;
            height: 1.5px;
            background-color: #171614;
            transition: width 0.3s var(--ease-out-expo);
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        .nav-link:hover {
            color: #000;
        }

        .btn-nav-book {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #0F0E0D;
            color: #FFFFFF;
            font-size: 0.72rem;
            font-weight: 600;
            letter-spacing: 0.16em;
            padding: 0.72rem 1.7rem;
            border-radius: 4px;
            transition: all 0.35s var(--ease-out-expo);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
        }

        .btn-nav-book:hover {
            background-color: #292825;
            transform: translateY(-1.5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.18);
        }

        .mobile-toggle {
            display: none;
            flex-direction: column;
            gap: 6px;
            padding: 0.5rem;
        }

        .mobile-toggle .line {
            width: 24px;
            height: 2px;
            background: #171614;
            transition: all 0.3s ease;
        }

        .mobile-drawer {
            display: none;
        }

        /* 3. Hero Section & Parallax Zoom */
        .luxury-hero {
            position: relative;
            min-height: 100vh;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding-top: 6.5rem;
            padding-bottom: 3.5rem;
            overflow: hidden;
        }

        .hero-bg-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            overflow: hidden;
        }

        .hero-bg-image {
            width: 100%;
            height: 100%;
            background-image: url('https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=2560&q=88');
            background-position: center 38%;
            background-size: cover;
            background-repeat: no-repeat;
            transform: scale(1.04);
            animation: heroZoom 14s ease-out forwards;
            will-change: transform;
        }

        @keyframes heroZoom {
            0% { transform: scale(1.08); }
            100% { transform: scale(1.0); }
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                180deg,
                rgba(17, 16, 14, 0.35) 0%,
                rgba(17, 16, 14, 0.48) 50%,
                rgba(12, 11, 10, 0.78) 100%
            );
        }

        .hero-content-wrapper {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 1280px;
            margin: auto;
            padding: 3rem 2rem 2rem 2rem;
            display: flex;
            justify-content: center;
            text-align: center;
        }

        .hero-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 950px;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            background: rgba(255, 255, 255, 0.16);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.28);
            padding: 0.48rem 1.25rem;
            border-radius: 50px;
            color: #FFFFFF;
            margin-bottom: 1.8rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        }

        .hero-badge .badge-dot {
            font-size: 0.65rem;
            opacity: 0.8;
            color: #FFFFFF;
        }

        .hero-badge .badge-text {
            font-size: 0.72rem;
            font-weight: 600;
            letter-spacing: 0.2em;
            text-transform: uppercase;
        }

        .hero-title {
            font-family: var(--font-serif);
            font-size: clamp(2.4rem, 5.2vw, 4.4rem);
            font-weight: 400;
            line-height: 1.14;
            color: #FFFFFF;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.35);
            margin-bottom: 1.4rem;
            letter-spacing: -0.015em;
        }

        .hero-title span {
            font-style: italic;
            font-weight: 300;
        }

       .hero-description {
        font-family: var(--font-sans);
        font-size: clamp(0.95rem, 1.2vw, 1.1rem);
        font-weight: 400; /* Spline Sans Regular */
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.7;
        max-width: 660px;
        margin-bottom: 2.2rem;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    }

        .hero-actions {
            display: flex;
            align-items: center;
            gap: 1.2rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn-primary-luxury {
            display: inline-flex;
            align-items: center;
            gap: 0.65rem;
            background-color: #FFFFFF;
            color: #121110;
            padding: 0.95rem 2.2rem;
            border-radius: 4px;
            font-size: 0.76rem;
            font-weight: 700;
            letter-spacing: 0.16em;
            transition: all 0.35s var(--ease-out-expo);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
        }

        .btn-primary-luxury .icon-down {
            transition: transform 0.35s var(--ease-out-expo);
        }

        .btn-primary-luxury:hover {
            background-color: #F8F5F0;
            transform: translateY(-2px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.32);
        }

        .btn-primary-luxury:hover .icon-down {
            transform: translateY(3px);
        }

        .btn-glass-luxury {
            display: inline-flex;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.16);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.35);
            color: #FFFFFF;
            padding: 0.95rem 2.2rem;
            border-radius: 4px;
            font-size: 0.76rem;
            font-weight: 600;
            letter-spacing: 0.16em;
            transition: all 0.35s var(--ease-out-expo);
        }

        .btn-glass-luxury:hover {
            background-color: rgba(255, 255, 255, 0.28);
            border-color: rgba(255, 255, 255, 0.6);
            transform: translateY(-2px);
        }

        /* 4. Floating Booking Bar */
        .booking-bar-wrapper {
            position: relative;
            z-index: 3;
            width: 100%;
            max-width: 1240px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .booking-card {
            background: #FFFFFF;
            border-radius: 12px;
            padding: 1.1rem 1.6rem;
            display: grid;
            grid-template-columns: 1.2fr auto 1.2fr auto 1.6fr auto 1.4fr 1.6fr;
            align-items: center;
            gap: 1.2rem;
            box-shadow: var(--shadow-float);
            border: 1px solid rgba(255, 255, 255, 0.8);
            transition: transform 0.35s ease, box-shadow 0.35s ease;
        }

        .booking-card:hover {
            box-shadow: 0 30px 60px -10px rgba(10, 12, 16, 0.3);
        }

        .booking-divider {
            width: 1px;
            height: 48px;
            background: #E8E4DD;
        }

        .booking-item {
            position: relative;
            display: flex;
            flex-direction: column;
            cursor: pointer;
            padding: 0.4rem 0.5rem;
            border-radius: 8px;
            transition: background 0.25s ease;
        }

        .booking-item:hover {
            background: #F8F6F2;
        }

        .booking-item-header {
            display: flex;
            align-items: center;
            gap: 0.45rem;
            margin-bottom: 0.25rem;
            color: #7D786E;
        }

        .item-label {
            font-size: 0.68rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            color: #4A463F;
            text-transform: uppercase;
        }

        .item-value-wrap {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 0.4rem;
        }

        .item-value {
            font-family: var(--font-serif);
            font-size: 1.15rem;
            font-weight: 600;
            color: #171614;
            white-space: nowrap;
        }

        .item-subtext {
            font-size: 0.72rem;
            color: #8C867D;
            margin-top: 2px;
            white-space: nowrap;
        }

        .chevron-icon {
            color: #4A463F;
            transition: transform 0.3s ease;
        }

        .custom-select-module.open .chevron-icon {
            transform: rotate(180deg);
        }

        .hidden-native-input {
            position: absolute;
            opacity: 0;
            pointer-events: none;
            width: 0;
            height: 0;
        }

        .custom-dropdown {
            position: absolute;
            bottom: calc(100% + 12px);
            left: 0;
            min-width: 260px;
            background: #FFFFFF;
            border-radius: 10px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            border: 1px solid #ECE7DF;
            padding: 0.5rem;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.25s var(--ease-out-expo);
            z-index: 50;
        }

        .custom-select-module.open .custom-dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-option {
            padding: 0.65rem 0.9rem;
            border-radius: 6px;
            display: flex;
            flex-direction: column;
            gap: 2px;
            transition: background 0.2s ease;
        }

        .dropdown-option:hover {
            background: #F4EFEA;
        }

        .dropdown-option.active {
            background: #EFE9E0;
        }

        .opt-title {
            font-size: 0.85rem;
            font-weight: 600;
            color: #1C1B19;
        }

        .opt-desc {
            font-size: 0.7rem;
            color: #7D786E;
        }

        .booking-cta-module {
            display: flex;
            flex-direction: column;
            gap: 0.45rem;
            align-items: center;
        }

        .btn-book-submit {
            width: 100%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.6rem;
            background: #0E0D0C;
            color: #FFFFFF;
            padding: 0.9rem 1.4rem;
            border-radius: 6px;
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.14em;
            transition: all 0.35s var(--ease-out-expo);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
        }

        .btn-book-submit:hover {
            background: #252422;
            transform: translateY(-2px);
            box-shadow: 0 10px 24px rgba(0, 0, 0, 0.3);
        }

        .btn-book-submit:hover .arrow-icon {
            transform: translateX(4px);
        }

        .guarantee-badge {
            display: flex;
            align-items: center;
            gap: 0.35rem;
            font-size: 0.62rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            color: #6C665D;
        }

        .guarantee-badge svg {
            color: #C5A880;
        }

        /* 5. 60FPS Staggered Reload Animation */
        @keyframes reloadEntrance {
            0% {
                opacity: 0;
                transform: translate3d(0, 26px, 0);
            }
            100% {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        .animate-reload {
            opacity: 0;
            animation: reloadEntrance 0.85s var(--ease-out-expo) forwards;
            animation-delay: var(--delay, 100ms);
            will-change: transform, opacity;
        }

        /* 6. Sample Scroll Section */
        .sample-section {
            max-width: 1280px;
            margin: 0 auto;
            padding: 7rem 2rem;
        }

        .section-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 4rem auto;
        }

        .section-tag {
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.2em;
            color: var(--gold-accent);
            text-transform: uppercase;
            margin-bottom: 0.8rem;
            display: block;
        }

        .section-title {
            font-family: var(--font-serif);
            font-size: 2.8rem;
            font-weight: 400;
            color: #171614;
            line-height: 1.2;
            margin-bottom: 1rem;
        }

        .section-subtitle {
            font-size: 1rem;
            color: var(--text-muted);
            font-weight: 300;
            line-height: 1.7;
        }

        .grid-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
        }

        .preview-card {
            background: #FFFFFF;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #ECE7DF;
            transition: transform 0.35s ease, box-shadow 0.35s ease;
        }

        .preview-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 36px rgba(0, 0, 0, 0.08);
        }

        .preview-img {
            height: 240px;
            background-size: cover;
            background-position: center;
        }

        .preview-info {
            padding: 1.8rem;
        }

        .preview-info h3 {
            font-family: var(--font-serif);
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .preview-info p {
            font-size: 0.88rem;
            color: #6C665D;
            line-height: 1.6;
        }

        /* 7. Responsive Breakpoints */
        @media (max-width: 1100px) {
            .booking-card {
                grid-template-columns: 1fr 1fr;
                gap: 1rem;
            }
            .booking-divider {
                display: none;
            }
            .booking-cta-module {
                grid-column: span 2;
            }
        }

        @media (max-width: 900px) {
            .luxury-navbar,
            .luxury-navbar.is-sticky,
            .luxury-navbar.scrolled-up {
                padding: 1rem 1.5rem;
            }

            .nav-menu,
            .btn-nav-book {
                display: none;
            }

            .mobile-toggle {
                display: flex;
            }

            .mobile-drawer {
                display: block;
                position: fixed;
                top: 0;
                right: -100%;
                width: 78%;
                max-width: 340px;
                height: 100vh;
                background: #FFFFFF;
                box-shadow: -10px 0 30px rgba(0, 0, 0, 0.15);
                padding: 5rem 2rem 2rem 2rem;
                transition: right 0.4s var(--ease-out-expo);
                z-index: 1000;
            }

            .mobile-drawer.active {
                right: 0;
            }

            .mobile-menu {
                list-style: none;
                display: flex;
                flex-direction: column;
                gap: 1.5rem;
            }

            .mobile-link {
                font-size: 1rem;
                font-weight: 600;
                letter-spacing: 0.12em;
                color: #171614;
            }

            .mobile-drawer-cta {
                margin-top: 3rem;
            }

            .btn-nav-book.full-width {
                display: flex;
                width: 100%;
                text-align: center;
            }

            .booking-card {
                grid-template-columns: 1fr;
            }

            .booking-cta-module {
                grid-column: span 1;
            }
        }
    </style>
</head>
<body>

    <!-- ========================================================
         BODY: CALL NAVBAR & HERO SECTION VIA PHP INCLUDES
    ======================================================== -->
    <?php include 'navbar.php'; ?>

    <?php include 'hero.php'; ?>
    <?php include 'floating-actions.php'; ?>
    <?php include 'amenities.php'; ?>
    <?php include 'rooms.php'; ?>
    <?php include 'gallery.php'; ?>
    <?php include 'about.php'; ?>
    <?php include 'location.php'; ?>
    <?php include 'rules.php'; ?>
    <?php include 'faq-contact.php'; ?>
    <?php include 'footer.php'; ?>

    <!-- SAMPLE CONTENT FOR TESTING STICKY NAVBAR & GLASSMORPHISM -->
    
    <!-- ========================================================
         JAVASCRIPT LOGIC (Bottom of File, before </body>)
    ======================================================== -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            /* 1. 60FPS STICKY NAVBAR & SCROLL-UP GLASSMORPHISM ENGINE */
            const navbar = document.getElementById('mainNavbar');
            let lastScrollY = window.pageYOffset || document.documentElement.scrollTop;
            let ticking = false;

            function updateNavbar() {
                const currentScrollY = window.pageYOffset || document.documentElement.scrollTop;
                const scrollDifference = currentScrollY - lastScrollY;

                // State A: Page Top -> Minimal Ivory
                if (currentScrollY <= 25) {
                    navbar.classList.add('at-top');
                    navbar.classList.remove('is-sticky');
                    navbar.classList.remove('scrolled-up');
                } 
                // State B: Scrolled -> Sticky with Glassmorphism
                else {
                    navbar.classList.remove('at-top');
                    navbar.classList.add('is-sticky');

                    // If user scrolls UP -> enhance/highlight glassmorphism
                    if (scrollDifference < -2) {
                        navbar.classList.add('scrolled-up');
                    } else if (scrollDifference > 3) {
                        navbar.classList.remove('scrolled-up');
                    }
                }

                lastScrollY = Math.max(0, currentScrollY);
                ticking = false;
            }

            window.addEventListener('scroll', () => {
                if (!ticking) {
                    window.requestAnimationFrame(updateNavbar);
                    ticking = true;
                }
            }, { passive: true });

            // Initialize on page load
            updateNavbar();


            /* 2. INTERACTIVE BOOKING BAR LOGIC */
            // Dropdown selection (Room Selection & Guests)
            function setupDropdown(moduleId, textId, subId = null) {
                const module = document.getElementById(moduleId);
                if (!module) return;

                const textElem = document.getElementById(textId);
                const subElem = subId ? document.getElementById(subId) : null;
                const options = module.querySelectorAll('.dropdown-option');

                module.addEventListener('click', (e) => {
                    document.querySelectorAll('.custom-select-module').forEach(el => {
                        if (el !== module) el.classList.remove('open');
                    });
                    module.classList.toggle('open');
                    e.stopPropagation();
                });

                options.forEach(opt => {
                    opt.addEventListener('click', (e) => {
                        e.stopPropagation();
                        options.forEach(o => o.classList.remove('active'));
                        opt.classList.add('active');

                        const title = opt.getAttribute('data-title');
                        const desc = opt.getAttribute('data-sub');

                        if (textElem) textElem.textContent = title;
                        if (subElem && desc) subElem.textContent = desc;

                        module.classList.remove('open');
                    });
                });
            }

            setupDropdown('roomModule', 'selectedRoomText', 'selectedRoomSub');
            setupDropdown('guestModule', 'selectedGuestText');

            document.addEventListener('click', () => {
                document.querySelectorAll('.custom-select-module').forEach(el => el.classList.remove('open'));
            });

            // Date Picker sync
            function setupDatePicker(moduleId, inputId, displayId) {
                const module = document.getElementById(moduleId);
                const input = document.getElementById(inputId);
                const display = document.getElementById(displayId);

                if (!module || !input || !display) return;

                module.addEventListener('click', () => {
                    if (typeof input.showPicker === 'function') {
                        input.showPicker();
                    } else {
                        input.focus();
                    }
                });

                input.addEventListener('change', () => {
                    if (input.value) {
                        const [year, month, day] = input.value.split('-');
                        display.textContent = `${day} / ${month} / ${year}`;
                    }
                });
            }

            setupDatePicker('checkInModule', 'checkInInput', 'checkInDisplay');
            setupDatePicker('checkOutModule', 'checkOutInput', 'checkOutDisplay');


            /* 3. MOBILE HAMBURGER DRAWER */
            const mobileBtn = document.getElementById('mobileMenuBtn');
            const mobileDrawer = document.getElementById('mobileDrawer');

            if (mobileBtn && mobileDrawer) {
                mobileBtn.addEventListener('click', () => {
                    mobileDrawer.classList.toggle('active');
                });

                document.querySelectorAll('.mobile-link').forEach(link => {
                    link.addEventListener('click', () => {
                        mobileDrawer.classList.remove('active');
                    });
                });
            }

        });
    </script>
</body>
</html>