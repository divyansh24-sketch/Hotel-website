<!-- ========================================================
     HERO SECTION COMPONENT: hero.php
     Hotel Traditional INN - Heritage Luxury & Reserve
     Feature: 60fps Staggered Reload Animations & Interactive Booking Bar
======================================================== -->
<section id="home" class="luxury-hero">
    <!-- Background Image Layer with Cinematic Parallax / Zoom -->
    <div class="hero-bg-wrapper">
        <div class="hero-bg-image"></div>
        <div class="hero-overlay"></div>
    </div>

    <!-- Centered Hero Typography & Actions -->
    <div class="hero-content-wrapper">
        <div class="hero-content">
            <!-- Pill Badge (Stagger Delay 1) -->
            <div class="hero-badge animate-reload" style="--delay: 150ms;">
                <span class="badge-dot">•</span>
                <span class="badge-text">ESTATE &amp; PRIVATE THERMAL RESERVE</span>
                <span class="badge-dot">•</span>
            </div>

            <!-- Main Headline (Stagger Delay 2) -->
            <h1 class="hero-title animate-reload" style="--delay: 300ms;">
                A Sanctuary of Timeless Grandeur &amp;<br>
                <span>Refined Indulgence</span>
            </h1>

            <!-- Subtitle Description (Stagger Delay 3) -->
            <p class="hero-description animate-reload" style="--delay: 450ms;">
                Nestled along pristine Mediterranean cliffs, embrace bespoke Italian hospitality
                where monumental Roman poise meets tranquil contemporary luxury.
            </p>

            <!-- Action Buttons (Stagger Delay 4) -->
            <div class="hero-actions animate-reload" style="--delay: 600ms;">
                <a href="#rooms" class="btn-primary-luxury">
                    <span>EXPLORE ROOMS</span>
                    <svg class="icon-down" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <polyline points="19 12 12 19 5 12"></polyline>
                    </svg>
                </a>
                <a href="#amenities" class="btn-glass-luxury">
                    <span>VIEW AMENITIES</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Floating Reservation / Booking Bar (Stagger Delay 5) -->
    <div class="booking-bar-wrapper animate-reload" style="--delay: 750ms;">
        <form class="booking-card" id="bookingForm" onsubmit="event.preventDefault(); alert('Reservation enquiry initiated for Hotel Traditional INN.');">
            
            <!-- Item 1: Check-in -->
            <div class="booking-item date-picker-module" id="checkInModule">
                <div class="booking-item-header">
                    <svg class="item-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    <span class="item-label">CHECK-IN</span>
                </div>
                <div class="item-value-wrap">
                    <span class="item-value" id="checkInDisplay">18 / 10 / 2026</span>
                    <input type="date" id="checkInInput" class="hidden-native-input" value="2026-10-18">
                </div>
                <span class="item-subtext">From 15:00</span>
            </div>

            <div class="booking-divider"></div>

            <!-- Item 2: Check-out -->
            <div class="booking-item date-picker-module" id="checkOutModule">
                <div class="booking-item-header">
                    <svg class="item-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    <span class="item-label">CHECK-OUT</span>
                </div>
                <div class="item-value-wrap">
                    <span class="item-value" id="checkOutDisplay">24 / 10 / 2026</span>
                    <input type="date" id="checkOutInput" class="hidden-native-input" value="2026-10-24">
                </div>
                <span class="item-subtext">Until 12:00</span>
            </div>

            <div class="booking-divider"></div>

            <!-- Item 3: Room Selection Dropdown -->
            <div class="booking-item custom-select-module" id="roomModule">
                <div class="booking-item-header">
                    <svg class="item-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 7h18M3 12h18M3 17h18"></path>
                        <path d="M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16"></path>
                    </svg>
                    <span class="item-label">ROOM SELECTION</span>
                </div>
                <div class="item-value-wrap select-trigger">
                    <span class="item-value" id="selectedRoomText">Double Bed Room</span>
                    <svg class="chevron-icon" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </div>
                <span class="item-subtext" id="selectedRoomSub">Bespoke Linens &amp; View</span>

                <!-- Dropdown Menu -->
                <div class="custom-dropdown" id="roomDropdown">
                    <div class="dropdown-option active" data-title="Double Bed Room" data-sub="Bespoke Linens &amp; View">
                        <span class="opt-title">Double Bed Room</span>
                        <span class="opt-desc">Bespoke Linens &amp; View</span>
                    </div>
                    <div class="dropdown-option" data-title="Imperial Cliff Suite" data-sub="Panoramic Sea &amp; Thermal Plunge">
                        <span class="opt-title">Imperial Cliff Suite</span>
                        <span class="opt-desc">Panoramic Sea &amp; Thermal Plunge</span>
                    </div>
                    <div class="dropdown-option" data-title="Palazzo Penthouse" data-sub="Private Butler &amp; Helipad Access">
                        <span class="opt-title">Palazzo Penthouse</span>
                        <span class="opt-desc">Private Butler &amp; Helipad Access</span>
                    </div>
                    <div class="dropdown-option" data-title="Mediterranean Villa" data-sub="3 Bedrooms, Infinity Pool &amp; Garden">
                        <span class="opt-title">Mediterranean Villa</span>
                        <span class="opt-desc">3 Bedrooms, Infinity Pool &amp; Garden</span>
                    </div>
                </div>
            </div>

            <div class="booking-divider"></div>

            <!-- Item 4: Guests Dropdown -->
            <div class="booking-item custom-select-module" id="guestModule">
                <div class="booking-item-header">
                    <svg class="item-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    <span class="item-label">GUESTS</span>
                </div>
                <div class="item-value-wrap select-trigger">
                    <span class="item-value" id="selectedGuestText">2 Adults</span>
                    <svg class="chevron-icon" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </div>
                <span class="item-subtext">Private Concierge Service</span>

                <!-- Dropdown Menu -->
                <div class="custom-dropdown" id="guestDropdown">
                    <div class="dropdown-option" data-title="1 Adult" data-sub="Solo Retreat">
                        <span class="opt-title">1 Adult</span>
                        <span class="opt-desc">Solo Retreat</span>
                    </div>
                    <div class="dropdown-option active" data-title="2 Adults" data-sub="Couples Escape">
                        <span class="opt-title">2 Adults</span>
                        <span class="opt-desc">Couples Escape</span>
                    </div>
                    <div class="dropdown-option" data-title="2 Adults, 1 Child" data-sub="Family Experience">
                        <span class="opt-title">2 Adults, 1 Child</span>
                        <span class="opt-desc">Family Experience</span>
                    </div>
                    <div class="dropdown-option" data-title="Private Reserve Group" data-sub="Up to 8 Guests">
                        <span class="opt-title">Private Reserve Group</span>
                        <span class="opt-desc">Up to 8 Guests</span>
                    </div>
                </div>
            </div>

            <!-- Item 5: Submit Action -->
            <div class="booking-cta-module">
                <button type="submit" class="btn-book-submit">
                    <span>BOOK NOW</span>
                    <svg class="arrow-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </button>
                <div class="guarantee-badge">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        <polyline points="9 12 11 14 15 10"></polyline>
                    </svg>
                    <span>BEST RATE GUARANTEED</span>
                </div>
            </div>

        </form>
    </div>
</section>