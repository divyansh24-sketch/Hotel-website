<!-- ========================================================
     SELF-CONTAINED FLOATING ACTIONS COMPONENT: floating-actions.php
     Hotel Traditional INN - WhatsApp Concierge & Back to Top
     Features: 
       - Left: WhatsApp 24x7 Direct Concierge with Pulse
       - Right: Luxury Back-to-Top Button
       - Both appear with smooth 60fps pop-in ONLY after scrolling past Hero!
======================================================== -->

<!-- 1. COMPONENT STYLING (CSS) -->
<style>
    /* Common Floating Widget Transition State */
    .floating-action-btn {
        position: fixed;
        bottom: 2rem;
        z-index: 9999;
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transform: translate3d(0, 24px, 0) scale(0.85);
        transition: opacity 0.4s cubic-bezier(0.16, 1, 0.3, 1),
                    transform 0.4s cubic-bezier(0.16, 1, 0.3, 1),
                    visibility 0.4s ease,
                    box-shadow 0.3s ease;
        will-change: transform, opacity;
    }

    /* Active / Visible State After Scrolling Past Hero */
    .floating-action-btn.is-visible {
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
        transform: translate3d(0, 0, 0) scale(1);
    }

    /* ========================================================
       1. LEFT: WHATSAPP 24x7 CONCIERGE BUTTON
    ======================================================== */
    .floating-whatsapp-btn {
        left: 2rem;
        display: inline-flex;
        align-items: center;
        gap: 0.65rem;
        background: #25D366;
        color: #FFFFFF;
        padding: 0.72rem 1.15rem 0.72rem 0.95rem;
        border-radius: 50px;
        text-decoration: none;
        font-family: var(--font-sans, 'Spline Sans', sans-serif);
        box-shadow: 0 8px 24px -4px rgba(37, 211, 102, 0.45),
                    0 4px 12px rgba(0, 0, 0, 0.12);
        border: 2px solid rgba(255, 255, 255, 0.3);
    }

    .floating-whatsapp-btn:hover {
        background: #20BA5A;
        transform: translate3d(0, -3px, 0) scale(1.03);
        box-shadow: 0 12px 30px -4px rgba(37, 211, 102, 0.6),
                    0 6px 16px rgba(0, 0, 0, 0.16);
    }

    .whatsapp-icon-wrap {
        width: 28px;
        height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .whatsapp-text-group {
        display: flex;
        flex-direction: column;
        line-height: 1.15;
    }

    .whatsapp-tag {
        font-size: 0.6rem;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        opacity: 0.9;
    }

    .whatsapp-label {
        font-size: 0.8rem;
        font-weight: 600;
        letter-spacing: -0.01em;
    }

    /* Subtle Radar Pulse Ring */
    .whatsapp-pulse-ring {
        position: absolute;
        top: -4px;
        left: -4px;
        right: -4px;
        bottom: -4px;
        border-radius: 50px;
        border: 2px solid rgba(37, 211, 102, 0.6);
        animation: whatsappRadar 2.2s infinite;
        pointer-events: none;
    }

    @keyframes whatsappRadar {
        0% {
            transform: scale(0.96);
            opacity: 0.8;
        }
        70% {
            transform: scale(1.12);
            opacity: 0;
        }
        100% {
            transform: scale(1.15);
            opacity: 0;
        }
    }

    /* ========================================================
       2. RIGHT: LUXURY BACK TO TOP BUTTON
    ======================================================== */
    .floating-backtotop-btn {
        right: 2rem;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: #11100F;
        color: #FFFFFF;
        border: 1px solid rgba(255, 255, 255, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        outline: none;
        box-shadow: 0 8px 24px -4px rgba(0, 0, 0, 0.25);
    }

    .floating-backtotop-btn .icon-arrow-up {
        width: 18px;
        height: 18px;
        transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .floating-backtotop-btn:hover {
        background: #8C7355;
        border-color: #C5A880;
        transform: translate3d(0, -4px, 0) scale(1.05);
        box-shadow: 0 12px 28px -4px rgba(140, 115, 85, 0.4);
    }

    .floating-backtotop-btn:hover .icon-arrow-up {
        transform: translateY(-3px);
    }

    /* Responsive Adjustments */
    @media (max-width: 640px) {
        .floating-action-btn {
            bottom: 1.25rem;
        }
        .floating-whatsapp-btn {
            left: 1.15rem;
            padding: 0.65rem 0.95rem;
        }
        .whatsapp-tag {
            display: none;
        }
        .floating-backtotop-btn {
            right: 1.15rem;
            width: 42px;
            height: 42px;
        }
    }
</style>

<!-- 2. COMPONENT HTML MARKUP -->
<div class="floating-actions-container">
    
    <!-- LEFT: WHATSAPP DIRECT CHAT BUTTON -->
    <a 
        href="https://api.whatsapp.com/send/?phone=919999241488&text&type=phone_number&app_absent=0" 
        target="_blank" 
        rel="noopener noreferrer" 
        class="floating-action-btn floating-whatsapp-btn" 
        id="floatingWhatsAppBtn"
        aria-label="Chat with Hotel Traditional INN on WhatsApp">
        
        <div class="whatsapp-pulse-ring"></div>
        
        <div class="whatsapp-icon-wrap">
            <!-- Official WhatsApp Vector Logo -->
            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
        </div>

        <div class="whatsapp-text-group">
            <span class="whatsapp-tag">24×7 CONCIERGE</span>
            <span class="whatsapp-label">Chat on WhatsApp</span>
        </div>
    </a>

    <!-- RIGHT: BACK TO TOP BUTTON -->
    <button 
        type="button" 
        class="floating-action-btn floating-backtotop-btn" 
        id="floatingBackToTopBtn" 
        aria-label="Scroll back to top">
        <svg class="icon-arrow-up" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="18 15 12 9 6 15"></polyline>
        </svg>
    </button>

</div>

<!-- 3. COMPONENT JAVASCRIPT (Hero Scroll Trigger Engine) -->
<script>
    (function initFloatingActions() {
        const run = () => {
            const whatsappBtn = document.getElementById('floatingWhatsAppBtn');
            const backToTopBtn = document.getElementById('floatingBackToTopBtn');
            const heroSection = document.getElementById('home') || document.getElementById('hero') || document.querySelector('.luxury-hero') || document.querySelector('.hero-section');

            if (!whatsappBtn || !backToTopBtn) return;

            // 1. Click Listener for Smooth Back to Top
            backToTopBtn.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // 2. 60FPS Scroll Observer for Hero Section
            let isPastHero = false;

            const checkScrollPosition = () => {
                const scrollY = window.pageYOffset || document.documentElement.scrollTop;
                const triggerPoint = heroSection ? (heroSection.offsetTop + heroSection.offsetHeight * 0.7) : 450;

                if (scrollY > triggerPoint) {
                    if (!isPastHero) {
                        whatsappBtn.classList.add('is-visible');
                        backToTopBtn.classList.add('is-visible');
                        isPastHero = true;
                    }
                } else {
                    if (isPastHero) {
                        whatsappBtn.classList.remove('is-visible');
                        backToTopBtn.classList.remove('is-visible');
                        isPastHero = false;
                    }
                }
            };

            // Passive 60fps Scroll Listener
            let ticking = false;
            window.addEventListener('scroll', () => {
                if (!ticking) {
                    window.requestAnimationFrame(() => {
                        checkScrollPosition();
                        ticking = false;
                    });
                    ticking = true;
                }
            }, { passive: true });

            // Initial check on load
            checkScrollPosition();
        };

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', run);
        } else {
            run();
        }
    })();
</script>