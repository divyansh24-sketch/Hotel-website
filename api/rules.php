<!-- ========================================================
     SELF-CONTAINED RULES & ETIQUETTE COMPONENT: rules.php
     Hotel Traditional INN - Guest Sanctuary Charter
     Contains: Internal CSS + Semantic HTML + 60fps Interactive JS
     (Compact Margins & Spacing Optimized for Easy Copy-Paste)
======================================================== -->

<!-- 1. COMPONENT STYLING (CSS) -->
<style>
    /* Section Architecture - Compact Margins & Spacing */
    .luxury-rules-section {
        position: relative;
        padding: 4rem 1.5rem; /* Compact Section Padding */
        background-color: #F4F1EA; /* Warm Luxury Canvas Matching Screenshot */
        font-family: var(--font-sans, 'Spline Sans', sans-serif);
        overflow: hidden;
    }

    .rules-container {
        max-width: 1320px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    /* Section Header (Left Aligned Matching Screenshot) */
    .rules-header {
        max-width: 760px;
        margin-bottom: 2.4rem; /* Compact Margin */
    }

    .rules-tag {
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 0.22em;
        color: #7D6851; /* Warm Heritage Gold/Bronze */
        text-transform: uppercase;
        display: block;
        margin-bottom: 0.5rem;
    }

    .rules-title {
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-size: clamp(2.3rem, 4vw, 3.4rem);
        font-weight: 400;
        color: #171614;
        letter-spacing: -0.015em;
        line-height: 1.15;
        margin: 0 0 0.85rem 0;
    }

    .rules-subtitle {
        font-size: 0.94rem;
        font-weight: 400; /* Spline Sans Regular */
        color: #555047;
        line-height: 1.62;
        margin: 0;
    }

    /* 4-Column Card Grid */
    .rules-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1.4rem; /* Compact Gap */
        perspective: 1200px;
    }

    /* Individual Card Architecture */
    .rule-card {
        background: #FFFFFF;
        border-radius: 12px;
        padding: 1.85rem 1.65rem 1.95rem 1.65rem; /* Balanced Compact Padding */
        border: 1px solid rgba(220, 214, 204, 0.7);
        box-shadow: 0 8px 24px -6px rgba(28, 20, 12, 0.05);
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        position: relative;
        overflow: hidden;
        transform: translate3d(0, 0, 0);
        transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1),
                    box-shadow 0.4s ease,
                    border-color 0.3s ease;
        will-change: transform, box-shadow;
        cursor: default;
    }

    /* 60FPS Smooth Lift on Hover */
    .rule-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 40px -10px rgba(28, 20, 12, 0.12);
        border-color: rgba(180, 150, 110, 0.7);
    }

    /* Top Icon */
    .rule-icon-box {
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        color: #7D6851; /* Warm Gold Tone */
        margin-bottom: 1.25rem;
        transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1),
                    color 0.3s ease;
    }

    .rule-card:hover .rule-icon-box {
        transform: scale(1.1);
        color: #9C8162;
    }

    /* Card Title */
    .rule-name {
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-size: 1.35rem;
        font-weight: 600;
        color: #171614;
        line-height: 1.22;
        margin: 0 0 0.85rem 0;
        transition: color 0.3s ease;
    }

    .rule-card:hover .rule-name {
        color: #7D6851;
    }

    /* Card Description */
    .rule-desc {
        font-size: 0.84rem;
        font-weight: 400; /* Spline Sans Regular */
        color: #555047;
        line-height: 1.62;
        margin: 0;
    }

    /* Top Accent Line on Hover */
    .rule-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background: linear-gradient(90deg, #C5A880, #8C7355);
        opacity: 0;
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.4s ease;
    }

    .rule-card:hover::before {
        opacity: 1;
        transform: scaleX(1);
    }

    /* Staggered Scroll Entrance Animations */
    .rules-reveal {
        opacity: 0;
        transform: translate3d(0, 24px, 0);
        transition: opacity 0.75s cubic-bezier(0.16, 1, 0.3, 1),
                    transform 0.75s cubic-bezier(0.16, 1, 0.3, 1);
        will-change: opacity, transform;
    }

    .rules-reveal.is-visible {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }

    /* Responsive Breakpoints */
    @media (max-width: 1080px) {
        .rules-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 1.25rem;
        }
    }

    @media (max-width: 640px) {
        .luxury-rules-section {
            padding: 3.2rem 1.15rem;
        }
        .rules-header {
            margin-bottom: 1.8rem;
        }
        .rules-grid {
            grid-template-columns: 1fr;
            gap: 1.15rem;
        }
        .rule-card {
            padding: 1.5rem 1.35rem;
        }
    }
</style>

<!-- 2. COMPONENT HTML MARKUP -->
<section id="etiquette" class="luxury-rules-section">
    <div class="rules-container">
        
        <!-- Section Header (Left Aligned Matching Screenshot) -->
        <div class="rules-header rules-reveal">
            <span class="rules-tag">GUEST SANCTUARY CHARTER</span>
            <h2 class="rules-title">Hotel Rules &amp; Residence Etiquette</h2>
            <p class="rules-subtitle">
                To preserve tranquility, privacy, and acoustic serenity for all resident patrons, we kindly ask all guests to observe our house policies.
            </p>
        </div>

        <!-- 4 Luxury Policy Cards Grid -->
        <div class="rules-grid">
            
            <!-- Card 1: Check-In & Check-Out -->
            <div class="rule-card rules-reveal" data-tilt>
                <div class="rule-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 15 15"></polyline>
                    </svg>
                </div>
                <h3 class="rule-name">Check-In &amp; Check-Out</h3>
                <p class="rule-desc">
                    Check-in commences from 15:00. Check-out is requested by 12:00 noon. Early arrival or late departure may be arranged through concierge.
                </p>
            </div>

            <!-- Card 2: Quiet Hours -->
            <div class="rule-card rules-reveal" data-tilt>
                <div class="rule-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M11 5L6 9H2v6h4l5 4V5z"></path>
                        <line x1="22" y1="9" x2="16" y2="15"></line>
                        <line x1="16" y1="9" x2="22" y2="15"></line>
                    </svg>
                </div>
                <h3 class="rule-name">Quiet Hours</h3>
                <p class="rule-desc">
                    Sanctuary quiet hours are observed between 22:30 and 07:30 across all suites, inner loggias, and pool areas.
                </p>
            </div>

            <!-- Card 3: 100% Smoke-Free -->
            <div class="rule-card rules-reveal" data-tilt>
                <div class="rule-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 12H2v3h16v-3z"></path>
                        <line x1="7" y1="12" x2="7" y2="15"></line>
                        <line x1="22" y1="12" x2="22" y2="15"></line>
                        <path d="M18 8c0-2.5-2-2.5-2-5"></path>
                        <path d="M22 8c0-2.5-2-2.5-2-5"></path>
                        <line x1="2" y1="2" x2="22" y2="22"></line>
                    </svg>
                </div>
                <h3 class="rule-name">100% Smoke-Free</h3>
                <p class="rule-desc">
                    All indoor suites, corridors, and dining venues are strictly non-smoking. Designated cigar salons are located on outer terraces.
                </p>
            </div>

            <!-- Card 4: Pet Policy -->
            <div class="rule-card rules-reveal" data-tilt>
                <div class="rule-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 13c-2.3 0-3.5 1.5-3.5 2.8 0 1.6 1.4 2.7 3.5 2.7s3.5-1.1 3.5-2.7c0-1.3-1.2-2.8-3.5-2.8z"></path>
                        <ellipse cx="6.5" cy="11.5" rx="1.6" ry="2.2"></ellipse>
                        <ellipse cx="9.8" cy="7.2" rx="1.6" ry="2.2"></ellipse>
                        <ellipse cx="14.2" cy="7.2" rx="1.6" ry="2.2"></ellipse>
                        <ellipse cx="17.5" cy="11.5" rx="1.6" ry="2.2"></ellipse>
                    </svg>
                </div>
                <h3 class="rule-name">Pet Policy</h3>
                <p class="rule-desc">
                    Quiet companion dogs under 10 kg are welcomed in select Garden Suites with prior arrangement and pet amenities provided.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- 3. COMPONENT JAVASCRIPT (60fps Motion, 3D Tilt & Scroll Reveal) -->
<script>
    (function initLuxuryRules() {
        const run = () => {
            const ruleCards = document.querySelectorAll('.rule-card');

            ruleCards.forEach(card => {
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
                        
                        const rotateX = ((y - centerY) / centerY) * -4;
                        const rotateY = ((x - centerX) / centerX) * 4;

                        card.style.transform = `perspective(1000px) rotateX(${rotateX.toFixed(2)}deg) rotateY(${rotateY.toFixed(2)}deg) translateY(-6px)`;
                    });
                });

                // Reset position on Mouseleave
                card.addEventListener('mouseleave', () => {
                    if (animationFrameId) cancelAnimationFrame(animationFrameId);
                    card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0)';
                });
            });

            // Staggered Scroll Reveal with IntersectionObserver
            const scrollElements = document.querySelectorAll('.luxury-rules-section .rules-reveal');
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry, index) => {
                        if (entry.isIntersecting) {
                            setTimeout(() => {
                                entry.target.classList.add('is-visible');
                            }, index * 60); // 60ms Stagger
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