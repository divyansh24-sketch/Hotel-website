<!-- ========================================================
     SELF-CONTAINED AMENITIES COMPONENT: amenities.php
     Hotel Traditional INN - Distinguished Guest Amenities
     Contains: Internal CSS + Semantic HTML + 60fps Interactive JS
======================================================== -->

<!-- 1. COMPONENT STYLING (CSS) -->
<style>
    /* Section Container & Hotel Bedroom Background - Compact Spacing */
    .luxury-amenities-section {
        position: relative;
        padding: 4rem 1.5rem; /* Reduced Section Padding */
        overflow: hidden;
        min-height: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #FBF9F5;
        font-family: var(--font-sans, 'Spline Sans', sans-serif);
    }

    .amenities-bg-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        overflow: hidden;
    }

    .amenities-bg-image {
        width: 100%;
        height: 100%;
        /* Luxury Hotel Master Bedroom Suite Background */
        background-image: url('https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=2560&q=88');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        transform: scale(1.02);
        transition: transform 0.8s ease-out;
    }

    .amenities-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* Italian luxury warm villa tone matching reference */
        background: linear-gradient(
            180deg,
            rgba(251, 248, 243, 0.82) 0%,
            rgba(247, 242, 235, 0.86) 50%,
            rgba(243, 236, 226, 0.90) 100%
        );
        backdrop-filter: blur(3px);
        -webkit-backdrop-filter: blur(3px);
    }

    .amenities-container {
        position: relative;
        z-index: 2;
        max-width: 1320px;
        margin: 0 auto;
        width: 100%;
    }

    /* Header Styling */
    .amenities-header {
        text-align: center;
        max-width: 780px;
        margin: 0 auto 2.2rem auto; /* Reduced Header Margin */
    }

    .amenities-tag {
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 0.2em;
        color: #4A463F;
        text-transform: uppercase;
        display: inline-block;
        margin-bottom: 0.4rem; /* Reduced Margin */
    }

    .amenities-title {
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-size: clamp(2.2rem, 3.8vw, 3.2rem);
        font-weight: 400;
        color: #171614;
        letter-spacing: -0.015em;
        line-height: 1.15;
        margin-bottom: 0.6rem; /* Reduced Margin */
    }

    .amenities-subtitle {
        font-family: var(--font-sans, 'Spline Sans', sans-serif);
        font-size: 0.92rem;
        font-weight: 400; /* Spline Sans Regular */
        color: #48443D;
        line-height: 1.55;
    }

    /* 14 Cards Grid Layout */
    .amenities-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1rem; /* Reduced Gap between Cards */
        perspective: 1200px;
    }

    /* Individual Card Architecture */
    .amenity-card {
        background: rgba(255, 255, 255, 0.88);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.9);
        border-radius: 12px;
        padding: 1rem 1.15rem; /* Reduced Card Padding */
        display: flex;
        align-items: center;
        gap: 0.95rem; /* Compact Gap */
        box-shadow: 0 6px 18px -4px rgba(28, 20, 12, 0.07);
        cursor: pointer;
        position: relative;
        overflow: hidden;
        transform: translate3d(0, 0, 0);
        transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1),
                    box-shadow 0.35s ease,
                    background 0.3s ease,
                    border-color 0.3s ease;
        will-change: transform, box-shadow;
        user-select: none;
    }

    /* 60FPS Hover Effect */
    .amenity-card:hover {
        background: rgba(255, 255, 255, 0.98);
        border-color: rgba(197, 168, 128, 0.7);
        box-shadow: 0 20px 40px -10px rgba(32, 22, 14, 0.16);
    }

    /* Active Click Bounce */
    .amenity-card:active {
        transform: translateY(-2px) scale(0.975) !important;
        transition-duration: 0.1s;
        box-shadow: 0 6px 16px -4px rgba(32, 22, 14, 0.12);
    }

    /* Icon Box */
    .amenity-icon-box {
        width: 48px;
        height: 48px;
        border-radius: 10px;
        background: rgba(244, 239, 232, 0.85);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #2E2B27;
        flex-shrink: 0;
        transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1),
                    background 0.3s ease,
                    color 0.3s ease;
    }

    .amenity-card:hover .amenity-icon-box {
        transform: scale(1.1) rotate(5deg);
        background: #171614;
        color: #FBF9F5;
    }

    .amenity-icon-box.font-icon .p-icon {
        font-family: var(--font-sans, 'Spline Sans', sans-serif);
        font-weight: 700;
        font-size: 1.15rem;
        line-height: 1;
    }

    /* Content Typography */
    .amenity-info {
        display: flex;
        flex-direction: column;
        gap: 3px;
    }

    .amenity-name {
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-size: 1.18rem;
        font-weight: 600;
        color: #171614;
        line-height: 1.2;
        transition: color 0.3s ease;
        margin: 0;
    }

    .amenity-card:hover .amenity-name {
        color: #000;
    }

    .amenity-desc {
        font-family: var(--font-sans, 'Spline Sans', sans-serif);
        font-size: 0.76rem;
        font-weight: 400; /* Spline Sans Regular */
        color: #6C665D;
        line-height: 1.38;
        margin: 0;
    }

    /* Click Glow & Radial Ripple */
    .card-glow {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        background: radial-gradient(circle, rgba(197, 168, 128, 0.35) 0%, transparent 70%);
        border-radius: 50%;
        transform: translate(-50%, -50%);
        pointer-events: none;
        opacity: 0;
        transition: width 0.5s ease-out, height 0.5s ease-out, opacity 0.5s ease-out;
    }

    .amenity-card:active .card-glow {
        width: 260px;
        height: 260px;
        opacity: 1;
        transition: 0s;
    }

    /* Staggered Scroll Entrance Animations */
    .animate-on-scroll {
        opacity: 0;
        transform: translate3d(0, 28px, 0);
        transition: opacity 0.75s cubic-bezier(0.16, 1, 0.3, 1),
                    transform 0.75s cubic-bezier(0.16, 1, 0.3, 1);
        will-change: opacity, transform;
    }

    .animate-on-scroll.is-visible {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }

    /* Responsive Breakpoints */
    @media (max-width: 1200px) {
        .amenities-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 900px) {
        .amenities-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }
    }

    @media (max-width: 600px) {
        .luxury-amenities-section {
            padding: 3.2rem 1.1rem;
        }
        .amenities-grid {
            grid-template-columns: 1fr;
            gap: 0.85rem;
        }
    }
</style>

<!-- 2. COMPONENT HTML MARKUP -->
<section id="amenities" class="luxury-amenities-section">
    <!-- Hotel Bedroom Background Layer -->
    <div class="amenities-bg-wrapper">
        <div class="amenities-bg-image"></div>
        <div class="amenities-overlay"></div>
    </div>

    <div class="amenities-container">
        <!-- Section Header -->
        <div class="amenities-header animate-on-scroll">
            <span class="amenities-tag">REFINED HOSPITALITY</span>
            <h2 class="amenities-title">Distinguished Guest Amenities</h2>
            <p class="amenities-subtitle">
                Every room and suite at Hotel Traditional INN is curated with uncompromised comfort, state-of-the-art climate care, and private safety standards.
            </p>
        </div>

        <!-- 14 Amenities Cards Grid (Exact match with screenshot) -->
        <div class="amenities-grid">
            
            <!-- 1. Air Conditioning -->
            <div class="amenity-card animate-on-scroll">
                <div class="amenity-icon-box">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="2" x2="12" y2="22"></line>
                        <line x1="2" y1="12" x2="22" y2="12"></line>
                        <line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line>
                        <line x1="19.07" y1="4.93" x2="4.93" y2="19.07"></line>
                        <circle cx="12" cy="12" r="2.5"></circle>
                    </svg>
                </div>
                <div class="amenity-info">
                    <h3 class="amenity-name">Air Conditioning</h3>
                    <p class="amenity-desc">Silent micro-zoned climate control</p>
                </div>
                <div class="card-glow"></div>
            </div>

            <!-- 2. High Speed Wi-Fi -->
            <div class="amenity-card animate-on-scroll">
                <div class="amenity-icon-box">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12.55a11 11 0 0 1 14.08 0"></path>
                        <path d="M1.42 9a16 16 0 0 1 21.16 0"></path>
                        <path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path>
                        <line x1="12" y1="20" x2="12.01" y2="20" stroke-width="2.5"></line>
                    </svg>
                </div>
                <div class="amenity-info">
                    <h3 class="amenity-name">High Speed Wi-Fi</h3>
                    <p class="amenity-desc">Complimentary ultra-fast optical fiber</p>
                </div>
                <div class="card-glow"></div>
            </div>

            <!-- 3. Room Service -->
            <div class="amenity-card animate-on-scroll">
                <div class="amenity-icon-box">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 17h18"></path>
                        <path d="M5 17a7 7 0 0 1 14 0"></path>
                        <circle cx="12" cy="7" r="1.5" fill="currentColor"></circle>
                        <line x1="2" y1="20" x2="22" y2="20"></line>
                    </svg>
                </div>
                <div class="amenity-info">
                    <h3 class="amenity-name">Room Service</h3>
                    <p class="amenity-desc">24-hour bespoke dining &amp; sommelier</p>
                </div>
                <div class="card-glow"></div>
            </div>

            <!-- 4. Laundry -->
            <div class="amenity-card animate-on-scroll">
                <div class="amenity-icon-box">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="4" y="2" width="16" height="20" rx="2"></rect>
                        <circle cx="12" cy="13" r="5"></circle>
                        <path d="M12 10a3 3 0 0 1 3 3"></path>
                        <circle cx="7" cy="5" r="1" fill="currentColor"></circle>
                        <circle cx="10" cy="5" r="1" fill="currentColor"></circle>
                    </svg>
                </div>
                <div class="amenity-info">
                    <h3 class="amenity-name">Laundry</h3>
                    <p class="amenity-desc">Same-day valet garment pressing</p>
                </div>
                <div class="card-glow"></div>
            </div>

            <!-- 5. Smart TV -->
            <div class="amenity-card animate-on-scroll">
                <div class="amenity-icon-box">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="7" width="20" height="13" rx="2"></rect>
                        <polyline points="17 2 12 7 7 2"></polyline>
                    </svg>
                </div>
                <div class="amenity-info">
                    <h3 class="amenity-name">Smart TV</h3>
                    <p class="amenity-desc">4K UHD display with streaming suites</p>
                </div>
                <div class="card-glow"></div>
            </div>

            <!-- 6. Daily Housekeeping -->
            <div class="amenity-card animate-on-scroll">
                <div class="amenity-icon-box">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 3L6 15"></path>
                        <path d="M4 17l4 4 11-11-4-4L4 17z"></path>
                        <path d="M3 21h4"></path>
                    </svg>
                </div>
                <div class="amenity-info">
                    <h3 class="amenity-name">Daily Housekeeping</h3>
                    <p class="amenity-desc">Twice-daily service &amp; evening turndown</p>
                </div>
                <div class="card-glow"></div>
            </div>

            <!-- 7. 24/7 CCTV -->
            <div class="amenity-card animate-on-scroll">
                <div class="amenity-icon-box">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M23 7l-7 5 7 5V7z"></path>
                        <rect x="1" y="5" width="15" height="14" rx="2"></rect>
                    </svg>
                </div>
                <div class="amenity-info">
                    <h3 class="amenity-name">24/7 CCTV</h3>
                    <p class="amenity-desc">Continuous perimeter monitoring</p>
                </div>
                <div class="card-glow"></div>
            </div>

            <!-- 8. Fire Extinguishers -->
            <div class="amenity-card animate-on-scroll">
                <div class="amenity-icon-box">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 6h-6"></path>
                        <rect x="8" y="6" width="8" height="16" rx="2"></rect>
                        <path d="M12 2v4"></path>
                        <path d="M9 3h6"></path>
                        <path d="M16 9l3-1"></path>
                    </svg>
                </div>
                <div class="amenity-info">
                    <h3 class="amenity-name">Fire Extinguishers</h3>
                    <p class="amenity-desc">Certified safety equipment on every wing</p>
                </div>
                <div class="card-glow"></div>
            </div>

            <!-- 9. Refrigerator / Minibar -->
            <div class="amenity-card animate-on-scroll">
                <div class="amenity-icon-box">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="5" y="2" width="14" height="20" rx="2"></rect>
                        <line x1="5" y1="10" x2="19" y2="10"></line>
                        <line x1="9" y1="6" x2="9" y2="8"></line>
                        <line x1="9" y1="14" x2="9" y2="17"></line>
                    </svg>
                </div>
                <div class="amenity-info">
                    <h3 class="amenity-name">Refrigerator / Minibar</h3>
                    <p class="amenity-desc">Artisanal aperitifs &amp; organic refreshments</p>
                </div>
                <div class="card-glow"></div>
            </div>

            <!-- 10. 24/7 Security -->
            <div class="amenity-card animate-on-scroll">
                <div class="amenity-icon-box">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                </div>
                <div class="amenity-info">
                    <h3 class="amenity-name">24/7 Security</h3>
                    <p class="amenity-desc">Private gated grounds &amp; trained personnel</p>
                </div>
                <div class="card-glow"></div>
            </div>

            <!-- 11. Luxury Washroom -->
            <div class="amenity-card animate-on-scroll">
                <div class="amenity-icon-box">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 12h16a1 1 0 0 1 1 1v3a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4v-3a1 1 0 0 1 1-1z"></path>
                        <path d="M6 12V5a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v2"></path>
                    </svg>
                </div>
                <div class="amenity-info">
                    <h3 class="amenity-name">Luxury Washroom</h3>
                    <p class="amenity-desc">Italian marble en-suite &amp; rain shower</p>
                </div>
                <div class="card-glow"></div>
            </div>

            <!-- 12. Tea & Coffee Station -->
            <div class="amenity-card animate-on-scroll">
                <div class="amenity-icon-box">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                        <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                        <line x1="6" y1="2" x2="6" y2="4"></line>
                        <line x1="10" y1="2" x2="10" y2="4"></line>
                        <line x1="14" y1="2" x2="14" y2="4"></line>
                    </svg>
                </div>
                <div class="amenity-info">
                    <h3 class="amenity-name">Tea &amp; Coffee Station</h3>
                    <p class="amenity-desc">Illy espresso machine &amp; rare herbal infusions</p>
                </div>
                <div class="card-glow"></div>
            </div>

            <!-- 13. Buffet Breakfast -->
            <div class="amenity-card animate-on-scroll">
                <div class="amenity-icon-box">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2a9 9 0 0 0-9 9c0 4 2.5 7.5 6 8.7V22h6v-2.3c3.5-1.2 6-4.7 6-8.7a9 9 0 0 0-9-9z"></path>
                        <path d="M8 11h8"></path>
                        <path d="M9 15h6"></path>
                    </svg>
                </div>
                <div class="amenity-info">
                    <h3 class="amenity-name">Buffet Breakfast</h3>
                    <p class="amenity-desc">Pastries, organic fruits &amp; warm dishes daily</p>
                </div>
                <div class="card-glow"></div>
            </div>

            <!-- 14. Hotel Parking -->
            <div class="amenity-card animate-on-scroll">
                <div class="amenity-icon-box font-icon">
                    <span class="p-icon">P</span>
                </div>
                <div class="amenity-info">
                    <h3 class="amenity-name">Hotel Parking</h3>
                    <p class="amenity-desc">Subject to availability • Valet available</p>
                </div>
                <div class="card-glow"></div>
            </div>

        </div>
    </div>
</section>

<!-- 3. COMPONENT JAVASCRIPT (60fps Motion, 3D Tilt & Click Feedback) -->
<script>
    (function initLuxuryAmenities() {
        const run = () => {
            const amenityCards = document.querySelectorAll('.amenity-card');

            amenityCards.forEach(card => {
                let animationFrameId = null;

                // 60FPS Subtle 3D Tilt on Mousemove
                card.addEventListener('mousemove', (e) => {
                    if (animationFrameId) cancelAnimationFrame(animationFrameId);

                    animationFrameId = requestAnimationFrame(() => {
                        const rect = card.getBoundingClientRect();
                        const x = e.clientX - rect.left;
                        const y = e.clientY - rect.top;
                        
                        const centerX = rect.width / 2;
                        const centerY = rect.height / 2;
                        
                        const rotateX = ((y - centerY) / centerY) * -5.5; // Max 5.5deg
                        const rotateY = ((x - centerX) / centerX) * 5.5;

                        card.style.transform = `perspective(1000px) rotateX(${rotateX.toFixed(2)}deg) rotateY(${rotateY.toFixed(2)}deg) translateY(-5px) scale(1.02)`;
                    });
                });

                // Reset position on Mouse Leave
                card.addEventListener('mouseleave', () => {
                    if (animationFrameId) cancelAnimationFrame(animationFrameId);
                    card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0) scale(1)';
                });

                // Dynamic Ripple Coordinates on Click
                card.addEventListener('click', function(e) {
                    const glow = this.querySelector('.card-glow');
                    if (glow) {
                        const rect = this.getBoundingClientRect();
                        const x = e.clientX - rect.left;
                        const y = e.clientY - rect.top;
                        glow.style.left = `${x}px`;
                        glow.style.top = `${y}px`;
                    }
                });
            });

            // Staggered Scroll Reveal with IntersectionObserver
            const scrollElements = document.querySelectorAll('.luxury-amenities-section .animate-on-scroll');
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry, index) => {
                        if (entry.isIntersecting) {
                            setTimeout(() => {
                                entry.target.classList.add('is-visible');
                            }, index * 40); // 40ms stagger
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.1 });

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