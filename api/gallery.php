<!-- ========================================================
     SELF-CONTAINED GALLERY COMPONENT: gallery.php
     Hotel Traditional INN - Architectural & Estate Gallery
     (Compact Margins & Spacing Optimized for Easy Copy-Paste)
======================================================== -->

<!-- 1. COMPONENT STYLING (CSS) -->
<style>
    /* Section Architecture - Compact Margins & Spacing */
    .luxury-gallery-section {
        position: relative;
        padding: 4rem 1.5rem; /* Reduced Section Padding */
        background-color: #FBF9F5;
        font-family: var(--font-sans, 'Spline Sans', sans-serif);
        overflow: hidden;
    }

    .gallery-container {
        max-width: 1320px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    /* Section Header */
    .gallery-header {
        max-width: 780px;
        margin-bottom: 2rem; /* Reduced Header Margin */
    }

    .gallery-tag {
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 0.2em;
        color: #8C7355;
        text-transform: uppercase;
        display: block;
        margin-bottom: 0.4rem; /* Reduced Margin */
    }

    .gallery-title {
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-size: clamp(2.2rem, 3.8vw, 3.2rem);
        font-weight: 400;
        color: #171614;
        letter-spacing: -0.015em;
        line-height: 1.15;
        margin: 0 0 0.5rem 0; /* Reduced Margin */
    }

    .gallery-subtitle {
        font-size: 0.92rem;
        font-weight: 400; /* Spline Sans Regular */
        color: #5E584F;
        line-height: 1.6;
        margin: 0;
    }

    /* Bento Gallery Grid Architecture */
    .gallery-grid-wrapper {
        display: flex;
        flex-direction: column;
        gap: 1rem; /* Reduced Gap between Rows */
    }

    /* Row 1: 60% / 40% Bento Split */
    .gallery-row-top {
        display: grid;
        grid-template-columns: 1.55fr 1fr;
        gap: 1rem; /* Reduced Gap */
        height: 380px; /* Reduced Height */
    }

    /* Row 2: 3 Equal Columns */
    .gallery-row-bottom {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem; /* Reduced Gap */
        height: 290px; /* Reduced Height */
    }

    /* Individual Gallery Tile */
    .gallery-item {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        cursor: pointer;
        box-shadow: 0 8px 24px -6px rgba(28, 20, 12, 0.1);
        transform: translate3d(0, 0, 0);
        transition: transform 0.45s cubic-bezier(0.16, 1, 0.3, 1),
                    box-shadow 0.45s ease;
        will-change: transform, box-shadow;
    }

    .gallery-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 18px 40px -8px rgba(20, 15, 8, 0.18);
    }

    /* Background Image with 60FPS Smooth Zoom */
    .gallery-img {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        transition: transform 0.85s cubic-bezier(0.16, 1, 0.3, 1);
        will-change: transform;
    }

    .gallery-item:hover .gallery-img {
        transform: scale(1.06);
    }

    /* Atmospheric Vignette & Contrast Overlay */
    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(
            180deg,
            rgba(0, 0, 0, 0.05) 0%,
            rgba(0, 0, 0, 0.15) 50%,
            rgba(14, 12, 10, 0.82) 100%
        );
        transition: background 0.4s ease;
    }

    .gallery-item:hover .gallery-overlay {
        background: linear-gradient(
            180deg,
            rgba(0, 0, 0, 0.0) 0%,
            rgba(0, 0, 0, 0.2) 40%,
            rgba(10, 8, 6, 0.88) 100%
        );
    }

    /* Content Typography Inside Card */
    .gallery-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 1.2rem 1.4rem; /* Compact Caption Padding */
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        z-index: 2;
    }

    .caption-text-wrap {
        display: flex;
        flex-direction: column;
        gap: 3px;
        max-width: 85%;
    }

    .gallery-category {
        font-size: 0.62rem;
        font-weight: 700;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.85);
    }

    .gallery-name {
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-size: clamp(1.15rem, 1.5vw, 1.45rem);
        font-weight: 500;
        color: #FFFFFF;
        line-height: 1.2;
        margin: 0;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.4);
    }

    /* Expand / Zoom Icon (Bottom Right) */
    .gallery-expand-btn {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.18);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.35);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #FFFFFF;
        opacity: 0.75;
        transition: transform 0.35s ease, opacity 0.35s ease, background 0.35s ease;
        flex-shrink: 0;
    }

    .gallery-item:hover .gallery-expand-btn {
        opacity: 1;
        transform: scale(1.1) rotate(90deg);
        background: rgba(255, 255, 255, 0.32);
    }

    /* Lightbox Modal (60fps Glassmorphic Popup) */
    .gallery-lightbox {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(14, 12, 10, 0.92);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        z-index: 2000;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.35s cubic-bezier(0.16, 1, 0.3, 1),
                    visibility 0.35s ease;
        padding: 1.5rem;
    }

    .gallery-lightbox.active {
        opacity: 1;
        visibility: visible;
    }

    .lightbox-content-box {
        position: relative;
        max-width: 1000px;
        width: 100%;
        max-height: 85vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        transform: scale(0.95);
        transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .gallery-lightbox.active .lightbox-content-box {
        transform: scale(1);
    }

    .lightbox-img {
        max-width: 100%;
        max-height: 72vh;
        border-radius: 8px;
        object-fit: cover;
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.5);
    }

    .lightbox-caption-bar {
        margin-top: 1rem;
        text-align: center;
        color: #FFFFFF;
    }

    .lightbox-tag {
        font-size: 0.68rem;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        color: #C5A880;
        display: block;
        margin-bottom: 0.25rem;
    }

    .lightbox-title {
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-size: 1.6rem;
        margin: 0;
    }

    .lightbox-close {
        position: absolute;
        top: -40px;
        right: 0;
        color: #FFFFFF;
        font-size: 2rem;
        background: none;
        border: none;
        cursor: pointer;
        transition: transform 0.3s ease, color 0.3s ease;
    }

    .lightbox-close:hover {
        transform: scale(1.15);
        color: #C5A880;
    }

    /* Staggered Scroll Entrance */
    .gallery-reveal {
        opacity: 0;
        transform: translate3d(0, 24px, 0);
        transition: opacity 0.75s cubic-bezier(0.16, 1, 0.3, 1),
                    transform 0.75s cubic-bezier(0.16, 1, 0.3, 1);
        will-change: opacity, transform;
    }

    .gallery-reveal.is-visible {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }

    /* Responsive Breakpoints */
    @media (max-width: 1024px) {
        .gallery-row-top {
            grid-template-columns: 1fr;
            height: auto;
        }
        .gallery-row-top .gallery-item {
            height: 320px;
        }
        .gallery-row-bottom {
            grid-template-columns: repeat(2, 1fr);
            height: auto;
        }
        .gallery-row-bottom .gallery-item {
            height: 270px;
        }
    }

    @media (max-width: 768px) {
        .luxury-gallery-section {
            padding: 3.5rem 1.1rem;
        }
        .gallery-row-bottom {
            grid-template-columns: 1fr;
        }
        .gallery-row-top .gallery-item,
        .gallery-row-bottom .gallery-item {
            height: 260px;
        }
        .gallery-caption {
            padding: 1rem 1.1rem;
        }
    }
</style>

<!-- 2. COMPONENT HTML MARKUP -->
<section id="photos" class="luxury-gallery-section">
    <div class="gallery-container">
        
        <!-- Section Header (Matches Screenshot) -->
        <div class="gallery-header gallery-reveal">
            <span class="gallery-tag">ROYAL HERITAGE &amp; ESTATE PHOTOGRAPHY</span>
            <h2 class="gallery-title">Architectural &amp; Estate Gallery</h2>
            <p class="gallery-subtitle">
                Immerse yourself in the timeless spaces of Hotel Traditional INN, from sun-drenched peristyle courtyards and luxury chambers to tranquil thermal baolis and seaside dining verandas.
            </p>
        </div>

        <!-- Bento Grid Gallery -->
        <div class="gallery-grid-wrapper">
            
            <!-- ROW 1: Wide Card (60%) + Portrait Card (40%) -->
            <div class="gallery-row-top">
                
                <!-- Item 1: Wide Card (The Grand Palace & Infinity Baoli Basin) -->
                <div class="gallery-item gallery-reveal" 
                     data-full="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=1920&q=90"
                     data-tag="EXTERIOR GROUNDS &amp; PALACE"
                     data-title="The Roman Peristyle &amp; Salt Infinity Basin">
                    <div class="gallery-img" style="background-image: url('https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=1400&q=85');"></div>
                    <div class="gallery-overlay"></div>
                    <div class="gallery-caption">
                        <div class="caption-text-wrap">
                            <span class="gallery-category">EXTERIOR GROUNDS</span>
                            <h3 class="gallery-name">The Roman Peristyle &amp; Salt Infinity Basin</h3>
                        </div>
                        <div class="gallery-expand-btn" title="View Fullscreen">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 3h6v6"></path>
                                <path d="M9 21H3v-6"></path>
                                <path d="M21 3l-7 7"></path>
                                <path d="M3 21l7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Item 2: Portrait Card (Travertine Arcades & Lemon Groves) -->
                <div class="gallery-item gallery-reveal" 
                     data-full="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=1600&q=90"
                     data-tag="HERITAGE ARCHITECTURE"
                     data-title="Travertine Arcades &amp; Lemon Groves">
                    <div class="gallery-img" style="background-image: url('https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=1000&q=85');"></div>
                    <div class="gallery-overlay"></div>
                    <div class="gallery-caption">
                        <div class="caption-text-wrap">
                            <span class="gallery-category">ARCHITECTURE</span>
                            <h3 class="gallery-name">Travertine Arcades &amp; Lemon Groves</h3>
                        </div>
                        <div class="gallery-expand-btn" title="View Fullscreen">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 3h6v6"></path>
                                <path d="M9 21H3v-6"></path>
                                <path d="M21 3l-7 7"></path>
                                <path d="M3 21l7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ROW 2: 3 Equal Columns -->
            <div class="gallery-row-bottom">
                
                <!-- Item 3: Thermal Springs Bathhouse -->
                <div class="gallery-item gallery-reveal" 
                     data-full="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=1600&q=90"
                     data-tag="ROYAL WELLNESS"
                     data-title="Thermal Springs Bathhouse">
                    <div class="gallery-img" style="background-image: url('https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=900&q=85');"></div>
                    <div class="gallery-overlay"></div>
                    <div class="gallery-caption">
                        <div class="caption-text-wrap">
                            <span class="gallery-category">WELLNESS</span>
                            <h3 class="gallery-name">Thermal Springs Bathhouse</h3>
                        </div>
                        <div class="gallery-expand-btn" title="View Fullscreen">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 3h6v6"></path>
                                <path d="M9 21H3v-6"></path>
                                <path d="M21 3l-7 7"></path>
                                <path d="M3 21l7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Item 4: L'Étoile D'Or / Shahi Darbar Restaurant -->
                <div class="gallery-item gallery-reveal" 
                     data-full="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1600&q=90"
                     data-tag="SHAHI CULINARY DINING"
                     data-title="L'Étoile D'Or Royal Restaurant">
                    <div class="gallery-img" style="background-image: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=900&q=85');"></div>
                    <div class="gallery-overlay"></div>
                    <div class="gallery-caption">
                        <div class="caption-text-wrap">
                            <span class="gallery-category">CULINARY</span>
                            <h3 class="gallery-name">L'Étoile D'Or Restaurant</h3>
                        </div>
                        <div class="gallery-expand-btn" title="View Fullscreen">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 3h6v6"></path>
                                <path d="M9 21H3v-6"></path>
                                <path d="M21 3l-7 7"></path>
                                <path d="M3 21l7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Item 5: La Terrazza Sul Mare / Cliffside Terrace -->
                <div class="gallery-item gallery-reveal" 
                     data-full="https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=1600&q=90"
                     data-tag="OUTDOOR CLIFFSIDE VIEW"
                     data-title="La Terrazza Sul Mare">
                    <div class="gallery-img" style="background-image: url('https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=900&q=85');"></div>
                    <div class="gallery-overlay"></div>
                    <div class="gallery-caption">
                        <div class="caption-text-wrap">
                            <span class="gallery-category">OUTDOOR</span>
                            <h3 class="gallery-name">La Terrazza Sul Mare</h3>
                        </div>
                        <div class="gallery-expand-btn" title="View Fullscreen">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 3h6v6"></path>
                                <path d="M9 21H3v-6"></path>
                                <path d="M21 3l-7 7"></path>
                                <path d="M3 21l7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- 60FPS Interactive Lightbox Modal -->
    <div class="gallery-lightbox" id="galleryLightbox">
        <div class="lightbox-content-box">
            <button class="lightbox-close" id="lightboxClose" aria-label="Close Lightbox">&times;</button>
            <img src="" alt="Estate Preview" class="lightbox-img" id="lightboxImage">
            <div class="lightbox-caption-bar">
                <span class="lightbox-tag" id="lightboxTag">EXTERIOR GROUNDS</span>
                <h3 class="lightbox-title" id="lightboxTitle">The Roman Peristyle &amp; Salt Infinity Basin</h3>
            </div>
        </div>
    </div>
</section>

<!-- 3. COMPONENT JAVASCRIPT (60fps Lightbox & Scroll Reveal) -->
<script>
    (function initLuxuryGallery() {
        const run = () => {
            const galleryItems = document.querySelectorAll('.gallery-item');
            const lightbox = document.getElementById('galleryLightbox');
            const lightboxImg = document.getElementById('lightboxImage');
            const lightboxTag = document.getElementById('lightboxTag');
            const lightboxTitle = document.getElementById('lightboxTitle');
            const lightboxClose = document.getElementById('lightboxClose');

            if (galleryItems.length && lightbox) {
                // Open Lightbox on Click
                galleryItems.forEach(item => {
                    item.addEventListener('click', () => {
                        const fullSrc = item.getAttribute('data-full');
                        const tag = item.getAttribute('data-tag');
                        const title = item.getAttribute('data-title');

                        if (lightboxImg && fullSrc) {
                            lightboxImg.src = fullSrc;
                            if (lightboxTag) lightboxTag.textContent = tag || '';
                            if (lightboxTitle) lightboxTitle.textContent = title || '';
                            lightbox.classList.add('active');
                            document.body.style.overflow = 'hidden';
                        }
                    });
                });

                // Close Lightbox Handler
                const closeLightbox = () => {
                    lightbox.classList.remove('active');
                    document.body.style.overflow = '';
                    if (lightboxImg) lightboxImg.src = '';
                };

                if (lightboxClose) {
                    lightboxClose.addEventListener('click', closeLightbox);
                }

                lightbox.addEventListener('click', (e) => {
                    if (e.target === lightbox) closeLightbox();
                });

                document.addEventListener('keydown', (e) => {
                    if (e.key === 'Escape' && lightbox.classList.contains('active')) {
                        closeLightbox();
                    }
                });
            }

            // Staggered Scroll Reveal
            const scrollElements = document.querySelectorAll('.gallery-reveal');
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry, index) => {
                        if (entry.isIntersecting) {
                            setTimeout(() => {
                                entry.target.classList.add('is-visible');
                            }, index * 50); // 50ms stagger
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