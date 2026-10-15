<!-- ========================================================
     SELF-CONTAINED ABOUT COMPONENT: about.php
     Hotel Traditional INN - About Us & Strategic Accessibility
     (Compact Margins / Spacing Optimized for Easy Copy-Paste)
======================================================== -->

<!-- 1. COMPONENT STYLING (CSS) -->
<style>
    /* Section Architecture - Compact Margins & Spacing */
    .luxury-about-section {
        position: relative;
        padding: 4rem 1.5rem; /* Reduced Section Padding */
        background-color: #FAF7F2;
        font-family: var(--font-sans, 'Spline Sans', sans-serif);
        overflow: hidden;
    }

    .about-container {
        max-width: 1320px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1.2fr 0.9fr;
        gap: 2.5rem; /* Reduced Gap between Columns */
        align-items: center;
        position: relative;
        z-index: 2;
    }

    /* Left Column: Story & Information */
    .about-content-left {
        display: flex;
        flex-direction: column;
    }

    .about-tag {
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 0.2em;
        color: #8C7355;
        text-transform: uppercase;
        display: block;
        margin-bottom: 0.4rem; /* Reduced Margin */
    }

    .about-title {
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-size: clamp(2.2rem, 3.8vw, 3.2rem);
        font-weight: 400;
        color: #171614;
        letter-spacing: -0.015em;
        line-height: 1.15;
        margin: 0 0 0.85rem 0; /* Reduced Margin */
    }

    .about-desc-primary {
        font-size: 0.98rem;
        font-weight: 400; /* Spline Sans Regular */
        color: #38342E;
        line-height: 1.6;
        margin: 0 0 0.5rem 0; /* Reduced Margin */
    }

    .about-desc-secondary {
        font-size: 0.86rem;
        font-weight: 400; /* Spline Sans Regular */
        color: #635C52;
        line-height: 1.6;
        margin: 0 0 1.2rem 0; /* Reduced Margin */
    }

    /* Key Information Action Badges (Phone & Check-in) */
    .about-key-cards {
        display: flex;
        gap: 0.9rem;
        margin-bottom: 1.2rem; /* Reduced Margin */
        flex-wrap: wrap;
    }

    .about-badge-card {
        background: #FFFFFF;
        border: 1px solid #ECE4D8;
        border-radius: 8px;
        padding: 0.65rem 1.1rem; /* Compact Padding */
        display: flex;
        align-items: center;
        gap: 0.7rem;
        box-shadow: 0 3px 12px rgba(28, 20, 10, 0.04);
        transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .about-badge-card:hover {
        transform: translateY(-2px);
        border-color: #C5A880;
        box-shadow: 0 6px 18px rgba(28, 20, 10, 0.08);
    }

    .badge-icon-box {
        width: 32px;
        height: 32px;
        border-radius: 6px;
        background: #F5EFE6;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #8C7355;
    }

    .badge-details {
        display: flex;
        flex-direction: column;
    }

    .badge-label {
        font-size: 0.62rem;
        font-weight: 700;
        letter-spacing: 0.1em;
        color: #7D7569;
        text-transform: uppercase;
    }

    .badge-val {
        font-size: 0.9rem;
        font-weight: 600;
        color: #171614;
        text-decoration: none;
    }

    /* Accessibility / Connectivity Section */
    .accessibility-block {
        background: #FFFFFF;
        border: 1px solid #ECE4D8;
        border-radius: 10px;
        padding: 1.1rem 1.3rem; /* Compact Padding */
        box-shadow: 0 6px 18px -4px rgba(35, 25, 15, 0.05);
        margin-bottom: 1.4rem; /* Reduced Margin */
    }

    .accessibility-header {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-bottom: 0.75rem; /* Reduced Margin */
        padding-bottom: 0.5rem;
        border-bottom: 1px solid #F2ECE3;
    }

    .accessibility-header h4 {
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-size: 1.25rem;
        font-weight: 600;
        color: #171614;
        margin: 0;
    }

    .accessibility-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        column-gap: 1.2rem;
        row-gap: 0.5rem; /* Compact Row Gap */
    }

    .access-item {
        display: flex;
        align-items: flex-start;
        gap: 0.45rem;
        font-size: 0.75rem;
        color: #4A443A;
        line-height: 1.35;
        font-weight: 400; /* Spline Sans Regular */
    }

    .access-bullet {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background-color: #E03E3E;
        box-shadow: 0 0 0 2.5px rgba(224, 62, 62, 0.15);
        flex-shrink: 0;
        margin-top: 4px;
    }

    .access-name {
        color: #26231E;
        font-weight: 500;
    }

    .access-dist {
        color: #8C7355;
        font-weight: 600;
        white-space: nowrap;
    }

    /* Bottom Stats Row */
    .about-stats-row {
        display: flex;
        align-items: center;
        gap: 2.5rem; /* Compact Gap */
        padding-top: 1.1rem; /* Compact Padding */
        border-top: 1px solid #EBE4DA;
    }

    .stat-item {
        display: flex;
        flex-direction: column;
    }

    .stat-number {
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-size: 1.95rem; /* Compact Font */
        font-weight: 600;
        color: #171614;
        line-height: 1;
        margin-bottom: 0.2rem;
    }

    .stat-label {
        font-size: 0.65rem;
        color: #7A746B;
        font-weight: 500;
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }

    /* Right Column: Staggered Dual Visual Composition */
    .about-visual-right {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 440px; /* Compact Visual Height */
    }

    /* Main Landscape Building Card */
    .visual-card-primary {
        position: absolute;
        top: 10px;
        left: 0;
        width: 74%;
        height: 330px;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 15px 35px -8px rgba(25, 18, 10, 0.2);
        border: 4px solid #FFFFFF;
        z-index: 1;
        transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.5s ease;
    }

    .visual-card-primary .visual-img {
        width: 100%;
        height: 100%;
        background-image: url('https://media.istockphoto.com/id/639389404/photo/authentic-indian-food.jpg?s=612x612&w=0&k=20&c=gbfAu17L1gtHmuo5biByhfCefAtYUtGQpyxMmi9_Mus=');
        background-size: 215%;
        background-position: left top;
        background-repeat: no-repeat;
        transition: transform 0.8s ease;
    }

    .visual-card-primary:hover .visual-img {
        transform: scale(1.06);
    }

    /* Floating Staggered Secondary Card */
    .visual-card-secondary {
        position: absolute;
        bottom: 10px;
        right: 0;
        width: 56%;
        height: 290px;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 20px 40px -6px rgba(25, 18, 10, 0.25);
        border: 4px solid #FFFFFF;
        z-index: 2;
        transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.5s ease;
    }

    .visual-card-secondary .visual-img {
        width: 100%;
        height: 100%;
        background-image: url('https://images.unsplash.com/photo-1551024709-8f23befc6f87?auto=format&fit=crop&w=800&q=85');
        background-size: cover;
        background-position: center;
        transition: transform 0.8s ease;
    }

    .visual-card-secondary:hover .visual-img {
        transform: scale(1.06);
    }

    /* Subtle Hover Tilt on Cards */
    .about-visual-right:hover .visual-card-primary {
        transform: translateY(-6px) rotate(-1deg);
    }

    .about-visual-right:hover .visual-card-secondary {
        transform: translateY(-10px) rotate(1.5deg);
    }

    /* Staggered Scroll Reveal */
    .about-reveal {
        opacity: 0;
        transform: translate3d(0, 24px, 0);
        transition: opacity 0.75s cubic-bezier(0.16, 1, 0.3, 1),
                    transform 0.75s cubic-bezier(0.16, 1, 0.3, 1);
        will-change: opacity, transform;
    }

    .about-reveal.is-visible {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }

    /* Responsive Breakpoints */
    @media (max-width: 1080px) {
        .about-container {
            grid-template-columns: 1fr;
            gap: 2.5rem;
        }
        .about-visual-right {
            height: 380px;
            max-width: 550px;
            margin: 0 auto;
            width: 100%;
        }
    }

    @media (max-width: 768px) {
        .luxury-about-section {
            padding: 3.5rem 1.1rem;
        }
        .accessibility-grid {
            grid-template-columns: 1fr;
        }
        .about-stats-row {
            gap: 1.5rem;
            flex-wrap: wrap;
        }
        .about-visual-right {
            height: 320px;
        }
    }
</style>

<!-- 2. COMPONENT HTML MARKUP -->
<section id="about" class="luxury-about-section">
    <div class="about-container">
        
        <!-- Left Content Column -->
        <div class="about-content-left about-reveal">
            <span class="about-tag">CENTRE OF CITY • HERITAGE HOSPITALITY</span>
            <h2 class="about-title">An Architectural Sanctuary of Authentic City Serenity</h2>
            
            <p class="about-desc-primary">
                <strong>Welcome To Hotel Traditional Inn</strong> situated in the vibrant centre of the city near North Campus, Kamla Nagar, Shalimar Bagh, Netaji Subhash Place, and Moti Nagar.
            </p>
            
            <p class="about-desc-secondary">
                Designed to harmonize peaceful retreat with effortless city connectivity, every corridor, chamber, and private lounge reflects refined Indian hospitality, dedicated concierge care, and unhurried comfort.
            </p>

            <!-- Key Contact & Check-in Cards -->
            <div class="about-key-cards">
                <div class="about-badge-card">
                    <div class="badge-icon-box">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </div>
                    <div class="badge-details">
                        <span class="badge-label">24×7 DIRECT CALL</span>
                        <a href="tel:+919999241488" class="badge-val">+91 9999 2414 88</a>
                    </div>
                </div>

                <div class="about-badge-card">
                    <div class="badge-icon-box">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <div class="badge-details">
                        <span class="badge-label">CHECK-IN TIME</span>
                        <span class="badge-val">12:00 Noon</span>
                    </div>
                </div>
            </div>

            <!-- Accessibility / Location Connectivity (From Second Image) -->
            <div class="accessibility-block">
                <div class="accessibility-header">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#8C7355" stroke-width="2">
                        <path d="M12 2a8 8 0 0 0-8 8c0 5.25 8 12 8 12s8-6.75 8-12a8 8 0 0 0-8-8z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    <h4>Strategic City Accessibility</h4>
                </div>

                <div class="accessibility-grid">
                    <div class="access-item">
                        <span class="access-bullet"></span>
                        <span><strong class="access-name">IGI Airport, Delhi</strong> — <span class="access-dist">20 Kms</span></span>
                    </div>
                    <div class="access-item">
                        <span class="access-bullet"></span>
                        <span><strong class="access-name">Nizamuddin Railway Station</strong> — <span class="access-dist">16 Kms</span></span>
                    </div>
                    <div class="access-item">
                        <span class="access-bullet"></span>
                        <span><strong class="access-name">Old Delhi Railway Station</strong> — <span class="access-dist">10 Kms</span></span>
                    </div>
                    <div class="access-item">
                        <span class="access-bullet"></span>
                        <span><strong class="access-name">New Delhi Railway Station</strong> — <span class="access-dist">09 Kms</span></span>
                    </div>
                    <div class="access-item">
                        <span class="access-bullet"></span>
                        <span><strong class="access-name">Connaught Place (CP)</strong> — <span class="access-dist">08 Kms</span></span>
                    </div>
                    <div class="access-item">
                        <span class="access-bullet"></span>
                        <span><strong class="access-name">North Campus Delhi</strong> — <span class="access-dist">02 Kms</span></span>
                    </div>
                    <div class="access-item">
                        <span class="access-bullet"></span>
                        <span><strong class="access-name">Karol Bagh Shopping Market</strong> — <span class="access-dist">05 Kms</span></span>
                    </div>
                    <div class="access-item">
                        <span class="access-bullet"></span>
                        <span><strong class="access-name">G T K Industrial Area</strong> — <span class="access-dist">02 Kms</span></span>
                    </div>
                    <div class="access-item">
                        <span class="access-bullet"></span>
                        <span><strong class="access-name">Pitampura</strong> — <span class="access-dist">02 Kms</span></span>
                    </div>
                    <div class="access-item">
                        <span class="access-bullet"></span>
                        <span><strong class="access-name">Shalimar Bagh</strong> — <span class="access-dist">02 Kms</span></span>
                    </div>
                    <div class="access-item">
                        <span class="access-bullet"></span>
                        <span><strong class="access-name">Kashmere Gate Metro</strong> — <span class="access-dist">04 Kms</span></span>
                    </div>
                    <div class="access-item">
                        <span class="access-bullet"></span>
                        <span><strong class="access-name">Sarai Rohilla Railway Station</strong> — <span class="access-dist">03 Kms</span></span>
                    </div>
                </div>
            </div>

            <!-- Stats Row -->
            <div class="about-stats-row">
                <div class="stat-item">
                    <span class="stat-number">98%</span>
                    <span class="stat-label">Patron Retention</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">24×7</span>
                    <span class="stat-label">Dedicated Concierge</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">12:00</span>
                    <span class="stat-label">Check-In Noon</span>
                </div>
            </div>
        </div>

        <!-- Right Staggered Dual Visual Composition -->
        <div class="about-visual-right about-reveal">
            <!-- Primary Card: Hotel Building Facade at Night -->
            <div class="visual-card-primary">
                <div class="visual-img"></div>
            </div>

            <!-- Secondary Staggered Card: Welcome Refreshment / Artisan Lounge -->
            <div class="visual-card-secondary">
                <div class="visual-img"></div>
            </div>
        </div>

    </div>
</section>

<!-- 3. COMPONENT JAVASCRIPT (60fps Parallax Tilt & Scroll Reveal) -->
<script>
    (function initLuxuryAbout() {
        const run = () => {
            const visualWrapper = document.querySelector('.about-visual-right');

            if (visualWrapper) {
                let animationFrameId = null;

                // 60FPS Subtle 3D Tilt on Mousemove
                visualWrapper.addEventListener('mousemove', (e) => {
                    if (animationFrameId) cancelAnimationFrame(animationFrameId);

                    animationFrameId = requestAnimationFrame(() => {
                        const rect = visualWrapper.getBoundingClientRect();
                        const x = e.clientX - rect.left;
                        const y = e.clientY - rect.top;
                        
                        const centerX = rect.width / 2;
                        const centerY = rect.height / 2;
                        
                        const rotateX = ((y - centerY) / centerY) * -5;
                        const rotateY = ((x - centerX) / centerX) * 5;

                        const card1 = visualWrapper.querySelector('.visual-card-primary');
                        const card2 = visualWrapper.querySelector('.visual-card-secondary');

                        if (card1) card1.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-6px)`;
                        if (card2) card2.style.transform = `rotateX(${rotateX * 1.2}deg) rotateY(${rotateY * 1.2}deg) translateY(-10px)`;
                    });
                });

                visualWrapper.addEventListener('mouseleave', () => {
                    if (animationFrameId) cancelAnimationFrame(animationFrameId);
                    const card1 = visualWrapper.querySelector('.visual-card-primary');
                    const card2 = visualWrapper.querySelector('.visual-card-secondary');
                    if (card1) card1.style.transform = 'rotateX(0deg) rotateY(0deg) translateY(0)';
                    if (card2) card2.style.transform = 'rotateX(0deg) rotateY(0deg) translateY(0)';
                });
            }

            // Scroll Reveal Animation
            const scrollElements = document.querySelectorAll('.about-reveal');
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry, index) => {
                        if (entry.isIntersecting) {
                            setTimeout(() => {
                                entry.target.classList.add('is-visible');
                            }, index * 70);
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