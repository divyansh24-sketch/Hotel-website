<!-- ========================================================
     SELF-CONTAINED ROOMS & SUITES COMPONENT: rooms.php
     Hotel Traditional INN - Royal Indian Heritage Accommodations
     (Compact Margins & Spacing Optimized for Easy Copy-Paste)
======================================================== -->

<!-- 1. COMPONENT STYLING (CSS) -->
<style>
    /* Section Architecture - Compact Margins & Spacing */
    .luxury-rooms-section {
        position: relative;
        padding: 4rem 1.5rem; /* Reduced Section Padding */
        background-color: #F8F5F0;
        font-family: var(--font-sans, 'Spline Sans', sans-serif);
        overflow: hidden;
    }

    .rooms-container {
        max-width: 1320px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    /* 2-Column Header Layout */
    .rooms-header-flex {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        gap: 1.8rem; /* Reduced Gap */
        margin-bottom: 2rem; /* Reduced Margin */
        flex-wrap: wrap;
    }

    .rooms-header-left {
        max-width: 650px;
    }

    .rooms-tag {
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 0.2em;
        color: #8C7355;
        text-transform: uppercase;
        display: block;
        margin-bottom: 0.4rem; /* Reduced Margin */
    }

    .rooms-title {
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-size: clamp(2.2rem, 3.8vw, 3.2rem);
        font-weight: 400;
        color: #1A1815;
        letter-spacing: -0.015em;
        line-height: 1.15;
        margin: 0;
    }

    .rooms-header-right {
        max-width: 440px;
    }

    .rooms-header-desc {
        font-size: 0.92rem;
        font-weight: 400; /* Spline Sans Regular */
        color: #5E584F;
        line-height: 1.6;
        margin: 0;
    }

    /* 3-Column Card Grid */
    .rooms-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.4rem; /* Reduced Gap between Cards */
        perspective: 1200px;
    }

    /* Individual Room Card */
    .room-card {
        background: #FFFFFF;
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid #ECE6DC;
        box-shadow: 0 8px 24px -6px rgba(35, 25, 15, 0.08);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        position: relative;
        transform: translate3d(0, 0, 0);
        transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1),
                    box-shadow 0.4s ease,
                    border-color 0.3s ease;
        will-change: transform, box-shadow;
    }

    .room-card:hover {
        transform: translateY(-6px) scale(1.015);
        box-shadow: 0 18px 40px -8px rgba(25, 18, 10, 0.16);
        border-color: rgba(197, 168, 128, 0.7);
    }

    /* Featured Middle Card Subtle Lift */
    .room-card.featured-card {
        box-shadow: 0 12px 32px -8px rgba(35, 25, 15, 0.12);
        border-color: #DFD5C6;
    }

    /* Image Box with Floating Badges */
    .room-img-box {
        position: relative;
        height: 230px; /* Compact Image Height */
        width: 100%;
        overflow: hidden;
    }

    .room-img {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .room-card:hover .room-img {
        transform: scale(1.06);
    }

    /* Top Left Status Badge */
    .room-badge {
        position: absolute;
        top: 0.9rem;
        left: 0.9rem;
        background: rgba(15, 14, 13, 0.82);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        color: #FFFFFF;
        font-size: 0.62rem;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        padding: 0.35rem 0.8rem;
        border-radius: 4px;
        z-index: 2;
    }

    .room-badge.badge-patron {
        background: rgba(110, 84, 52, 0.88);
        border: 1px solid rgba(212, 183, 144, 0.4);
    }

    /* Floating Price Tag (Bottom Right) */
    .room-price-tag {
        position: absolute;
        bottom: 0.9rem;
        right: 0.9rem;
        background: rgba(255, 255, 255, 0.94);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        padding: 0.38rem 0.85rem;
        border-radius: 4px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        display: flex;
        align-items: baseline;
        gap: 3px;
        z-index: 2;
        transition: transform 0.3s ease;
    }

    .room-card:hover .room-price-tag {
        transform: scale(1.05);
    }

    .price-currency {
        font-family: var(--font-sans, 'Spline Sans', sans-serif);
        font-weight: 600;
        font-size: 0.95rem;
        color: #171614;
    }

    .price-amount {
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-size: 1.35rem;
        font-weight: 700;
        color: #171614;
        letter-spacing: -0.02em;
    }

    .price-period {
        font-size: 0.68rem;
        color: #7A746B;
        font-weight: 500;
        margin-left: 2px;
    }

    /* Card Details Body */
    .room-content {
        padding: 1.2rem 1.3rem 1rem 1.3rem; /* Compact Content Padding */
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    /* Specs Row */
    .room-specs {
        display: flex;
        align-items: center;
        gap: 0.45rem;
        font-size: 0.72rem;
        font-weight: 500;
        color: #6C665D;
        margin-bottom: 0.65rem; /* Reduced Margin */
        flex-wrap: wrap;
    }

    .room-specs .bullet {
        color: #C5A880;
        font-size: 0.85rem;
    }

    /* Room Name */
    .room-title {
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-size: 1.45rem; /* Compact Title */
        font-weight: 600;
        color: #171614;
        line-height: 1.2;
        margin: 0 0 0.5rem 0; /* Reduced Margin */
        transition: color 0.3s ease;
    }

    .room-card:hover .room-title {
        color: #8C7355;
    }

    /* Room Description */
    .room-desc {
        font-size: 0.82rem;
        font-weight: 400; /* Spline Sans Regular */
        color: #5E5951;
        line-height: 1.55;
        margin: 0 0 1rem 0; /* Reduced Margin */
    }

    /* Features Grid (2 Columns with checkmarks) */
    .room-features-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        row-gap: 0.45rem; /* Compact Row Gap */
        column-gap: 0.6rem;
        padding-top: 0.85rem; /* Reduced Padding */
        border-top: 1px solid #F0EAE1;
        margin-bottom: 1rem; /* Reduced Margin */
    }

    .feature-item {
        display: flex;
        align-items: center;
        gap: 0.4rem;
        font-size: 0.74rem;
        color: #38342E;
        font-weight: 400; /* Spline Sans Regular */
    }

    .feature-check {
        color: #9E8055;
        font-size: 0.78rem;
        font-weight: 700;
        flex-shrink: 0;
    }

    /* Card Footer Bar */
    .room-footer {
        padding: 0.85rem 1.3rem; /* Compact Footer Padding */
        border-top: 1px solid #F0EAE1;
        background: #FAF8F5;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .guest-capacity {
        font-size: 0.65rem;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: #6E685F;
    }

    .btn-room-book {
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
        background: #11100F;
        color: #FFFFFF;
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 0.14em;
        padding: 0.55rem 1.15rem;
        border-radius: 4px;
        text-decoration: none;
        transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.12);
    }

    .btn-room-book .arrow {
        transition: transform 0.35s ease;
    }

    .btn-room-book:hover {
        background: #2D2A26;
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
    }

    .btn-room-book:hover .arrow {
        transform: translateX(3px);
    }

    /* Scroll Animation */
    .rooms-reveal {
        opacity: 0;
        transform: translate3d(0, 24px, 0);
        transition: opacity 0.75s cubic-bezier(0.16, 1, 0.3, 1),
                    transform 0.75s cubic-bezier(0.16, 1, 0.3, 1);
        will-change: opacity, transform;
    }

    .rooms-reveal.is-visible {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }

    /* Responsive Breakpoints */
    @media (max-width: 1120px) {
        .rooms-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .luxury-rooms-section {
            padding: 3.5rem 1.1rem;
        }
        .rooms-header-flex {
            flex-direction: column;
            align-items: flex-start;
            gap: 1.2rem;
            margin-bottom: 2rem;
        }
        .rooms-grid {
            grid-template-columns: 1fr;
            gap: 1.4rem;
        }
    }
</style>

<!-- 2. COMPONENT HTML MARKUP -->
<section id="rooms" class="luxury-rooms-section">
    <div class="rooms-container">
        
        <!-- Section Header (2-Column Layout) -->
        <div class="rooms-header-flex rooms-reveal">
            <div class="rooms-header-left">
                <span class="rooms-tag">ROYAL SANCTUARIES &amp; HERITAGE CHAMBERS</span>
                <h2 class="rooms-title">Accommodations &amp; Suites</h2>
            </div>
            <div class="rooms-header-right">
                <p class="rooms-header-desc">
                    Meticulously appointed with bespoke Indian heritage furnishings, hand-carved teakwood, Makrana marble baths, and restful courtyard or valley outlooks.
                </p>
            </div>
        </div>

        <!-- 3 Luxury Rooms Grid with Indian Pricing (INR ₹) -->
        <div class="rooms-grid">
            
            <!-- Room 1: Heritage Classic Single Room -->
            <div class="room-card rooms-reveal" data-tilt>
                <div class="room-img-box">
                    <span class="room-badge">SOLO SANCTUARY</span>
                    <div class="room-img" style="background-image: url('https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=1200&q=85');"></div>
                    <div class="room-price-tag">
                        <span class="price-currency">₹</span>
                        <span class="price-amount">1870</span>
                        <span class="price-period">/ night</span>
                    </div>
                </div>
                <div class="room-content">
                    <div class="room-specs">
                        <span>45 sq.m</span>
                        <span class="bullet">•</span>
                        <span>Single Plush Bed</span>
                        <span class="bullet">•</span>
                        <span>Courtyard Garden View</span>
                    </div>
                    <h3 class="room-title">Heritage Single Chamber</h3>
                    <p class="room-desc">
                        Tailored for discerning solo travelers or corporate retreat guests. Includes dedicated handcrafted work desk, Makrana marble en-suite, and curated organic amenities.
                    </p>
                    <div class="room-features-grid">
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>High-Speed Wi-Fi</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>Smart 4K UHD TV</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>Rain Shower Bath</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>Traditional Breakfast</span>
                        </div>
                    </div>
                </div>
                <div class="room-footer">
                    <span class="guest-capacity">UP TO 1 GUEST</span>
                    <a href="#book" class="btn-room-book" onclick="alert('Booking enquiry for Heritage Single Chamber (₹1,870/night)');">
                        <span>BOOK</span>
                        <span class="arrow">→</span>
                    </a>
                </div>
            </div>

            <!-- Room 2: Royal Deluxe Double Chamber (Patron Favorite) -->
            <div class="room-card featured-card rooms-reveal" data-tilt>
                <div class="room-img-box">
                    <span class="room-badge badge-patron">PATRON FAVORITE</span>
                    <div class="room-img" style="background-image: url('https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=1200&q=85');"></div>
                    <div class="room-price-tag">
                        <span class="price-currency">₹</span>
                        <span class="price-amount">2170</span>
                        <span class="price-period">/ night</span>
                    </div>
                </div>
                <div class="room-content">
                    <div class="room-specs">
                        <span>85 sq.m</span>
                        <span class="bullet">•</span>
                        <span>King / Queen Teak Bed</span>
                        <span class="bullet">•</span>
                        <span>Private Jharokha Balcony</span>
                    </div>
                    <h3 class="room-title">Royal Deluxe Double Bed</h3>
                    <p class="room-desc">
                        Immerse in intimate Indian palace serenity with hand-carved four-poster teakwood bed, sunlit private jharokha balcony with garden breezes, and freestanding copper soaking tub.
                    </p>
                    <div class="room-features-grid">
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>Private Sunset Jharokha</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>Artisanal Tea Station</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>Deep Soaking Tub</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>Royal Buffet Breakfast</span>
                        </div>
                    </div>
                </div>
                <div class="room-footer">
                    <span class="guest-capacity">UP TO 2 GUESTS</span>
                    <a href="#book" class="btn-room-book" onclick="alert('Booking enquiry for Royal Deluxe Double Bed (₹2,170/night)');">
                        <span>BOOK</span>
                        <span class="arrow">→</span>
                    </a>
                </div>
            </div>

            <!-- Room 3: Maharaja Family Haveli Suite -->
            <div class="room-card rooms-reveal" data-tilt>
                <div class="room-img-box">
                    <span class="room-badge">GRAND RESIDENCE</span>
                    <div class="room-img" style="background-image: url('https://images.unsplash.com/photo-1578683010236-d716f9a3f461?auto=format&fit=crop&w=1200&q=85');"></div>
                    <div class="room-price-tag">
                        <span class="price-currency">₹</span>
                        <span class="price-amount">3270</span>
                        <span class="price-period">/ night</span>
                    </div>
                </div>
                <div class="room-content">
                    <div class="room-specs">
                        <span>160 sq.m</span>
                        <span class="bullet">•</span>
                        <span>Master King + Twin Beds</span>
                        <span class="bullet">•</span>
                        <span>Royal Lounge Salon</span>
                    </div>
                    <h3 class="room-title">Maharaja Family Suite</h3>
                    <p class="room-desc">
                        Spacious multigenerational comfort with master king bedroom, secondary twin chamber, expansive private living salon, two en-suite marble washrooms, and dedicated personal khansama service.
                    </p>
                    <div class="room-features-grid">
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>Dual En-suite Baths</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>Organic Refreshment Bar</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>24/7 Dedicated Butler</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>Valet Parking Included</span>
                        </div>
                    </div>
                </div>
                <div class="room-footer">
                    <span class="guest-capacity">UP TO 4–5 GUESTS</span>
                    <a href="#book" class="btn-room-book" onclick="alert('Booking enquiry for Maharaja Family Suite (₹3,270/night)');">
                        <span>BOOK</span>
                        <span class="arrow">→</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 3. COMPONENT JAVASCRIPT (60fps Motion, 3D Tilt & Scroll Reveal) -->
<script>
    (function initLuxuryRooms() {
        const run = () => {
            const roomCards = document.querySelectorAll('.room-card');

            roomCards.forEach(card => {
                let animationFrameId = null;

                // 60FPS Subtle 3D Tilt on Hover
                card.addEventListener('mousemove', (e) => {
                    if (animationFrameId) cancelAnimationFrame(animationFrameId);

                    animationFrameId = requestAnimationFrame(() => {
                        const rect = card.getBoundingClientRect();
                        const x = e.clientX - rect.left;
                        const y = e.clientY - rect.top;
                        
                        const centerX = rect.width / 2;
                        const centerY = rect.height / 2;
                        
                        const rotateX = ((y - centerY) / centerY) * -4.5;
                        const rotateY = ((x - centerX) / centerX) * 4.5;

                        card.style.transform = `perspective(1000px) rotateX(${rotateX.toFixed(2)}deg) rotateY(${rotateY.toFixed(2)}deg) translateY(-6px) scale(1.015)`;
                    });
                });

                // Reset position on Mouseleave
                card.addEventListener('mouseleave', () => {
                    if (animationFrameId) cancelAnimationFrame(animationFrameId);
                    card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0) scale(1)';
                });
            });

            // Staggered Scroll Reveal with IntersectionObserver
            const scrollElements = document.querySelectorAll('.rooms-reveal');
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry, index) => {
                        if (entry.isIntersecting) {
                            setTimeout(() => {
                                entry.target.classList.add('is-visible');
                            }, index * 60); // Stagger 60ms
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