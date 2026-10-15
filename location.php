<!-- ========================================================
     SELF-CONTAINED LOCATION & HERITAGE COMPONENT: location.php
     Hotel Traditional INN - Location & Surrounding Heritage
     Contains: Internal CSS + Semantic HTML + Interactive Google Map
     (Compact Margins & Spacing Optimized for Easy Copy-Paste)
======================================================== -->

<!-- 1. COMPONENT STYLING (CSS) -->
<style>
    /* Section Architecture - Compact Margins */
    .luxury-location-section {
        position: relative;
        padding: 4rem 1.5rem; /* Compact Section Padding */
        background-color: #F7F4EE; /* Warm Luxury Canvas Matching Screenshot */
        font-family: var(--font-sans, 'Spline Sans', sans-serif);
        overflow: hidden;
    }

    .location-container {
        max-width: 1320px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    /* 2-Column Grid Layout (Left Content + Right Map Box) */
    .location-grid {
        display: grid;
        grid-template-columns: 1fr 1.25fr;
        gap: 3.5rem;
        align-items: center;
    }

    /* Left Column Content */
    .location-content {
        display: flex;
        flex-direction: column;
    }

    .location-tag {
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 0.22em;
        color: #7D6851; /* Warm Gold / Bronze */
        text-transform: uppercase;
        display: block;
        margin-bottom: 0.5rem;
    }

    .location-title {
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-size: clamp(2.3rem, 4vw, 3.5rem);
        font-weight: 400;
        color: #171614;
        letter-spacing: -0.015em;
        line-height: 1.15;
        margin: 0 0 1rem 0;
    }

    .location-desc {
        font-size: 0.93rem;
        font-weight: 400; /* Spline Sans Regular */
        color: #555047;
        line-height: 1.65;
        margin: 0 0 1.8rem 0;
    }

    /* Proximity List Group (Exact Match with Screenshot) */
    .location-points-list {
        display: flex;
        flex-direction: column;
        gap: 1.25rem;
        margin-bottom: 2.2rem;
    }

    .location-point-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
    }

    .point-icon {
        color: #7D6851;
        width: 24px;
        height: 24px;
        flex-shrink: 0;
        margin-top: 2px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease;
    }

    .location-point-item:hover .point-icon {
        transform: scale(1.15);
        color: #9C8162;
    }

    .point-details {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .point-title {
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-size: 1.25rem;
        font-weight: 600;
        color: #171614;
        line-height: 1.2;
    }

    .point-subtitle {
        font-size: 0.82rem;
        font-weight: 400; /* Spline Sans Regular */
        color: #5E5951;
        line-height: 1.5;
    }

    /* Buttons Row */
    .location-buttons-row {
        display: flex;
        align-items: center;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .btn-maps-primary {
        display: inline-flex;
        align-items: center;
        gap: 0.55rem;
        background: #11100F;
        color: #FFFFFF;
        padding: 0.85rem 1.6rem;
        border-radius: 4px;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        text-decoration: none;
        transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        box-shadow: 0 4px 16px rgba(17, 16, 15, 0.18);
    }

    .btn-maps-primary:hover {
        background: #2D2A26;
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(17, 16, 15, 0.28);
    }

    .btn-chauffeur-secondary {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(235, 230, 222, 0.85);
        border: 1px solid #DCD5C9;
        color: #171614;
        padding: 0.85rem 1.6rem;
        border-radius: 4px;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        text-decoration: none;
        transition: all 0.35s ease;
    }

    .btn-chauffeur-secondary:hover {
        background: #FFFFFF;
        border-color: #8C7355;
        transform: translateY(-2px);
    }

    /* Right Column: Google Maps Box (Matching Screenshot) */
    .map-frame-wrapper {
        position: relative;
        width: 100%;
        height: 480px;
        border-radius: 16px;
        overflow: hidden;
        background: #E8E5DF;
        box-shadow: 0 16px 45px -8px rgba(32, 24, 16, 0.14);
        border: 1px solid rgba(220, 214, 204, 0.8);
        transition: box-shadow 0.4s ease, transform 0.4s ease;
    }

    .map-frame-wrapper:hover {
        box-shadow: 0 24px 60px -10px rgba(32, 24, 16, 0.2);
    }

    /* Live Google Map Iframe */
    .google-map-iframe {
        width: 100%;
        height: 100%;
        border: 0;
        filter: saturate(0.9) contrast(1.02);
    }

    /* Floating Hotel Review Badge (Top-Left inside Map - Matches Screenshot) */
    .map-floating-badge {
        position: absolute;
        top: 1.4rem;
        left: 1.4rem;
        background: #FFFFFF;
        border-radius: 8px;
        padding: 0.85rem 1.2rem;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        border: 1px solid rgba(0, 0, 0, 0.06);
        z-index: 10;
        display: flex;
        flex-direction: column;
        gap: 3px;
        max-width: 240px;
        pointer-events: auto;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .map-floating-badge:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
    }

    .badge-header {
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .badge-pin-icon {
        color: #D32F2F; /* Google Map Red Pin */
        font-size: 0.95rem;
        display: flex;
        align-items: center;
    }

    .badge-hotel-name {
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-size: 1.15rem;
        font-weight: 600;
        color: #171614;
        line-height: 1.2;
    }

    .badge-address {
        font-size: 0.74rem;
        color: #6C665D;
        line-height: 1.35;
    }

    .badge-rating-row {
        display: flex;
        align-items: center;
        gap: 4px;
        font-size: 0.75rem;
        font-weight: 600;
        color: #171614;
        margin-top: 2px;
    }

    .rating-star {
        color: #E7711B; /* Google Gold Star */
        font-size: 0.85rem;
    }

    .rating-count {
        color: #6C665D;
        font-weight: 400;
    }

    /* Floating Hotel Marker Icon on Map (Area matching screenshot) */
    .map-floating-marker {
        position: absolute;
        top: 48%;
        right: 8%;
        width: 32px;
        height: 38px;
        background: #11100F;
        border: 2px solid #FFFFFF;
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #EBD4B4;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.3);
        z-index: 10;
        pointer-events: none;
        animation: floatPin 3s ease-in-out infinite;
    }

    .map-floating-marker::after {
        content: '';
        position: absolute;
        bottom: -6px;
        left: 50%;
        transform: translateX(-50%);
        border-width: 6px 5px 0 5px;
        border-style: solid;
        border-color: #11100F transparent transparent transparent;
    }

    @keyframes floatPin {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
    }

    /* Scroll Animation */
    .location-reveal {
        opacity: 0;
        transform: translate3d(0, 24px, 0);
        transition: opacity 0.75s cubic-bezier(0.16, 1, 0.3, 1),
                    transform 0.75s cubic-bezier(0.16, 1, 0.3, 1);
        will-change: opacity, transform;
    }

    .location-reveal.is-visible {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }

    /* Responsive Breakpoints */
    @media (max-width: 1024px) {
        .location-grid {
            grid-template-columns: 1fr;
            gap: 2.8rem;
        }
        .map-frame-wrapper {
            height: 420px;
        }
    }

    @media (max-width: 640px) {
        .luxury-location-section {
            padding: 3.2rem 1.15rem;
        }
        .map-frame-wrapper {
            height: 340px;
        }
        .map-floating-badge {
            top: 1rem;
            left: 1rem;
            padding: 0.65rem 0.95rem;
        }
        .location-buttons-row {
            flex-direction: column;
            width: 100%;
        }
        .btn-maps-primary, .btn-chauffeur-secondary {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<!-- 2. COMPONENT HTML MARKUP -->
<section id="location" class="luxury-location-section">
    <div class="location-container">
        <div class="location-grid">
            
            <!-- Left Side: Editorial & Proximity Details -->
            <div class="location-content location-reveal">
                <span class="location-tag">PRIME SANCTUARY LOCATION</span>
                <h2 class="location-title">Location &amp; Surrounding Heritage</h2>
                <p class="location-desc">
                    Situated in the strategic heart of Delhi North near North Campus, enjoy seclusion from city bustle while remaining minutes from central Delhi's greatest cultural landmarks, metro links, and shopping avenues.
                </p>

                <!-- 3 Points with Luxury Icons (Matching Screenshot) -->
                <div class="location-points-list">
                    
                    <!-- Point 1: Hotel Address -->
                    <div class="location-point-item">
                        <div class="point-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div class="point-details">
                            <div class="point-title">Hotel Traditional INN</div>
                            <div class="point-subtitle">A 248 Ashok Vihar Phase IV, Near Police Station Bharat Nagar, Delhi - 110052</div>
                        </div>
                    </div>

                    <!-- Point 2: Airport Access -->
                    <div class="location-point-item">
                        <div class="point-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"></path>
                            </svg>
                        </div>
                        <div class="point-details">
                            <div class="point-title">Airport Access</div>
                            <div class="point-subtitle">20 Kms from Indira Gandhi International Airport (DEL) via hotel private chauffeur or taxi</div>
                        </div>
                    </div>

                    <!-- Point 3: City & Metro Proximity -->
                    <div class="location-point-item">
                        <div class="point-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>
                            </svg>
                        </div>
                        <div class="point-details">
                            <div class="point-title">City &amp; Transit Proximity</div>
                            <div class="point-subtitle">2 Kms to North Campus; 4 Kms to Kashmiri Gate Metro; 9 Kms to New Delhi Railway Station</div>
                        </div>
                    </div>

                </div>

                <!-- Action Buttons (Matching Screenshot) -->
                <div class="location-buttons-row">
                    <a href="https://maps.app.goo.gl/BkHQRDwbTtYGHpiz8" target="_blank" rel="noopener noreferrer" class="btn-maps-primary">
                        <span>OPEN IN GOOGLE MAPS</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            <polyline points="15 3 21 3 21 9"></polyline>
                            <line x1="10" y1="14" x2="21" y2="3"></line>
                        </svg>
                    </a>
                    <a href="tel:+919999241488" class="btn-chauffeur-secondary">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <span>CALL CHAUFFEUR</span>
                    </a>
                </div>
            </div>

            <!-- Right Side: Interactive Google Map Box with Floating Badge -->
            <div class="map-frame-wrapper location-reveal">
                
                <!-- Floating Review Card (Top-Left inside Map - Exact match with Screenshot) -->
                <div class="map-floating-badge">
                    <div class="badge-header">
                        <span class="badge-pin-icon">📍</span>
                        <span class="badge-hotel-name">Traditional Inn</span>
                    </div>
                    <div class="badge-address">Ashok Vihar Phase IV, Delhi</div>
                    <div class="badge-rating-row">
                        <span>4.9</span>
                        <span class="rating-star">★</span>
                        <span class="rating-count">(1,280 reviews)</span>
                    </div>
                </div>

                <!-- Floating Bed Marker (Stylized map pin) -->
                <div class="map-floating-marker" title="Hotel Traditional INN">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M2 4v16"></path>
                        <path d="M2 8h18a2 2 0 0 1 2 2v10"></path>
                        <path d="M2 17h20"></path>
                        <path d="M6 8v9"></path>
                    </svg>
                </div>

                <!-- Embedded Live Google Map for Traditional Inn Location -->
                <iframe 
                    class="google-map-iframe"
                    src="https://maps.google.com/maps?q=Traditional+Inn,+A+248+Ashok+Vihar+Phase+IV+Delhi&t=&z=16&ie=UTF8&iwloc=&output=embed" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Hotel Traditional INN Google Map Location">
                </iframe>

            </div>

        </div>
    </div>
</section>

<!-- 3. COMPONENT JAVASCRIPT (Staggered Scroll Reveal) -->
<script>
    (function initLuxuryLocation() {
        const run = () => {
            const scrollElements = document.querySelectorAll('.luxury-location-section .location-reveal');
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry, index) => {
                        if (entry.isIntersecting) {
                            setTimeout(() => {
                                entry.target.classList.add('is-visible');
                            }, index * 80);
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.12 });

                scrollElements.forEach(el => observer.observe(el));
            } else {
                scrollElements.forEach(el => el.classList.add('is-visible'));
            }
        };

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', run);
        } else {
            run();
        }
    })();
</script>