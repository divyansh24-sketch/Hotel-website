<!-- ========================================================
     NAVBAR COMPONENT: navbar.php
     Hotel Traditional INN - Heritage Luxury & Reserve
     Feature: Sticky Navigation with Smart Glassmorphism
======================================================== -->
<nav id="mainNavbar" class="luxury-navbar at-top">
    <div class="nav-container">
        <!-- Brand Logo -->
        <a href="#home" class="nav-brand">
            <div class="brand-crest">
                <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="20" cy="20" r="19" stroke="currentColor" stroke-width="1.2" stroke-dasharray="2 2"/>
                    <circle cx="20" cy="20" r="16" stroke="currentColor" stroke-width="0.8"/>
                    <path d="M20 7L23 15H17L20 7Z" fill="currentColor"/>
                    <path d="M20 16V30M14 22H26" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
                    <text x="20" y="27" font-family="'Cormorant Garamond', serif" font-size="9" font-weight="700" text-anchor="middle" fill="currentColor">TI</text>
                </svg>
            </div>
            <div class="brand-text">
                <span class="brand-title">Hotel Traditional INN</span>
                <span class="brand-tagline">HERITAGE LUXURY &amp; RESERVE</span>
            </div>
        </a>

        <!-- Desktop Navigation Links -->
        <ul class="nav-menu">
            <li class="nav-item"><a href="#home" class="nav-link active">HOME</a></li>
            <li class="nav-item"><a href="#photos" class="nav-link">PHOTOS</a></li>
            <li class="nav-item"><a href="#rooms" class="nav-link">ROOMS</a></li>
            <li class="nav-item"><a href="#about" class="nav-link">ABOUT</a></li>
            <li class="nav-item"><a href="#rules" class="nav-link">HOTEL RULES</a></li>
            <li class="nav-item"><a href="#location" class="nav-link">LOCATION</a></li>
        </ul>

        <!-- Right Call To Action -->
        <div class="nav-action">
            <a href="#book" class="btn-nav-book">
                <span>BOOK NOW</span>
            </a>
            <!-- Mobile Menu Toggle Button -->
            <button class="mobile-toggle" id="mobileMenuBtn" aria-label="Toggle Navigation Menu">
                <span class="line line-1"></span>
                <span class="line line-2"></span>
            </button>
        </div>
    </div>

    <!-- Mobile Drawer Navigation -->
    <div class="mobile-drawer" id="mobileDrawer">
        <ul class="mobile-menu">
            <li><a href="#home" class="mobile-link">HOME</a></li>
            <li><a href="#photos" class="mobile-link">PHOTOS</a></li>
            <li><a href="#rooms" class="mobile-link">ROOMS</a></li>
            <li><a href="#about" class="mobile-link">ABOUT</a></li>
            <li><a href="#rules" class="mobile-link">HOTEL RULES</a></li>
            <li><a href="#location" class="mobile-link">LOCATION</a></li>
        </ul>
        <div class="mobile-drawer-cta">
            <a href="#book" class="btn-nav-book full-width">BOOK NOW</a>
        </div>
    </div>
</nav>